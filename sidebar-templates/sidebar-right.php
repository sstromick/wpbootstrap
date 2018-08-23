<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package wpbootstrap
 */
if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">

<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->