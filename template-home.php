<?php
/**
 * @package WordPress
 * @subpackage Matthew
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>
	<div id="layout-full">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
	
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
				
				<div id="home-picture-wrapper" class="row">
					<div class="col_23 hide_mobile"> 
						<div class="">
							<img style="padding-right: 3px; height: 468px;" src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/12/gallery_left1.jpg" alt="" />
						</div>
					</div>
					<div class="col_13">
						<div class="hide_mobile">
							<img style="padding-bottom: 7px;" class="" src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/12/gallery_top.jpg" alt="" />
						</div>
						<div class="img_hover">
							<a href="?gallery=featured-gallery" style="vertical-align: bottom; margin-top: 2px;">
								<img class="hide_mobile" src="<?php echo get_site_url(); ?>/wp-content/uploads/2015/01/gallery_bottom.jpg" alt="" />
							</a>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				
				<div class="small_width row" style="margin-top: 30px;">
					<div class="col_12 mobile_cell">
						<a href="galleries/featured-gallery/">					
							<img style="border: 7px solid white;" width="440" src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/images/mobile/gallery_mb.jpg" alt="" />
						</a>
					</div>
					<div class="col_12">
						<a href="services-2">
							<img style="border: 7px solid white;" width="440" class="white_border img_hover" src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/12/services.jpg" alt="" />						
						</a>
					</div>
					<div class="col_12" style="text-align: right;">
						<a href="testimonials">
							<img style="border: 7px solid white;" width="440" class="white_border img_hover" src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/12/testimonials.jpg" alt="" />											
						</a>
					</div>
				</div>	
				
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php get_footer(); ?>