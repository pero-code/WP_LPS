<?php

function lpstema_setup_theme(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    remove_theme_support( 'widgets-block-editor' );


    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'lpstema' ),
    ) );

}
add_action( 'after_setup_theme', 'lpstema_setup_theme' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function lpstema_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'lpstema_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function lpstema_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'lpstema_excerpt_more' );


/**
 * Add a sidebar.
 */
function lpstema_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => 'Footer-1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-md-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer-2',
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-md-4">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer-3',
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-md-4">',
        'after_widget'  => '</div>',
    ) );

}
add_action( 'widgets_init', 'lpstema_theme_slug_widgets_init' );

