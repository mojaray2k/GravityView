<?php
/**
 * Display the website field type
 *
 * @package GravityView
 */

global $gravityview_view;

extract( $gravityview_view->field_data );

if( !empty( $field_settings['truncatelink'] ) && function_exists( 'gravityview_format_link' ) ) {
	if( !empty( $value ) ) {

		$anchor_text = gravityview_format_link( $value );

		$attributes = empty( $field_settings['open_same_window'] ) ? 'target=_blank' : '';

		echo gravityview_get_link( $value, $anchor_text, $attributes );

	}
} else {
	echo $display_value;
}
