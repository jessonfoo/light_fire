<?php
/**
 * @package light_fire
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php if (has_post_thumbnail()) : ?>
		<div class="row">
			<?php 
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			<div class="col_14 left">
				<a href="<?php echo $url ?>" rel="fancybox-thumb" class="fancybox-thumb img_hover white_border">
					<?php the_post_thumbnail( 'medium' ); ?>
				</a>
			</div>
			<div class="col_34 right">
				<div class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
					<div class="entry-meta">
						<?php light_fire_posted_on(); ?>
					</div><!-- .entry-meta -->
				</div><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'light_fire' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			
				<div class="entry-footer">
					<?php 
						//light_fire_entry_footer(); 
					?>
				</div><!-- .entry-footer -->
			
			</div>
		</div>
	<?php else: ?>
		<div class="row">
			<div class="col_full">
				<div class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				
					<div class="entry-meta">
						<?php light_fire_posted_on(); ?>
					</div><!-- .entry-meta -->
				</div><!-- .entry-header -->
			
				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'light_fire' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			
				<div class="entry-footer">
					<?php 
						//light_fire_entry_footer(); 
					?>
				</div><!-- .entry-footer -->
			
			</div>
		</div>
	<?php endif; ?>
</article><!-- #post-## -->
