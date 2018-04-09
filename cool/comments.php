<h2>Comments</h2>
<hr>
<?php $args = array(
	'walker'            => null,
	'max_depth'         => '',
	'style'             => 'div',
	'callback'          => null,
	'end-callback'      => null,
	'type'              => 'all',
	'reply_text'        => 'Reply',
	'page'              => '',
	'per_page'          => '',
	'avatar_size'       => 80,
	'reverse_top_level' => null,
	'reverse_children'  => '',
	'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
	'short_ping'        => false,   // @since 3.6
    'echo'              => true     // boolean, default is true
); ?>

<?php wp_list_comments($args, $comments); ?>

<?php $comments_args = array(
        'class_form' => 'form-group',
        // change the title of send button
        'label_submit'=>'Send',
        // change the title of the reply section
        'title_reply'=>'Write a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment col-form-label"><label class="col-form-label" for="comment" >' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true" class="form-control"></textarea></p>',
        'class_submit' => 'btn btn-primary form-control'
);

comment_form($comments_args);
