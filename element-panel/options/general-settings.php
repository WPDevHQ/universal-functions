<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'Default Modules', 'element-theme' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'Module Controls', 'element-theme' ),
				'type'    => 'box',
				'options' => array(
					'branding_switch'                    => array(
						'label'        => __( 'Site Branding', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Branding module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add a site title or logo to the Element Custom Header.', 'element-theme' ),
							__( 'You may wish to turn this off if you have another plugin that supplies the module with it i.e NavMenu for Elementor', 'element-theme' )
						),
					),
					'navigation_switch'                    => array(
						'label'        => __( 'Navigation Menu', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Menu module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add a site menu to the Element Custom Header.', 'element-theme' ),
							__( 'You may wish to turn this off if you have another plugin that supplies the module with it i.e NavMenu for Elementor', 'element-theme' )
						),
					),
					'search_switch'                    => array(
						'label'        => __( 'SearchForm', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element SearchForm module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add a searchform to the Element Custom Header.', 'element-theme' ),
							__( 'You may wish to turn this off if you have another plugin that supplies the module with it i.e NavMenu for Elementor', 'element-theme' )
						),
					),
					'featured_switch'                    => array(
						'label'        => __( 'Featured Posts', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Featured Posts module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add a Featured Posts section to your Elementor page.', 'element-theme' ),
							__( 'You may wish to turn this off if you do not need the option', 'element-theme' )
						),
					),
					'posts1_switch'                    => array(
						'label'        => __( 'Posts Style1', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Posts List Style:1 module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add an elegant posts list.', 'element-theme' ),
							__( 'You may wish to turn this off if you do not need the option', 'element-theme' )
						),
					),
					'posts2_switch'                    => array(
						'label'        => __( 'Posts Style2', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Posts List Style:2 module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add a searchform to the Element Custom Header.', 'element-theme' ),
							__( 'You may wish to turn this off if you have another plugin that supplies the module with it i.e NavMenu for Elementor', 'element-theme' )
						),
					),
					'masonry_switch'                    => array(
						'label'        => __( 'Masonry', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Masonry Posts Layout module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add an elegant masonry layout with cool posts load effects.', 'element-theme' ),
							__( 'You may wish to turn this off if you do not need this module', 'element-theme' )
						),
					),
					'carousel_switch'                    => array(
						'label'        => __( 'Posts Carousel', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Posts Carousel module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add a customizable posts carousel.', 'element-theme' ),
							__( 'You may wish to turn this off if you do not need this module', 'element-theme' )
						),
					),
					'widgets_switch'                    => array(
						'label'        => __( 'Dynamic Widgets', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Dynamic Widgets module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add any of your sidebars (widget areas) anywhere on your Elementor page.', 'element-theme' ),
							__( 'You may wish to turn this off if you do not need this module', 'element-theme' )
						),
					),
					'mailchimp_switch'                    => array(
						'label'        => __( 'MailChimp Form', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element MailChimp optin module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add a customizable MailChimp optin form.', 'element-theme' ),
							__( 'You may wish to turn this off if you do not need this module', 'element-theme' )
						),
					),
					'credits_switch'                    => array(
						'label'        => __( 'Footer Credits', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'yes',
						'desc'         => __( 'Switch this option to enable or disbale the Element Footer Credits module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module gives you the option to add an easy to configure site footer credits.', 'element-theme' ),
							__( 'You may wish to turn this off if you do not need this module', 'element-theme' )
						),
					),
					'cblock_switch'                    => array(
						'label'        => __( 'Code Block', 'element-theme' ),
						'type'         => 'switch',
						'right-choice' => array(
							'value' => 'yes',
							'label' => __( 'On', 'element-theme' )
						),
						'left-choice'  => array(
							'value' => 'no',
							'label' => __( 'Off', 'element-theme' )
						),
						'value'        => 'no',
						'desc'         => __( 'Switch this option to enable or disbale the Element Code Block module in Elementor.', 'element-theme' ),
						'help'         => sprintf( "%s \n\n<br/><br/>\n\n <b>%s</b>",
							__( 'This module is not for the faint hearted - only use it if you know what you are doing!', 'element-theme' ),
							__( 'Off by default but can be turned on if you have the need for inserting custom PHP code into your page.', 'element-theme' )
						),
					),
				)
			),
		)
	)
);