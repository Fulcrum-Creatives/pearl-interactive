<a href="<?php echo home_url(); ?>">
    <?php 
    $pearl_footer_logo = ( get_field( 'pearl_footer_logo', 'option' ) ? get_field( 'pearl_footer_logo', 'option' ) : '' );
    if( !empty( $pearl_footer_logo ) ) :
        $url = $pearl_footer_logo['url'];
    ?>
    <h1 class="site__logo" style="background-image: url(<?php echo $url; ?>)"><span class="ir"><?php echo bloginfo('name'); ?></span></h1>
    <?php else : ?>
    <h1><?php echo bloginfo('name'); ?></h1>
    <?php endif; ?>
</a>