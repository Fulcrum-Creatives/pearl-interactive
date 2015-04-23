<?php 
/*
Template Name: Contact
*/
get_header();
$pearl_address = ( get_field( 'pearl_address', 'option' ) ? get_field( 'pearl_address', 'option' ) : '' );
$pearl_city = ( get_field( 'pearl_city', 'option' ) ? get_field( 'pearl_city', 'option' ) : '' );
$pearl_state = ( get_field( 'pearl_state', 'option' ) ? get_field( 'pearl_state', 'option' ) : '' );
$pearl_zip_code = ( get_field( 'pearl_zip_code', 'option' ) ? get_field( 'pearl_zip_code', 'option' ) : '' );
$pearl_phone_number = ( get_field( 'pearl_phone_number', 'option' ) ? get_field( 'pearl_phone_number', 'option' ) : '' );
$pearl_fax_number = ( get_field( 'pearl_fax_number', 'option' ) ? get_field( 'pearl_fax_number', 'option' ) : '' );
?>
<main id="main" class="body__content" role="main">
    <?php 
    if (have_posts()) : while (have_posts()) : the_post(); 
    	$pearl_contact_sub_title = ( get_field( 'pearl_contact_sub_title' ) ? get_field( 'pearl_contact_sub_title' ) : '' );
    ?>
        <section class="content__main contact" aria-labelledby="section-heading">
            <h2 id="section-heading" class="page-heading heading__contact"><?php echo $pearl_contact_sub_title; ?></h2>
            <div class="contact__info">
            	<p><strong><?php echo bloginfo( 'name' ); ?></strong></p>
            	<p><address><?php echo $pearl_address; ?></address></p>
            	<p><address><?php echo $pearl_city . ', ' . $pearl_state . ' ' . $pearl_zip_code ?></address></p>
        		<ul>
        			<li><?php _e( 'Phone', FCWPF_TAXDOMAIN ); echo ' <a href="tel:+' . $pearl_phone_number . '">' . $pearl_phone_number; ?></a></li>
        			<li><?php _e( 'Fax', FCWPF_TAXDOMAIN ); echo ' <a href="fax:+' . $pearl_fax_number . '">' . $pearl_fax_number; ?></a></li>
        		</ul>
            </div>
            <article role="article">
            	<?php the_content(); ?>
            </article>
        </section>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>