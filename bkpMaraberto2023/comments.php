<?php
if ( post_password_required() ):
  return;
endif;
?>

<div id="comments" class="comments-area">
  <div class="is-narrow">
    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) : ?>
    <div class="content">
      <div class="header">
        <h2 class="title is-3">Comentários</h2>
        <p class="subtitle">
      <?php printf( // WPCS: XSS OK.
        esc_html( _nx( 
          'Um comentário em &ldquo;%2$s&rdquo;', 
          '%1$s comentários em &ldquo;%2$s&rdquo;', 
          get_comments_number(), 
          'comments title', 
          'bulmapress' 
          ) ),
        number_format_i18n( get_comments_number() ),
        '<span>' . get_the_title() . '</span>'
        ); ?>
      </p><!-- .comments-title -->
    </div>

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
      <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
        <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bulmapress' ); ?></h2>
        <div class="nav-links level">
          <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bulmapress' ) ); ?></div>
          <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bulmapress' ) ); ?></div>
        </div><!-- .nav-links -->
      </nav><!-- #comment-nav-above -->
    <?php endif; // Check for comment navigation. ?>

    <ul class="comment-list ">
      <?php
      wp_list_comments( array(
        'style'			=> 'ul',
        'short_ping'	=> true,
        'avatar_size' => 50,
        'reverse_top_level' => true
        ) );
        ?>
      </ul><!-- .comment-list -->

      <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
        <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
          <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bulmapress' ); ?></h2>
          <div class="nav-links level">
            <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bulmapress' ) ); ?></div>
            <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bulmapress' ) ); ?></div>
          </div><!-- .nav-links -->
        </nav><!-- #comment-nav-below -->
        <?php
    endif; // Check for comment navigation.
    ?>
  </div>
  <?php
    endif; // Check for have_comments().
    ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
    <div class="content">
      <p class="no-comments"><?php esc_html_e( 'Não é possível comentar esta matéria.', 'bulmapress' ); ?></p>
    </div>
    <?php
    endif;
    ?>
    <?php $comment_args = array( 
      'title_reply' => '<h3 class="title is-3">Deixe o seu comentário</h3>',
      'comment_field' => '<div class="elementor-textarea'. (is_user_logged_in() ? ' is-full' : ' is-half') .'"><label class="label" for="comment">' . __( 'Mensagem' ) . '</label><p class="control"><textarea class="textarea is-medium" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' . '</p></div>',
      'fields' => apply_filters( 'comment_form_default_fields', array(
        'author' => '<div class=""><label class="label" for="author">Seu nome'  . ( $req ? '<span>*</span>' : '' ) .'</label> ' . '<p class="control">' . '<input class="input is-medium" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
        'email'  => '<label class="label" for="email">' . __( 'Seu E-mail' ) . ( $req ? '<span>*</span>' : '' ) . '</label> ' . '<p class="control">' . '<input class="input  is-medium" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',
        'url'    => '' ) ),
      'comment_notes_after' => '',
      'submit_button' => '<div class="elementor-button-wrapper"><input name="submit" type="submit" class="elementor-button elementor-button elementor-size-lg" value="Comentar" /></div>'
      );
      ?>

      
        <?php comment_form($comment_args); ?>
        </div>
      </div>
    </div>

    </div><!-- .container -->
  </div><!-- #comments -->