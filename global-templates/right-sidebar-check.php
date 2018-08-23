<?php
/**
 * Right sidebar check.
 *
 * @package wpbootstrap
 */
?>

</div><!-- #closing the primary container from /global-templates/left-sidebar-check.php -->

<?php $sidebar_pos = get_theme_mod( 'wpbootstrap_sidebar_position' ); ?>

<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

  <?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

<?php endif; ?>