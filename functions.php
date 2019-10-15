<?php 
//Theme support function
add_theme_support('html5', array('search-form'));
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

//Set default attachment display setting
function default_attachment_display_settings() {
	update_option( 'image_default_align', 'center' );
	update_option( 'image_default_link_type', 'none' );
	update_option( 'image_default_size', 'full' );
}
add_action( 'after_setup_theme', 'default_attachment_display_settings' );

//Register custom css and js directories
function my_register_styles() {
	wp_register_style('style1', get_template_directory_uri() . '/css/index.css');
	wp_register_style('style2', get_template_directory_uri() . '/css/twitchstream.css');
	wp_register_style('style3', get_template_directory_uri() . '/css/gallery.css');
	wp_register_script('script1', get_template_directory_uri() . '/js/index.js');
}
add_action('init', 'my_register_styles');

//Apply condition to use registered css
function my_enqueue_styles() {
    if (is_front_page()) {
		wp_enqueue_style('style1');
		wp_enqueue_script('script1');
    } elseif (is_page_template('twitchstreamtemplate.php')) {
		wp_enqueue_style('style2');
		wp_enqueue_script('script1');
	} elseif (is_page_template('gallerytemplate.php')) {
		wp_enqueue_style('style3');
		wp_enqueue_script('script1');
	} else {
		wp_enqueue_style('style1');
		wp_enqueue_script('script1');
    }
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_styles' );

//Enable custom menus
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
// function add_image_class($class){
//     $class .= ' img-fluid';
//     return $class;
// }
// add_filter('get_image_tag_class','add_image_class');

//Numberic pagination
function show_posts_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

function page_pagination($pages = '', $range = 2) {  
	$showitems = ($range * 2) + 1;  
	global $paged;
	if(empty($paged)) $paged = 1;
	if($pages == '') {
		global $wp_query; 
		$pages = $wp_query->max_num_pages;
	
		if(!$pages)
			$pages = 1;		 
	}   
	
	if(1 != $pages) {
	    echo '<nav aria-label="Page navigation" role="navigation">';
        echo '<span class="sr-only">Page navigation</span>';
        echo '<ul class="pagination justify-content-center ft-wpbs">';
		
        echo '<li class="page-item disabled hidden-md-down d-none d-lg-block"><span class="page-link">Page '.$paged.' of '.$pages.'</span></li>';
	
	 	if($paged > 2 && $paged > $range+1 && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link(1).'" aria-label="First Page">&laquo;<span class="hidden-sm-down d-none d-md-block"> First</span></a></li>';
	
	 	if($paged > 1 && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged - 1).'" aria-label="Previous Page">&lsaquo;<span class="hidden-sm-down d-none d-md-block"> Previous</span></a></li>';
	
		for ($i=1; $i <= $pages; $i++) {
		    if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				echo ($paged == $i)? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>'.$i.'</span></li>' : '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($i).'"><span class="sr-only">Page </span>'.$i.'</a></li>';
		}
		
		if ($paged < $pages && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($paged + 1).'" aria-label="Next Page"><span class="hidden-sm-down d-none d-md-block">Next </span>&rsaquo;</a></li>';  
	
	 	if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) 
			echo '<li class="page-item"><a class="page-link" href="'.get_pagenum_link($pages).'" aria-label="Last Page"><span class="hidden-sm-down d-none d-md-block">Last </span>&raquo;</a></li>';
	
	 	echo '</ul>';
        echo '</nav>';
        //echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';	 	
	}
}

//Add sidebar functions
function widget_setup() {
	register_sidebar(
		array(
			'name'			=> 'Sidebar',
			'id' 			=> 'sidebar-1',
			'class'			=> 'custom',
			'description'	=> 'standard sidebar',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action('widgets_init','widget_setup')
?>