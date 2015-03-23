<?php
/**
 * The template for displaying all single posts galleries.
 *
 * @package light_fire
 */
?>

<?php get_header(); ?>
	<div id="layout-full">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

		<div class="page-banner">
			<h1 class="page_title">Gallery</h1>
		</div>
		
			<?php wp_nav_menu( array( 'theme_location' => 'gallery' ) ); ?>
	
			<?php while ( have_posts() ) : the_post(); ?>
	
			<article style="float: right; width: 80%;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php// the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			
					<div class="entry-meta">
						<?php //light_fire_posted_on(); ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'light_fire' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			
				<footer class="entry-footer">
					<?php light_fire_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-## -->
	
	
			<?php endwhile; // end of the loop. ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php get_footer(); ?>