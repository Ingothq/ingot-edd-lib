<?php


use ingot\addon\edd\add_destinations;
use ingot\addon\edd\tracking;

/**
 * Initialize EDD Destination testing
 *
 * @since 1.0.0
 */
function ingot_edd_destination_init(){
	define( 'INGOT_EDD_VER', '1.0.0' );
	add_action( 'ingot_loaded', function(){
		new add_destinations();
		new tracking();
	});
}
