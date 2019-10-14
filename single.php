<?php get_header(); ?>
        <div class="container-fluid custom-title">
            <div class="container">
                <h1><?php wp_title(''); ?></h1>
            </div>
        </div>
        
        <div class="container"> <!--or container-fluid-->
            <div class="row text-center transition-from-header">
                <div class="col-md-8 cliente left-title"> 
                    <div class="container-fluid post-preview left-button">
                        <?php 
                        if(have_posts()):
                            while(have_posts()): the_post();?>
                                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                <h6><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> by <a href="<?php the_author_link(); ?>"><?php the_author(); ?></a> ⋅ <a href="<?php comments_link(); ?>"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></a></h6>
                                <p><?php the_content(); ?></p>
                                <?php 
                                if(comments_open()):
                                    comments_template();
                                endif;
                                ?>
                        <?php
                            endwhile;
                        endif;
                        ?>    
                    </div>

                    <div class="container-fluid right-button ">
                        <?php 
                        if (function_exists("page_pagination")){
                            page_pagination();
                        }
                        ?> 
                    </div>


                </div>
                <?php get_sidebar(); ?>
        </div>
        <div class="extra-padding-bottom-10px"></div>
        </div>
<?php get_footer(); ?>