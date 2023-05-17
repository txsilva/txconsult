<?php
if ( ! function_exists( 'ma_setup' ) ) :
  function ma_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 200, 200 );

    register_nav_menus([
      'menu-1' => 'Principal',
    ]);

    add_theme_support('html5', [
      'search-form',
      'gallery',
      'caption'
    ]);

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support('custom-logo', [
      'height'      => 143,
      'width'       => 300,
      'flex-width'  => true,
      'flex-height' => true,
    ]);

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for editor styles.
    add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
    add_editor_style( 'style-editor.css' );

    // Add custom editor font sizes.
    add_theme_support('editor-font-sizes', [
      [
        'name'      => 'Pequena',
        'shortName' => 'S',
        'size'      => 19.5,
        'slug'      => 'small',
      ],
      [
        'name'      => 'Normal',
        'shortName' => 'M',
        'size'      => 22,
        'slug'      => 'normal',
      ],
      [
        'name'      => 'Grande',
        'shortName' => 'L',
        'size'      => 36.5,
        'slug'      => 'large',
      ],
      [
        'name'      => 'Extra grande',
        'shortName' => 'XL',
        'size'      => 49.5,
        'slug'      => 'huge',
      ],
    ]);

    add_theme_support( 'responsive-embeds' );
  }
endif;
add_action( 'after_setup_theme', 'ma_setup' );

function ma_widgets_init() {
  register_sidebar([
    'name'          => 'Rodapé',
    'id'            => 'sidebar-1',
    'description'   => 'Adicione widgets que serão exibidos no Rodapé do site.',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="title is-size-3">',
    'after_title'   => '</h2>',
  ]);

}
add_action( 'widgets_init', 'ma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ma_scripts() {
  wp_enqueue_style('ma-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );
  wp_style_add_data( 'ma-style', 'rtl', 'replace' );

  // if ( has_nav_menu( 'menu-1' ) ) {
  //   wp_enqueue_script( 'twentynineteen-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), [], '1.1', true );
  // }

  // wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );
}
add_action( 'wp_enqueue_scripts', 'ma_scripts' );


/**
 * Enqueue supplemental block editor styles.
 */
function ma_editor_customizer_styles() {
  wp_enqueue_style( 'ma-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );
}
add_action( 'enqueue_block_editor_assets', 'ma_editor_customizer_styles' );

function ma_archive_title_callback( $title ) {
  if (is_search()) { 
    return ' ' . get_search_query();
  }

  if (is_archive()) { 
    return ' ' . get_the_archive_title();
  }

  return $title;
}
add_filter('elementor/utils/get_the_archive_title','ma_archive_title_callback');

/*


// require get_template_directory() . '/inc/navmenu.php';

/**
 * Returns information about the current post's discussion, with cache support.
 */
function twentynineteen_get_discussion_data() {
	static $discussion, $post_id;

	$current_post_id = get_the_ID();
	if ( $current_post_id === $post_id ) {
		return $discussion; /* If we have discussion information for post ID, return cached object */
	} else {
		$post_id = $current_post_id;
	}

	$comments = get_comments(
		array(
			'post_id' => $current_post_id,
			'orderby' => 'comment_date_gmt',
			'order'   => get_option( 'comment_order', 'asc' ), /* Respect comment order from Settings » Discussion. */
			'status'  => 'approve',
			'number'  => 20, /* Only retrieve the last 20 comments, as the end goal is just 6 unique authors */
		)
	);

	$authors = array();
	foreach ( $comments as $comment ) {
		$authors[] = ( (int) $comment->user_id > 0 ) ? (int) $comment->user_id : $comment->comment_author_email;
	}

	$authors    = array_unique( $authors );
	$discussion = (object) array(
		'authors'   => array_slice( $authors, 0, 6 ),           /* Six unique authors commenting on the post. */
		'responses' => get_comments_number( $current_post_id ), /* Number of responses. */
	);

	return $discussion;
}

function twentynineteen_comment_form( $order ) {
  if ( true === $order || strtolower( $order ) === strtolower( get_option( 'comment_order', 'asc' ) ) ) {

    comment_form(
      array(
        'logged_in_as' => null,
        'title_reply'  => null,
      )
    );
  }
}