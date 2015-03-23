<?php
/**
 * @package WordPress
 * @subpackage Matthew
 * Template Name: Sidebar-Right
 */
?>

<?php get_header(); ?>
	<div id="layout-sidebar-right">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php get_template_part( 'content', 'page' ); ?>
	
				<?php endwhile; ?> <!--  end of the loop -->
	
			</main><!-- #main -->
		</div><!-- #primary -->
	
		<div id="secondary" class="sidebar-area">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>