<?php 
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

	<h2 id="comments"><?php _e('Comments','irex-lite'); ?></h2>

	<ul class="commentlist">

  	<?php wp_list_comments(array( 'callback' => 'irex_lite_comment' )); ?>

  	</ul>

	<div class="navigation">

		<div class="alignleft"><?php previous_comments_link() ?></div>

		<div class="alignright"><?php next_comments_link() ?></div>

		<div class="fix"></div>

	</div>

<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>

		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>

<div id="comments_wrap">

		<!-- If comments are closed. -->

		<p class="nocomments"><?php _e('Comments are closed.','irex-lite'); ?></p>

</div> <!-- end #comments_wrap -->

	<?php endif; ?>

<?php endif; ?>

<div id="responds">

<?php if ('open' == $post->comment_status) : ?>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>

<p><?php _e('You must be','irex-lite'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php _e('logged in','irex-lite'); ?></a> <?php _e('to post a comment.','irex-lite'); ?></p>

<?php else : ?>

<?php

$aria_req ='';

$message ='<div class="field clearfix">

	<label for="comment">'. __('Message','irex-lite') .'</label>

	<div id="input"><textarea class="textarea" name="comment" id="comment" tabindex="4"></textarea></div>

</div>';

$comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(

           'author' => '' .

                       '<div class="field clearfix"><label for="author">' . __('Name','irex-lite') . '</label> ' .

                       ( $req ? '<span class="required">*</span>' : '' ) .

                       '<div id="input"><input id="author" name="author" class="text" type="text"  value="" tabindex="1" size="22"' . $aria_req . ' /></div>' .

                       '</div><!-- #form-section-author .form-section -->',

           'email'  => '' .

                       '<div class="field clearfix"><label for="email">' . __( 'Email','irex-lite') . '</label> ' .

                       ( $req ? '<span class="required">*</span>' : '' ) .

                       '<div id="input"><input id="email" name="email" class="text" type="text"  value="" size="22"  tabindex="2"' . $aria_req . ' /></div>' .

               '</div><!-- #form-section-email .form-section -->',

		  'url' => '' .

                       '<div class="field clearfix"><label for="url">' . __( 'Website','irex-lite' ) . '</label> ' .

                       ( $req ? '<span class="required">*</span>' : '' ) .

                       '<div id="input"><input class="text" type="text" name="url" id="url" value="" size="22" tabindex="3"' . $aria_req . ' /></div>' .

                       '</div><!-- #form-section-author .form-section -->',

            ) ),

           'comment_field' => '' .

                       $message .

                       '<!-- #form-section-comment .form-section -->',

           'comment_notes_after' => '',

       );

       comment_form($comment_args);

?>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

<?php //comment_form(); ?>

</div> <!-- end #respond -->