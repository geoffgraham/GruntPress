<?php function blankpress_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	
	<li <?php comment_class(); ?>>
		<article class="comment-<?php comment_ID(); ?>">
			
			<header class="comment-author">
				<?php echo get_avatar($comment,$size='48'); ?>
				
				<div class="author-meta">
					<?php printf(__('<cite>%s</cite>', 'BlankPress'), get_comment_author_link()) ?>
					
					<time datetime="<?php echo comment_date('c') ?>"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s', 'BlankPress'), get_comment_date(),  get_comment_time()) ?></a></time>
					
					<?php edit_comment_link(__('(Edit)', 'BlankPress'), '', '') ?>
					
				</div> <!-- author-meta -->
				
			</header> <!-- comment-author -->
			
			<?php if ($comment->comment_approved == '0') : ?>
        <p class="bottom"><?php _e('Your comment is awaiting moderation.', 'BlankPress') ?></p>
			<?php endif; ?>
			
			<section class="comment">
				<?php comment_text() ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</section> <!-- comment -->

		</article> <!-- comment-[ID] -->
<?php } ?>

<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!', 'BlankPress'));

	if ( post_password_required() ) { ?>
	<section id="comments">
    <p><?php _e('This post is password protected. Enter the password to view comments.', 'BlankPress'); ?></p>
	</section> <!-- comments -->
	<?php
		return;
	}
?>

<?php // You can start editing here. Customize the respond form below ?>
<?php if ( have_comments() ) : ?>
	<section class="comments">
		
		<h3><?php comments_number(__('No Responses to', 'BlankPress'), __('One Response to', 'BlankPress'), __('% Responses to', 'BlankPress') ); ?> &#8220;<?php the_title(); ?>&#8221;</h3>
		
		<ol class="commentlist">
		  <?php wp_list_comments('type=comment&callback=BlankPress_comments'); ?>
		</ol> <!-- commentlist -->
		
		<footer>
			<nav role="pagination">
			  <?php previous_comments_link( __( '&larr; Older comments', 'BlankPress' ) ); ?>
			  <?php next_comments_link( __( 'Newer comments &rarr;', 'BlankPress' ) ); ?>
			</nav>
		</footer>
		
	</section> <!-- comments -->
<?php endif; ?>

<?php if ( comments_open() ) : ?>
<section class="respond">
	
	<h3><?php comment_form_title( __('Leave a Reply', 'BlankPress'), __('Leave a Reply to %s', 'BlankPress') ); ?></h3>
	<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>
	
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	
	<p><?php printf( __('You must be <a href="%s">logged in</a> to post a comment.', 'BlankPress'), wp_login_url( get_permalink() ) ); ?></p>
	
	<?php else : ?>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( is_user_logged_in() ) : ?>
		<p><?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'BlankPress'), get_option('siteurl'), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'BlankPress'); ?>"><?php _e('Log out &raquo;', 'BlankPress'); ?></a></p>
		<?php else : ?>
		<p>
			<label for="author"><?php _e('Name', 'BlankPress'); if ($req) _e(' (required)', 'BlankPress'); ?></label>
			<input type="text" class="five" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
		</p>
		<p>
			<label for="email"><?php _e('Email (will not be published)', 'BlankPress'); if ($req) _e(' (required)', 'BlankPress'); ?></label>
			<input type="text" class="five" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
		</p>
		<p>
			<label for="url"><?php _e('Website', 'BlankPress'); ?></label>
			<input type="text" class="five" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3">
		</p>
		<?php endif; ?>
		<p>
			<label for="comment"><?php _e('Comment', 'BlankPress'); ?></label>
			<textarea name="comment" id="comment" tabindex="4"></textarea>
		</p>
		<p id="allowed_tags" class="small"><strong>XHTML:</strong> <?php _e('You can use these tags:','BlankPress'); ?> <code><?php echo allowed_tags(); ?></code></p>
		<p><input name="submit" class="button" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment', 'BlankPress'); ?>"></p>
		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	
	<?php endif; // If registration required and not logged in ?>
</section> <!-- respond -->
<?php endif; // if you delete this the sky will fall on your head ?>