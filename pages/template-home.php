<?php
/*
Template Name: Home
*/
get_header();
$pearl_box_1_title    = ( get_field( 'pearl_box_1_title' ) ? get_field( 'pearl_box_1_title' ) : '' );
$pearl_box_1_subtitle = ( get_field( 'pearl_box_1_subtitle' ) ? get_field( 'pearl_box_1_subtitle' ) : '' );
$pearl_box_1_text     = ( get_field( 'pearl_box_1_text' ) ? get_field( 'pearl_box_1_text' ) : '' );
$pearl_box_1_link     = ( get_field( 'pearl_box_1_link' ) ? get_field( 'pearl_box_1_link' ) : '' );
$pearl_box_1_link_text     = ( get_field( 'pearl_box_1_link_text' ) ? get_field( 'pearl_box_1_link_text' ) : '' );
$pearl_box_2_title    = ( get_field( 'pearl_box_2_title' ) ? get_field( 'pearl_box_2_title' ) : '' );
$pearl_box_2_subtitle = ( get_field( 'pearl_box_2_subtitle' ) ? get_field( 'pearl_box_2_subtitle' ) : '' );
$pearl_box_2_text     = ( get_field( 'pearl_box_2_text' ) ? get_field( 'pearl_box_2_text' ) : '' );
$pearl_box_2_link     = ( get_field( 'pearl_box_2_link' ) ? get_field( 'pearl_box_2_link' ) : '' );
$pearl_box_2_link_text     = ( get_field( 'pearl_box_2_link_text' ) ? get_field( 'pearl_box_2_link_text' ) : '' );
$pearl_box_3_title    = ( get_field( 'pearl_box_3_title' ) ? get_field( 'pearl_box_3_title' ) : '' );
$pearl_box_3_subtitle = ( get_field( 'pearl_box_3_subtitle' ) ? get_field( 'pearl_box_3_subtitle' ) : '' );
$pearl_box_3_text     = ( get_field( 'pearl_box_3_text' ) ? get_field( 'pearl_box_3_text' ) : '' );
$pearl_box_3_link     = ( get_field( 'pearl_box_3_link' ) ? get_field( 'pearl_box_3_link' ) : '' );
$pearl_box_3_link_text     = ( get_field( 'pearl_box_3_link_text' ) ? get_field( 'pearl_box_3_link_text' ) : '' );
?>
<main id="main" class="body__content" role="main">
<h2 style="display: none">Our Services</h2>
	<section class="col-sm fp-box fp-box__one" aria-labelledby="fp-box__heading-one">
		<div class="body__content">
			<div class="col-sm__left">
				<h3 id="fp-box__heading-one" class="fp-box__heading">
					<?php echo $pearl_box_1_title; ?>
				</h3>
			</div>
			<div class="col-sm__right">
				<h4 class="fp-box__sub-heading">
					<?php echo $pearl_box_1_subtitle; ?>
				</h4>
				<?php echo $pearl_box_1_text; ?>
				<a href="<?php echo $pearl_box_1_link; ?>" class="fp-box__button fp-box__button-1 button__two" rel="bookmark">
					<span></span><?php echo $pearl_box_1_link_text; ?>
				</a>
			</div>
		</div>
	</section>
	<section class="col-sm fp-box fp-box__two" aria-labelledby="fp-box__heading-two">
		<div class="body__content">
			<div class="col-sm__right">
				<h3 id="fp-box__heading-two" class="fp-box__heading">
					<?php echo $pearl_box_2_title; ?>
				</h3>
			</div>
			<div class="col-sm__left">
				<h4 class="fp-box__sub-heading">
					<?php echo $pearl_box_2_subtitle; ?>
				</h4>
				<?php echo $pearl_box_2_text; ?>
				<a href="<?php echo $pearl_box_2_link; ?>" class="fp-box__button fp-box__button-2 button__two" rel="bookmark">
					<span></span><?php echo $pearl_box_2_link_text; ?>
				</a>
			</div>
		</div>
	</section>
	<section class="col-sm fp-box fp-box__three" aria-labelledby="fp-box__heading-three">
		<div class="body__content">
			<div class="col-sm__left">
				<h3 id="fp-box__heading-three" class="fp-box__heading">
					<?php echo $pearl_box_3_title; ?>
				</h3>
			</div>
			<div class="col-sm__right">
				<h4 class="fp-box__sub-heading">
					<?php echo $pearl_box_3_subtitle; ?>
				</h4>
				<?php echo $pearl_box_3_text; ?>
				<a href="<?php echo $pearl_box_3_link; ?>" class="fp-box__button fp-box__button-3 button__two" rel="bookmark">
					<span></span><?php echo $pearl_box_3_link_text; ?>
				</a>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>