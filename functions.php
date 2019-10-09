<?php 

function index_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/index.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'index_script_enqueue');

function blog_theme_setup() {
    add_theme_support('menus');

    register_nav_menu('primary', 'Primary header navigation');
}
add_action('after_setup_theme', 'blog_theme_setup');

// Add active state for nav menu
function special_nav_class ($classes, $item) {
    if (in_array('menu-item', $classes)) {
        $classes[] = 'nav-item';
    }
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'nav-item active';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

// Add custon class to a in nav menu
function my_nav_menu_link_attributes ($atts, $item, $args) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'my_nav_menu_link_attributes', 10, 3);

//Add img-fluid class into post images
function add_image_class($class){
    $class .= ' img-fluid';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');

function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

//Numberic pagination

?>