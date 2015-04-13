<?php 
// Include Variables
include_once( FCWPF_DIR . '/includes/variables.php' );
// Include Head template part
get_template_part( 'includes/head' );
?>
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
        <?php if( has_nav_menu( 'primary' ) ) : wp_nav_menu( $primary_args ); endif; ?>
	</div>
	<figure class="heroimage">
		<figcaption>
		</figcaption>
	</figure>
</header>
