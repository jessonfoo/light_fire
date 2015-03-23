<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package light_fire
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="page-banner">
			<h1 class="page_title">Gallery</h1>
		</div>
		
		
		<?php wp_nav_menu( array( 'theme_location' => 'gallery' ) ); ?>
		
		<div id="post_container">
			
			<?php
			    $args = array(
			      'post_type' => 'gallery'
			      
			    );
			    $products = new WP_Query( $args );
			    if( $products->have_posts() ) :
			      while( $products->have_posts() ) :
			        $products->the_post(); ?>
			        <article class="gallery_post">
			        	<?php if ( has_post_thumbnail() ) : ?>
			        		<h1 class="tcenter">
			        			<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
			        		</h1>
			        		<a href="<?php the_permalink(); ?>" class="white_border img_hover">	
			        			<?php the_post_thumbnail('smallish'); ?>
			        		</a>
			        	<?php else: ?>
			          		<h1 class="tcenter"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
			        		<a href="<?php the_permalink(); ?>" class="white_border img_hover">	
			        			<img width="523" height="468" src="http://nvgwebhost.com/testserver/wedding/wp-content/uploads/2014/12/gallery_left1.jpg" class="attachment-smallish wp-post-image" alt="gallery_left">
			        		</a>
			          	<?php endif ?>
			        </article>
			        <?php endwhile ?>
			    <?php else: ?>
			      <p>Oh ohm no galleries!</p>
			    <?php endif ?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>