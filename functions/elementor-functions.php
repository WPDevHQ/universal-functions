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

// Adds the ability to add CSS ID to an Elementor section :)
add_action('elementor/element/section/section_advanced/before_section_end', function ($instance, $section) {
	$instance->add_control(
		'universal_section_id',
		[
			'type' => \Elementor\Controls_Manager::TEXT,
			'label' => __('CSS ID eg. #my-id', 'wp-universal-functions'),
		]
	);
}, 10, 2);
 
add_action('elementor/frontend/element/before_render', function ($instance) {
	if ('section' == $instance->get_name()) {
		ob_start();
	}
});

add_action('elementor/frontend/element/after_render', function ($instance) {
	if ('section' == $instance->get_name()) {
		$content = ob_get_clean();
		$sectionID = $instance->get_settings('universal_section_id');
		if (!empty($sectionID)) {
			preg_match('/<section (.*?)(>)/', $content, $sectionTag);

			if (!empty($sectionTag) && !preg_match('/id="(.*?)/', $sectionTag[0])) {
				$replacedSectionID = sprintf('<section id="%s"', esc_attr($sectionID));
				$replaced = str_replace('<section', $replacedSectionID, $sectionTag[0]);

				$content = str_replace($sectionTag[0], $replaced, $content);
			}
		}
		echo $content;
	}
});