<?php get_header(); ?>

	<div class="404" role="document">
	  <div class="wrapper" role="row">
	
  		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  			
				<h2><?php _e('File Not Found', 'BlankPress'); ?></h2>
        
				<p class="bottom"><?php _e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'BlankPress'); ?></p>
				
				<p><?php _e('Please try the following:', 'BlankPress'); ?></p>
				
				<ul role="list">
					<li role="listitem"><?php _e('Check your spelling', 'BlankPress'); ?></li>
					<li role="listitem"><?php printf(__('Return to the <a href="%s">home page</a>', 'BlankPress'), home_url()); ?></li>
					<li role="listitem"><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'BlankPress'); ?></li>
				</ul>
  			
  		</article>
  		
	  </div> <!-- wrapper -->

	</div> <!-- 404 -->
	
  <?php get_sidebar(); ?>
		
<?php get_footer(); ?>