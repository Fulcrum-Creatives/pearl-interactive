<aside class="footer__widgetsarea body__content" role="complementary">
	<?php get_sidebar('footer'); ?>
</aside>
<footer class="body__footer body__content" role="contentinfo">
	<?php get_template_part( 'includes/footerMenu' ); ?>
	<?php
	$pearl_address = ( get_field( 'pearl_address', 'option' ) ? get_field( 'pearl_address', 'option' ) : '' );
	$pearl_city = ( get_field( 'pearl_city', 'option' ) ? get_field( 'pearl_city', 'option' ) : '' );
	$pearl_state = ( get_field( 'pearl_state', 'option' ) ? get_field( 'pearl_state', 'option' ) : '' );
	$pearl_zip_code = ( get_field( 'pearl_zip_code', 'option' ) ? get_field( 'pearl_zip_code', 'option' ) : '' );
	$pearl_phone_number = ( get_field( 'pearl_phone_number', 'option' ) ? get_field( 'pearl_phone_number', 'option' ) : '' );
	$pearl_twitter_link = ( get_field( 'pearl_twitter_link', 'option' ) ? get_field( 'pearl_twitter_link', 'option' ) : '' );
	$pearl_facebook_link = ( get_field( 'pearl_facebook_link', 'option' ) ? get_field( 'pearl_facebook_link', 'option' ) : '' );
	$pearl_linkedin_link = ( get_field( 'pearl_linkedin_link', 'option' ) ? get_field( 'pearl_linkedin_link', 'option' ) : '' );
	?>
	<ul class="footer__info">
		<li><strong><?php echo bloginfo( 'name' ); ?></strong></li>
		<li><address><?php echo $pearl_address; ?></address></li>
		<li><address><?php echo $pearl_city . ', ' . $pearl_state . ' ' . $pearl_zip_code ?></address></li>
		<li><?php _e( 'Phone', FCWPF_TAXDOMAIN ); echo ' <a href="tel:+' . $pearl_phone_number . '">' . $pearl_phone_number; ?></a></li>
	</ul>
	<ul class="footer_social">
		<li><a href="<?php echo $pearl_twitter_link; ?>"><i class="fa fa-facebook"><span class="screen-reader-text">Twitter</span></i></a></li>
		<li><a href="<?php echo $pearl_facebook_link; ?>"><i class="fa fa-twitter"><span class="screen-reader-text">Facebook</span></i></a></li>
		<li><a href="<?php echo $pearl_linkedin_link; ?>"><i class="fa fa-linkedin-square"><span class="screen-reader-text">LinkedIn</span></i></a></li>
		<li class="footer__logo"><?php get_template_part( 'includes/footerLogo' ); ?></li>
	</ul>
</footer>
<?php wp_footer(); ?>
</body>
</html>