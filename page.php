<?php get_header(); ?>
<main id="main" class="body__content" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section aria-labelledby="section-heading">
            <h2 id="section-heading"></h2>
            <article role="article">
            </article>
        </section>
    <?php endwhile; endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>