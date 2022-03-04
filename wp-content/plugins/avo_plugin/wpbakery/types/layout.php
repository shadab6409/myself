<?php

class AvoLayout {
	/* Shortcodes dynamic CSS to buffer code */ 
	static function append_to_shortcodes_css_buffer( $append_string = '' ) {
		$append_string = trim( $append_string );
		if ( strlen( $append_string ) == 0 ) { return false; }
		$append_array = preg_split( "/((\r?\n)|(\r\n?))/", $append_string );
		$new_append_string = '';
		foreach( $append_array as $index => $append_line ){
			$append_line = trim( $append_line );
			if ( strlen( $append_line ) == 0 ) { continue; }
			$new_append_string .= $append_line;
		}
		self::$dynamic_shortcodes_css_buffer_code[] = $new_append_string;
		return true;
	}
}