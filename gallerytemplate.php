<?php
/*
Template Name: Gallery Page
*/ ?>

<?php get_header(); ?>
        <div class="container-fluid custom-title">
            <div class="container">
                <h1><?php wp_title(''); ?></h1>
            </div>
        </div>
        
        <div class="container"> <!--or container-fluid-->
            <div class="row text-center transition-from-header">
                <div class="col-md-12 cliente left-title"> 
                    <div class="container-fluid left-button">
                    <?php 
                    if(have_posts()):
                        while(have_posts()): the_post();?>
                        <div class="post-preview">
                            <p><?php the_content(); ?></p>
                        </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    </div>
                </div>
            </div>
        <div class="extra-padding-bottom-10px"></div>
        </div>
<?php get_footer(); ?>
