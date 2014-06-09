<?php
/**
 * DEFAULT POST TEMPLATE
 * @package WordPress
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */

get_header(); ?>
	
	  <?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> role="article">
		  <div class="wrapper" role="row">
			
  			<header role="heading">
  				<h1><?php the_title(); ?></h1>
  				<?php blankpress_entry_meta(); ?>
  			</header>
  			
  			<section class="content" role="main">
  				<?php the_content(); ?>
  			</section> <!-- content -->
  			
  			<?php comments_template(); ?>
  			
		  </div> <!-- wrapper -->
		</article>
    <?php endwhile;?>
		
<?php get_footer(); ?>