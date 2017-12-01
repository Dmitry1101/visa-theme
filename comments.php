<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package visa_reservation
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<div class="kd-comm">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<?php
						// You can start editing here -- including this comment!
						if ( have_comments() ) : ?>
							<h2 class="comments-title">
								<?php
								$comment_count = get_comments_number();
								if ( 1 === $comment_count ) {
									printf(
										/* translators: 1: title. */
										esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'visa_reservation' ),
										'<span>' . get_the_title() . '</span>'
									);
								} else {
									printf( // WPCS: XSS OK.
										/* translators: 1: comment count number, 2: title. */
										esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'visa_reservation' ) ),
										number_format_i18n( $comment_count ),
										'<span>' . get_the_title() . '</span>'
									);
								}
								?>
							</h2><!-- .comments-title -->

							<?php the_comments_navigation(); ?>

							<ol class="comment-list">
								<?php
									wp_list_comments( array(
										'style'      => 'ol',
										'short_ping' => true,
									) );
								?>
							</ol><!-- .comment-list -->

							<?php the_comments_navigation();

							// If comments are closed and there are comments, let's leave a little note, shall we?
							if ( ! comments_open() ) : ?>
								<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'visa_reservation' ); ?></p>
							<?php
							endif;

						endif; // Check for have_comments(). ?>


				</div>
			</div>
		</div>	
	</div>

		


	<div class="kd-comm__form s">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				
					<?php
					$args = array(
					  'id_form'           => 'commentform',
					  'class_form'      => 'comment-form clearfix',
					  'id_submit'         => 'submit',
					  'class_submit'      => 'submit butt',
					  'name_submit'       => 'submit',
					  'title_reply'       => __( 'Submit a Comment' ),
					  'title_reply_to'    => __( 'Leave a Reply to %s' ),
					  'cancel_reply_link' => __( 'Cancel Reply' ),
					  'label_submit'      => __( 'SUBMIT COMMENT' ),
					  'format'            => 'xhtml',

					  'comment_field' =>  '<p class="comment-form-comment"><textarea placeholder="Comment" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
					    '</textarea></p>',

					  'must_log_in' => '<p class="must-log-in">' .
					    sprintf(
					      __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
					      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
					    ) . '</p>',

					  'logged_in_as' => '<p class="logged-in-as">' .
					    sprintf(
					    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
					      admin_url( 'profile.php' ),
					      $user_identity,
					      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
					    ) . '</p>',

					  'comment_notes_before' => '<p class="comment-notes">' .
					    __( 'Your email address will not be published. Required fields are marked *' ) . ( $req ? $required_text : '' ) .
					    '</p>',

					  // 'comment_notes_after' => '<p class="form-allowed-tags">' .
					  //   sprintf(
					  //     __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s' ),
					  //     ' <code>' . allowed_tags() . '</code>'
					  //   ) . '</p>',

					  'fields' => array(

						  'author' =>
						    '<p class="comment-form-author"> ' .
						    // ( $req ? '<span class="required">*</span>' : '' ) .
						    '<input placeholder="Name*" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
						    '" size="30"' . $aria_req . ' /></p>',

						  'email' =>
						    '<p class="comment-form-email"> ' .
						    // ( $req ? '<span class="required">*</span>' : '' ) .
						    '<input placeholder="Email*" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
						    '" size="30"' . $aria_req . ' /></p>',

						  'url' =>
						    '<p class="comment-form-url"> ' .
						    '<input placeholder="Website" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
						    '" size="30" /></p>',

						   'notify' =>
						    '<p class="comment-form-notify"><label for="notify"> <input id="notify" type="checkbox" name="notify"/> <span></span> Notify me of follow-up comments by email. </label>' .	
						    '</p>',
						),
					);

					comment_form( $args ); 

					?>
				
				</div>
			</div>
		</div>
	</div><!-- .kd-comm -->
		

</div><!-- #comments -->
