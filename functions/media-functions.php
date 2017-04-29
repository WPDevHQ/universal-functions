<?php
//Add media attachment url to the Media Library
add_filter( 'manage_media_columns', 'universal_media_columns_url' );
/**
 * Filter the Media list table columns to add a URL column.
 *
 * @param array $posts_columns Existing array of columns displayed in the Media list table.
 * @return array Amended array of columns to be displayed in the Media list table.
 */
function universal_media_columns_url( $posts_columns ) {
    $posts_columns['media_url'] = 'URL';
    return $posts_columns;
}
 
add_action( 'manage_media_custom_column', 'universal_media_custom_column_url' );
/**
 * Display URL custom column in the Media list table.
 *
 * @param string $column_name Name of the custom column.
 */
function universal_media_custom_column_url( $column_name ) {
    if ( 'media_url' !== $column_name ) {
        return;
    }
 
    echo '<input type="text" width="100%" onclick="jQuery(this).select();" value="' . wp_get_attachment_url() . '" />';
}
 
add_action( 'admin_print_styles-upload.php', 'universal_url_column_css' );
/**
 * Add custom CSS on Media Library page in WP admin
 */
function universal_url_column_css() {
    echo '<style>
        @media only screen and (min-width: 1400px) {
            .fixed .column-media_url {
                width: 15%;
            }
        }
    </style>';
}

// Add the attachment ID column to the Media Library
add_filter('manage_media_columns', 'universal_columns_attachment_id', 1);

function universal_columns_attachment_id($defaults) {
    $defaults['wps_post_attachments_id'] = __('ID');
    return $defaults;
}

add_action('manage_media_custom_column', 'universal_custom_columns_attachment_id', 1, 2);
function universal_custom_columns_attachment_id($column_name, $id) {
    if($column_name === 'wps_post_attachments_id') {
        echo $id;
    }
}