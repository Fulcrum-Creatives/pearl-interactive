<?php get_header(); ?>
<main id="main" class="body__content" role="main">
	<div class="content__main single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="post__section" aria-labelledby="section-heading">
       		<heading class="section__heading">
        		<div class="post__date">
	       			<span><?php echo date('n/j'); ?></span>
	       			<span><?php echo date('Y'); ?></span>
	       		</div>
	       		<div class="post__heading">
	        		<h2 id="section-heading">
		           		<a href="<?php echo the_permalink(); ?>">
		            		<?php the_title(); ?>
		            	</a>
		            </h2>
		            <?php if (get_the_category()) : ?>
					    <div class="post__categories">
					        <?php _e('Categories: ', FCWPF_TAXDOMAIN ); the_category(', '); ?>
					    </div>
					<?php endif; ?>
				</div>
        	</heading>
            <article class="post__content" role="article">
            	<?php the_content(); ?>
            	<hr class="author_hr" />
            	<?php
            	$author_id = get_the_author_meta('ID');
            	$author_name = get_the_author_meta( 'display_name' );
            	$pearl_auth_twitter = ( get_field( 'pearl_auth_twitter', 'user_' . $author_id ) ? get_field( 'pearl_auth_twitter', 'user_' . $author_id ) : '' );
            	$pearl_auth_facebook = ( get_field( 'pearl_auth_facebook', 'user_' . $author_id ) ? get_field( 'pearl_auth_facebook', 'user_' . $author_id ) : '' );
            	$pearl_auth_linkedin = ( get_field( 'pearl_auth_linkedin', 'user_' . $author_id ) ? get_field( 'pearl_auth_linkedin', 'user_' . $author_id ) : '' );
            	?>
            	<ul class="post__author">
            		<li><em><?php _e( 'Written By ', FCWPF_TAXDOMAIN ); echo $author_name; ?></em></li>
            		<?php if( $pearl_auth_facebook ) : ?>
					<li><a href="<?php echo $pearl_twitter_link; ?>"><i class="fa fa-facebook"></i></a></li>
					<?php
					endif;
					if( $pearl_auth_twitter ) :
					?>
					<li><a href="<?php echo $pearl_facebook_link; ?>"><i class="fa fa-twitter"></i></a></li>
					<?php
					endif;
					if( $pearl_auth_linkedin ) :
					?>
					<li><a href="<?php echo $pearl_linkedin_link; ?>"><i class="fa fa-linkedin-square"></i></a></li>
					<?php endif; ?>
				</ul>
            </article>
        </section>

        <div class="single__pagi">
	        <?php
	 		$prev_post = get_adjacent_post(false, '', true);
			if(!empty($prev_post)) {
				$url = get_permalink($prev_post->ID);
				?>
				<a href="<?php echo $url; ?>" class="button__three nav__posts prev" rel="bookmark"><?php _e('Back', FCWPF_TAXDOMAIN); ?></a>
				<?php
			}
			?>
			<a href="<?php echo home_url() . '/news/news-archive/' ?>" class="button__two post__button-1" rel="bookmark">
				<?php _e('View All Articles', FCWPF_TAXDOMAIN ) ?>
			</a>
			<?php
			$next_post = get_adjacent_post(false, '', false);
			if(!empty($next_post)) {
				$name = get_post_meta( $next_post->ID, 'wdwtwwy_name', true );
				$care_about = get_post_meta( $next_post->ID, 'wdwtwwy_care', true );
				$url = get_permalink($next_post->ID);
				?>
				<a href="<?php echo $url; ?>" class="button__three nav__posts next" rel="bookmark"><?php _e('Next', FCWPF_TAXDOMAIN); ?></a>
				<?php
			}
			?>
		</div>
    <?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</main>
<?php get_footer(); ?>