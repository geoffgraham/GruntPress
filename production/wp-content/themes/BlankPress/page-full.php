<?php
/**
 * Template Name: Full Width Page
 * @package WordPress
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */
 
get_header(); ?>

	  <section class="page" role="document">
      <div class="wrapper" role="row">
      
      <?php /* Start loop */ ?>
    	<?php while (have_posts()) : the_post(); ?>
    		<article <?php post_class() ?> role="article">
    			
    			<header>
    				<h1><?php the_title(); ?></h1>
    			</header>
    			
          <?php the_content(); ?>
    			
    		</article>
    	<?php endwhile; // End the loop ?>
      
    
    </div> <!-- page -->
  </section> <!-- wrapper -->
		
<?php get_footer(); ?>