<?php
/*
Template Name: Osu videos
*/ ?>

<?php get_header(); ?>
        <div class="container-fluid custom-title">
            <div class="container">
                <h1><?php wp_title(''); ?></h1>
            </div>
        </div>
        
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'osu',
                // 'post_per_page' => 1,
                'paged' => $paged,
            );
            $arr_posts = new WP_Query($args);
        ?>

        <div class="container"> <!--or container-fluid-->
            <div class="row text-center transition-from-header">
                <div class="col-md-8 cliente left-title"> 
                    <div class="container-fluid left-button">
                        <?php 
                        if($arr_posts->have_posts()):
                            while($arr_posts->have_posts()): $arr_posts->the_post();?>
                            <div class="post-preview">
                                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                <h6><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <a href="<?php echo home_url('/', 'https'); ?>author/<?php the_author(); ?>"><?php the_author(); ?></a> ⋅ <a href="<?php comments_link(); ?>"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></a></h6>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>

                    <div class="container-fluid right-button ">
                        <?php 
                        $pages = '';
                        $range = 2;
                        $showitems = ($range * 2) + 1;  
                        global $paged;
                        if(empty($paged)) $paged = 1;
                        if($pages == '') {
                            $pages = $arr_posts->max_num_pages;
                        
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
                        ?> 
                    </div>


                </div>
                <?php get_sidebar(); ?>
        </div>
        <div class="extra-padding-bottom-10px"></div>
        </div>
<?php get_footer(); ?>
