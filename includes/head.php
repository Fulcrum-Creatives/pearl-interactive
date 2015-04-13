<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo apply_filters( "fc_wp_html_classes", "no-js" ); ?>">
<head>
<meta http-equiv="Content-Type" content=" <?php echo apply_filters( "fc_wp_content_type", get_bloginfo('html_type') ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="<?php echo apply_filters( "fc_wp_viewport_content", "width=device-width, initial-scale=1.0" ); ?>">
<link href="<?php echo apply_filters( "fc_wp_favicon", esc_url( get_template_directory_uri() ) . "/favicon.ico" ); ?>" rel="<?php echo apply_filters( "fc_wp_favicon_rel", "icon" ); ?>" type="<?php echo apply_filters( "fc_wp_favicon_type", "image/x-icon" ); ?>" />
<link href="<?php echo apply_filters( "fc_wp_apple_icon", esc_url( get_template_directory_uri() ) . "/apple-touch-icon.png" ); ?>" rel="<?php echo apply_filters( "fc_wp_apple_icon_rel", "apple-touch-icon" ); ?>" />
<link rel="profile" href="<?php echo apply_filters( "fc_wp_profile_url", "http://gmpg.org/xfn/11" ); ?>" />
<?php wp_head(); ?>
<!--[if lt IE 9]>
	<script src="<?php echo apply_filters( "fc_wp_html5_js_path", esc_url( get_template_directory_uri() ) . "/js/vendor/html5.js" ); ?>"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<a href="#main" class="skip-nav screen-reader-text"><?php _e('Skip to main Content', FCWPF_TAXDOMAIN); ?></a><?php echo "\n"; ?>