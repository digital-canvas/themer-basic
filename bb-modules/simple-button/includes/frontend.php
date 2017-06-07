<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file:
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example:
 */
$classes = [ 'button' ];
if ( $settings->button_type == 'solid' ) {
	if ( $settings->solid_color != 'default' ) {
		$classes[] = 'button-' . $settings->solid_color;
	}
}
if ( $settings->button_type == 'outline' ) {
	$classes[] = 'button-outline';
	if ( $settings->outline_color != 'default' ) {
		$classes[] = 'button-' . $settings->outline_color . '-outline';
	}
}
if ( $settings->button_size != 'medium' ) {
	$classes[] = 'button-' . $settings->button_size;
}
if ( $settings->button_width != 'default' ) {
	$classes[] = 'button-' . $settings->button_width;
}
if ( $settings->button_shape != 'default' ) {
	$classes[] = 'button-' . $settings->button_shape;
}
?>
<a class="<?php echo esc_attr( implode( ' ', $classes ) ) ?>"
   href="<?php echo $settings->link; ?>"><?php echo esc_html( $settings->text ); ?></a>
