<?php get_header(); ?>
<main id="main" class="body__content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="content__main" aria-labelledby="section-heading">

            <h2 id="section-heading"><?php the_title(); ?></h2>

            <article role="article">
            	<?php the_content(); ?>
            </article>

        </section>
        <aside class="content__sidebar" role="complementary">
        	<?php get_sidebar('sidebar'); ?>
        </aside>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>