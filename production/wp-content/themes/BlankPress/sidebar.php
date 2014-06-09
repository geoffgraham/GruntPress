<?php
/**
 * DEFAULT SIDEBAR
 * Grabs widgets added to the Sidebar widget area 
 * as defined in /lib/functions/widget-areas.php
 * Add widgets under Appearance > Widgets
 *
 * @package WordPress
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */
?>

<aside role="complementary">
	<?php dynamic_sidebar("Sidebar"); ?>
</aside>