<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package wpbootstrap
 */
get_header();
$container   = get_theme_mod( 'wpbootstrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

				<main class="site-main" id="main">

					<section class="error-404 not-found">

						<header class="page-header">

							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
							'wpbootstrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
							'wpbootstrap' ); ?></p>

							<?php get_search_form(); ?>

							<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

							<?php if ( wpbootstrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>

								<div class="widget widget_categories">

									<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'wpbootstrap' ); ?></h2>

									<ul>
										<?php
										wp_list_categories( array(
											'orderby'    => 'count',
											'order'      => 'DESC',
											'show_count' => 1,
											'title_li'   => '',
											'number'     => 10,
										) );
										?>
									</ul>

								</div><!-- .widget -->

							<?php endif; ?>

							<?php
							/* translators: %1$s: smiley */
							$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'wpbootstrap' ), convert_smilies( ':)' ) ) . '</p>';
							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
							the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>