<?php
function load_my_scripts() {
    wp_enqueue_style( 'bootstrap_css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css');
    wp_enqueue_style( 'fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
  wp_enqueue_script( 'boot1','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js', array('jquery'));
  wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js', array('jquery'));
  wp_enqueue_script( 'boot3','https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'));
 
  wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );

}
add_action( 'wp_enqueue_scripts', 'load_my_scripts');
?>

<?php
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>
<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'top-menu' ),
) );
?>

<?php
function theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on the search results page.', 'textdomain' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );
?>
<?php
add_theme_support('post-thumbnails');
?>