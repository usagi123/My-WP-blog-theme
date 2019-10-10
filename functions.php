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
?>