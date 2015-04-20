<?php get_template_part( 'includes/head' ); ?>
<header class="body__header" role="banner">
	<div class="body__content">
		<div class="header__logo">
            <?php get_template_part( 'includes/logo' ); ?>
        </div>
        <div class="mobile__contact button__one">
        	<a href="<?php echo home_url(); ?>/contact/">
        		<?php _e( 'Contact', FCWPF_TAXDOMAIN ); ?>
        	</a>
        </div>
        <?php get_template_part( 'includes/primaryMenu' ); ?>
	</div>
	<?php get_template_part( 'includes/heroImage' ); ?>
</header>