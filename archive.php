<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package light_fire
 */
?>
<?php get_header(); ?>

<?php $query = new WP_Query( 'post_type=post' ); ?>

	<div id="layout-full">
			<div class="page-banner">
				<h1 class="page_title"><?php the_archive_title(); ?></h1>
			</div>			
		<div id="primary" class="content-area" style="width: 70%; float: left;">
			<main id="main" class="site-main" role="main">
	

			
			<?php if ( $query->have_posts() ) : ?>
	
				<?php /* Start the Loop */ ?>
				<?php while ( $query->have_posts() ) :?>
					<?php $query->the_post(); ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
					
				<?php endwhile; ?>
	
				<?php //light_fire_paging_nav(); ?>
	
			<?php else : ?>
	
				<?php get_template_part( 'content', 'none' ); ?>
	
			<?php endif; ?>
	
			</main><!-- #main -->
		</div><!-- #primary -->
		
		<div id="secondary" style="width: 29%; float: right; display: block">
			<?php dynamic_sidebar( 'sidebar-2' ); ?> 
		</div>
	<?php wp_reset_postdata(); ?>
	</div>
<?php get_footer(); ?>
