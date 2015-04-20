<?php
/*
Template Name: News
*/
get_header();
?>
<main id="main" class="body__content" role="main">
	<div class="content__main post">
    <?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$wp_query = new WP_Query(array(
	  'post_type'       =>'post',
	  'paged'           => $paged
	));
	if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
        <section class="" aria-labelledby="section-heading">
       		<div class="post__date-col">
	       		<div class="post__date">
	       			<span><?php echo date('j/n'); ?></span>
	       			<span><?php echo date('Y'); ?></span>
	       		</div>
       		</div>
       		<div class="post__content">
	            <h2 id="section-heading" class="post__heading"><?php the_title(); ?></h2>
            	<?php if (get_the_category()) : ?>
				    <div class="post__categories">
				        <?php _e('Categories: ', FCWPF_TAXDOMAIN ); the_category(', '); ?>
				    </div>
				<?php endif; ?>
	            <article role="article">
	            	<?php the_excerpt(); ?>
	            	<a href="<?php echo the_permalink(); ?>" class="button__two post__button-1" rel="bookmark">
						<?php _e('Continue Article', FCWPF_TAXDOMAIN ) ?>
					</a>
	            </article>
            </div>
        </section>
    <?php endwhile; ?>
    	<nav class="post__pagination" role="navigation" aria-label="Pagination">
		    <?php
		    global $wp_query;
		    if ( $wp_query->max_num_pages > 1 ) :
		    ?>
		        <?php // Single Line
		        $sep = ' - ';
		        $prelabel =  __( 'Previous', FCWPF_TAXDOMAIN );
		        $nextlabel =  __( 'Next', FCWPF_TAXDOMAIN );
		        ?>
		        <?php // Numbered Pagination
		        $paginate_links_args = array(
		                'base'          => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		                'format'        => '?paged=%#%',
		                'total'         => $wp_query->max_num_pages,
		                'current'       => max( 1, get_query_var( 'paged' ) ),
		                'show_all'      => false,
		                'end_size'      => 1,
		                'mid_size'      => 2,
		                'prev_next'     => True,
		                'prev_text'     => $prelabel,
		                'next_text'     => $nextlabel,
		                'type'          => 'plain',
		                'add_args'      => False,
		                'add_fragment'  => ''
		            );
		        echo paginate_links( $paginate_links_args );
		        ?>
		<?php endif; ?>
		</nav>	
	<?php endif; wp_reset_postdata(); ?>
	</div>
	<aside class="content__sidebar" role="complementary">
    	<?php get_sidebar('sidebar'); ?>
    </aside>
</main>
<?php get_footer(); ?>