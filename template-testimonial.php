<?php
/**
 * @package WordPress
 * @subpackage Matthew
 * Template Name: Testimonial Template
 */
?>
<script src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/lib/masonry/masonry.js"></script>
<?php get_header(); ?>
	<div id="layout-full">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
			
			<div class="page-banner">
				<h1 class="page_title"><?php the_title(); ?></h1>
			</div>
			
			<div id="container" class="js-masonry" data-masonry-options='{ "columnWidth": 250, "itemSelector": ".test_wrap" }'>
				<?php 
					$args = array( 'post_type' => 'testimonials' );
					$loop = new WP_Query( $args );
				?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<?php 
					$content = get_the_content();
					if(strlen($content) >= 1500 ) $size = 'big';
					if(strlen($content) >= 1000 && strlen($content) <= 1500 ) $size = 'med';
					if(strlen($content) >= 500  && strlen($content) <= 1000) $size = 'small';
					?>
					<article id="post-<?php the_ID(); ?>" class="test_wrap <?php echo $size; ?>">	
						<p class="test"><?php echo $content ?></p>
						<p class="test_author"><em><?php the_title(); ?></em></p>
					</article><!-- #post-## -->
	
				<?php endwhile; ?> <!--  end of the loop -->
			
			</div></br>


<?php get_footer(); ?>