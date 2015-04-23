<?php 
/*
Template Name: About
*/
get_header();
?>
<main id="main" class="body__content" role="main">
	<?php get_template_part( 'includes/aboutMenu' ); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="content__main full" aria-labelledby="section-heading">
            <h2 id="section-heading" class="page-heading"><?php the_title(); ?></h2>
            <article role="article">
            	<?php the_content(); ?>
            </article>
        </section>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>