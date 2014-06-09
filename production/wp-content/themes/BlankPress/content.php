<?php
/**
 * The template for displaying post content
 * Used in single and index/archive/search.
 *
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header role="heading">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php blankpress_entry_meta(); ?>
	</header>

  <?php the_content(__('Continue reading...', 'BlankPress')); ?>
	
</article>