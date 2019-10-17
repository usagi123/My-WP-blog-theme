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
                esc_html(_nx('1 thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title')),
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
            'avatar'            =>  50, //avatar size
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

    <?php 
        $args = array(
            'fields' => apply_filters(
                'comment_form_default_fields', array(
                    'author' => '<div class="form-group comment-form-author">' .
                                    '<label for="author">' . __( 'Name:' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                                    '<input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' />'.
                                '</div>',
                    'email'  => '<div class="form-group comment-form-email">' . 
                                    '<label for="email">' . __( 'Email:' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                                    '<input id="email" name="email" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_email'] ) . '"' . $aria_req . ' />'.
                                '</div>',
                    'url'   =>  '<div class="form-group comment-form-url">' . 
                                    '<label for="url">' . __( 'Website:' ) . '</label> ' .
                                    '<input id="url" name="url" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author_url'] ) . '"' . ' />'.
                                '</div>',
                    'cookies' =>    '<div class="form-check comment-form-cookies-consent">
                                        <input id="wp-comment-cookies-consent" class="form-check-input" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' . 
                                        '<label class="form-check-label" for="wp-comment-cookies-consent">' . 
                                            __( 'Save my name, email, and website in this browser for the next time I comment.' ) . 
                                        '</label>
                                    </div>',
                )
            ),
            'comment_field' =>  '<div class="form-group comment-form-comment">' .
                                '<label for="comment">' 
                                . __( 'Comment:' ) . 
                                '</label>' .
                                '<textarea class="form-control" rows="5" id="comment" name="comment" aria-required="true"></textarea>' .
                                '</div>',
            'comment_notes_after' => '',
            'title_reply' => 'Leave a Reply',
            'class_submit' => 'btn btn-outline-info continue-reading float-left submit',
        );
    ?>
    <?php comment_form($args); ?>
</div>