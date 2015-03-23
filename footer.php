<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package light_fire
 */
?>
	</div><!-- #content -->
	<footer id="footer" class="site-footer" role="contentinfo">
		
		<?php if(is_page(42)) : ?>
			<?php require_once get_template_directory() . '/inc/badges.php'; ?>
		<?php endif; ?>
		
		<?php if(is_page(42)) : ?>
			<div style="width: 100%; margin: 15px auto; border-top: 1px dotted #7d7d7d;"></div>
			<div class="row" style="margin-bottom: 30px;">
				<div class="">
					<div align="center">
					<h1><strong>Our calendar books up quickly!</strong></h1>
					<p>To schedule a free consultation and to view our showroom</br>
					Contact The Finishing Touch Wedding Design</br>
					</br>
					<span style="font-size: 18px">(877)-838-9333</span></p>
					<a id="footer-email" href="mailto:brandi@finishingtouchweddings.com">brandi@finishingtouchweddings.com</a>
					</div>				
				</div>
			</div>
		<?php endif; ?>
		
		<div class="site-info tcenter">
			<div class="social-media">
				<a title="Facebook" href="https://www.facebook.com/pages/The-Finishing-Touch-Wedding-Design/276785242378491" target="_blank">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/images/facebook.png" alt="Facebook" />
				</a>
				<a title="Pinterest" href="http://www.pinterest.com/bgeisen/ " target="_blank">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/light_fire/images/pinterest.png" alt="Pintrest" />
				</a>
			</div>
			<p>Copyright: 2014 by NVG</p>
		</div><!-- .site-info -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
