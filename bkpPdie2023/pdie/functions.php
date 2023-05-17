<?php
	
// Função para carregamento dos scripts 
function carrega_scripts(){
	
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap-4.4.1-dist/css/bootstrap.min.css', array(), '4.4.1', 'all');
	wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap-4.4.1-dist/js/bootstrap.min.js', array('jquery'), '4.4.1' , true);
}
	
add_action( 'wp_enqueue_scripts', 'carrega_scripts');

// Função para carregamento de menu
register_nav_menus(
array(
	'menu_1' => 'Menu Principal',
	'menu_2' => 'Menu Rodapé'
)
);

//Adiciona suporte a Post Thumbnails no Tema
add_theme_support( 'post-thumbnails' );

function setup_theme() 
{
 add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'setup_theme' );

//Adiciona o favicon no site
function bl_favicon() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="http://localhost/pdie/wp-content/uploads/2021/05/logo-fiocruz.png" />';
}
add_action('wp_head', 'bl_favicon');

/**
 * Criando uma area de widgets
 *
 */
function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'Rodape 1',
		'id' => 'rodape_widgets',
		'before_widget' => '<div id="rw1">',
		'after_widget' => '</div>',
		'before_title' => '<center><h2>',
		'after_title' => '</h2></center>',
	) );

	register_sidebar( array(
		'name' => 'Rodape 2',
		'id' => 'rodape_widgets1',
		'before_widget' => '<div class="rw2">',
		'after_widget' => '</div>',
		'before_title' => '<center><h2>',
		'after_title' => '</h2></center>',
	) );

	register_sidebar( array(
		'name' => 'Rodape 3',
		'id' => 'rodape_widgets3',
		'before_widget' => '<div id="rw3">',
		'after_widget' => '</div>',
		'before_title' => '<center><h2>',
		'after_title' => '</h2></center>',
	) );

		register_sidebar( array(
		'name' => 'Barra 1',
		'id' => 'barra_widgets4',
		'before_widget' => '<div id="rw">',
		'after_widget' => '</div>',
		'before_title' => '<center><h2>',
		'after_title' => '</h2></center>',
	) );

		register_sidebar( array(
		'name' => 'Barra 2',
		'id' => 'barra_widgets5',
		'before_widget' => '<div id="rw">',
		'after_widget' => '</div>',
		'before_title' => '<center><h2>',
		'after_title' => '</h2></center>',
	) );

		register_sidebar( array(
		'name' => 'Barra 3',
		'id' => 'barra_widgets6',
		'before_widget' => '<div id="rw">',
		'after_widget' => '</div>',
		'before_title' => '<center><h2>',
		'after_title' => '</h2></center>',
	) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );

// Função para a pesquisa do site
if (!is_admin()) {
function wpb_search_filter($query) {
   if ($query->is_search) {
      $query->set('post_type', 'post');
   }
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}
// Adicionando suporte para a logo no cabeçalho com largura ou altura variáveis
$args = array(
	'flex-width'    => true,
	'width'         => 68,
	'flex-height'    => true,
	'height'        => 74,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );
add_theme_support( 'custom-footer');