<?php 
// Include Variables
include_once( FCWPF_DIR . '/includes/variables.php' );
// Include Head template part
get_template_part( 'includes/head' );
?>
<?php if( has_nav_menu( 'primary' ) ) : wp_nav_menu( $primary_args ); endif; ?>