<?php
/**
 * DEFAULT PAGE
 * @package WordPress
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */

get_header(); ?>

	<section role="main">
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
  </section>
	
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>