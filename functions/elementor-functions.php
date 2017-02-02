<?php

/*
 * Elementor Specific Functions go in this file.
 */
 
// Our first function is to make the Elementor Accordion closed on page load :)
function elementor_accordion_title() { ?>
	<script>
		jQuery(document).ready(function() {
			jQuery( '.elementor-accordion-title' ).removeClass( 'active' );
			jQuery( '.elementor-accordion-content' ).css( 'display', 'none' );
		});
	</script>
<?php }
add_action( 'wp_footer', 'elementor_accordion_title', 99 );

// CSS ID removed as this is now part of Elementor Core
