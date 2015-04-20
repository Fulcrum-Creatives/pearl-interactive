<?php 
if( is_home() || is_front_page() ) : 
	if (have_posts()) : while (have_posts()) : the_post();
		$pearl_hero_images        = ( get_field( 'pearl_hero_images' ) ? get_field( 'pearl_hero_images' ) : '' ); // get all the rows
		$heroimage_rand_row       = $pearl_hero_images[ array_rand( $pearl_hero_images ) ]; // get a random row
		$heroimage_rand_row_image = $heroimage_rand_row['pearl_hero_image' ]; // get the sub field value
		$heroimage_caption        = $heroimage_rand_row['pearl_hero_caption' ];
		$heroimage_url            = $heroimage_rand_row_image['sizes']['large'];
		$heroimage_alt            = $heroimage_rand_row_image['alt'];
?>
		<figure class="heroimage">
			<img src="<?php echo $heroimage_url; ?>" alt="<?php echo $heroimage_alt; ?>">
			<figcaption>
				<span><?php echo $heroimage_caption; ?></span>
			</figcaption>
		</figure>
	<?php 
	endwhile; endif; wp_reset_postdata(); 
endif; ?>