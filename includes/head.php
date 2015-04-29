<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo apply_filters( "fc_wp_html_classes", "no-js" ); ?>">
<head>
<meta http-equiv="Content-Type" content=" <?php echo apply_filters( "fc_wp_content_type", get_bloginfo('html_type') ); ?>" charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="<?php echo apply_filters( "fc_wp_viewport_content", "width=device-width, initial-scale=1.0" ); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
<meta name="msapplication-TileColor" content="#784ea0">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/mstile-144x144.png">
<meta name="theme-color" content="#784ea0">
<link rel="profile" href="<?php echo apply_filters( "fc_wp_profile_url", "http://gmpg.org/xfn/11" ); ?>" />
<?php wp_head(); ?>
<!--[if lt IE 9]>
	<script src="<?php echo apply_filters( "fc_wp_html5_js_path", esc_url( get_template_directory_uri() ) . "/js/vendor/html5.js" ); ?>"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<a href="#main" class="skip-nav screen-reader-text"><?php _e('Skip to main Content', FCWPF_TAXDOMAIN); ?></a><?php echo "\n"; ?>