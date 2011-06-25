<?php

foreach ( $meta_boxes as $meta_box ) {
	$my_box = new cmb_Meta_Box($meta_box);
}


/**
 * Validate value of meta fields
 * Define ALL validation methods inside this class and use the names of these 
 * methods in the definition of meta boxes (key 'validate_func' of each field)
 */

class cmb_Meta_Box_Validate {
	function check_text( $text ) {
		if ($text != 'hello') {
			return false;
		}
		return true;
	}
}
