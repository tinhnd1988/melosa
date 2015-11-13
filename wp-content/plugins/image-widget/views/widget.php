<?php
/**
 * Widget template. This template can be overriden using the "sp_template_image-widget_widget.php" filter.
 * See the readme.txt file for more info.
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;

//if ( !empty( $title ) ) { echo $before_title . $title . $after_title; }

echo $this->get_image_html( $instance, true );

if ( !empty( $description ) ) {
	echo '<div class="'.$this->widget_options['classname'].'-description meta posa" ><div class="dtb"><a href="#" class="dtbc posr">';
	echo wpautop( $description );
	echo "</a></div></div>";
}
echo $after_widget;
?>