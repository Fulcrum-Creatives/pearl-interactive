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
	<?php if( is_home() || is_front_page() ) : ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<figure class="heroimage">
				<img src="<?php echo $heroimage_url; ?>" alt="<?php echo $heroimage_alt; ?>">
				<figcaption>
					<span><?php echo $heroimage_caption; ?></span>
				</figcaption>
			</figure>
		<?php endwhile; endif; wp_reset_postdata(); ?>
	<?php endif; ?>
</header>
