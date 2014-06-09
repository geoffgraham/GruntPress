<?php
/**
 * SEARCH FORM
 * @package WordPress
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
  
  <input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'BlankPress'); ?>">
  <input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search', 'BlankPress'); ?>" role="button">

</form>