<?php 

if(post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php 
        if(have_comments()):
            //have comments
    ?>

    <h2 class="comment-title">
        <?php 
            printf(
                esc_html(_nx('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title')),
                number_format_i18n(get_comments_number()),  
                get_the_title()
            );
        ?>
    </h2>

    <ol class="comment-list">
        <?php
        $args = array(
            'walker'            =>  null,
            'max_depth'         =>  '',
            'style'             =>  'ol',
            'call_back'         =>  null,
            'end-callback'      =>  null,
            'type'              =>  'all',
            'reply_text'        =>  'Reply',
            'page'              =>  '',
            'per_page'          =>  '',
            'avatar'            =>  32, //avatar size
            'reverse_top_level' =>  true, //top == new, bottom == old
            'reverse_children'  =>  true, //same like reverse top level
            'format'            =>  'html5',
            'short_ping'        =>  false,
            'echo'              =>  true,
        );
        wp_list_comments($args); 
        ?>
    </ol>
        <?php 
            if(!comments_open() && get_comments_number()):
        ?>

        <p class="no-comments"><?php esc_html_e('Comments section are closed.', 'blog'); ?></p>

        <?php endif; ?>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>