<?php
/**
 * @package light_fire
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px;">
	
	<?php if (has_post_thumbnail()) : ?>
		<div class="row">
			<div class="col_14 left" style="width: 28%;">
				<a href="<?php the_permalink(); ?> " class="img_hover white_border">
					<?php the_post_thumbnail( 'medium' ); ?>
				</a>
			</div>
			<div class="col_34 right" style="width: 70%;">
				<div class="entry-header">
					<a href="<?php the_permalink(); ?> ">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</a>
				
					<div class="entry-meta">
						<?php light_fire_posted_on(); ?>
					</div><!-- .entry-meta -->
				</div><!-- .entry-header -->
			
				<div class="entry-content">
					<?php echo apply_filters('the_content', substr(get_the_content(), 0, 200) ); ?>
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
					<?php echo apply_filters('the_content', substr(get_the_content(), 0, 200) ); ?>
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