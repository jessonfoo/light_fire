<?php
/**
 * The template for displaying search results pages.
 *
 * @package light_fire
 */
?>

<?php get_header(); ?>
	<div id="layout-sidebar-left">
		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
			<?php if ( have_posts() ) : ?>
	
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'light_fire' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
	
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php
					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'content', 'search' );
					?>
	
				<?php endwhile; ?>
	
				<?php light_fire_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
	
			</main><!-- #main -->
		</section><!-- #primary -->
		
		<div id="secondary" class="sidebar-area">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
