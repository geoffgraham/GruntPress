<?php get_header(); ?>

	<div class="archive" role="main">
	  <div class="wrapper" role="row">
  	
  	<?php if ( have_posts() ) : ?>
  	
  		<?php /* Start the Loop */ ?>
  		<?php while ( have_posts() ) : the_post(); ?>
  			<?php get_template_part( 'content', get_post_format() ); ?>
  		<?php endwhile; ?>
  		
  		<?php else : ?>
  			<?php get_template_part( 'content', 'none' ); ?>
  		
  	<?php endif; // end have_posts() check ?>
  	
  	<?php /* Display navigation to next/previous pages when applicable */ ?>
  	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
  		<nav role="menu">
  			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'BlankPress' ) ); ?></div>
  			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'BlankPress' ) ); ?></div>
  		</nav>
  	<?php } ?>
  	
  	</div> <!-- wrapper -->
	</div> <!-- archive -->
	
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>