<?php
/**
 * @package WordPress
 * @subpackage Matthew
 * Template Name: Full Width
 */
?>

<?php get_header(); ?>
	<div id="layout-full">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			
			<div class="page-banner">
				<h1 class="page_title"><?php the_title(); ?></h1>
			</div>
	
				<?php while ( have_posts() ) : the_post(); ?>
	
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'light_fire' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					
					</article><!-- #post-## -->
	
				<?php endwhile; ?> <!--  end of the loop -->
				
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php get_footer(); ?>