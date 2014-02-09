<?php
/*
 Template Name: Site Map
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php	locate_template( array( 'inc/sitemap.php'), true, true ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer();

