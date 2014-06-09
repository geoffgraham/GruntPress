<?php 
/**
 * SEARCH TEMPLATE
 * @package WordPress
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */

get_header(); ?>

  <section class="page" role="main">
      <div class="wrapper" role="row">
      
        <?php /* Display Search Results */ ?>
      	<h2><?php _e('Search Results for', 'BlankPress'); ?> "<?php echo get_search_query(); ?>"</h2>
  	
      	<?php if ( have_posts() ) : ?>
      	
      		<?php while ( have_posts() ) : the_post(); ?>
      			<?php get_template_part( 'content', get_post_format() ); ?>
      		<?php endwhile; ?>
      		
      		<?php else : ?>
      			<?php get_template_part( 'content', 'none' ); ?>
      		
      	<?php endif;?>
      	
      	<?php if ( function_exists('blankpress_pagination') ) { blankpress_pagination(); } else if ( is_paged() ) { ?>
      		<nav role="menu">
      			<?php next_posts_link( __( '&larr; Older posts', 'BlankPress' ) ); ?>
      			<?php previous_posts_link( __( 'Newer posts &rarr;', 'BlankPress' ) ); ?>
      		</nav>
      	<?php } ?>
      
    
    </div> <!-- wrapper -->
  </section> <!-- page -->
    
  <?php get_sidebar(); ?>
		
<?php get_footer(); ?>