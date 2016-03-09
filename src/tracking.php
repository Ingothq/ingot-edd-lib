<?php
/**
 * Track EDD conversion events
 *
 * @package   ingot-edd-lib
 * @author    Josh Pollock <Josh@JoshPress.net>
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 Josh Pollock for Ingot LLC
 */

namespace ingot\addon\edd;


use ingot\testing\tests\click\destination\hooks;

class tracking {

	/**
	 * Add the tracking hooks
	 *
	 * @since 1.1.0
	 */
	public function __construct(){
		add_action( 'edd_post_add_to_cart', [ $this, 'add_to_cart' ] );
		add_action( 'edd_complete_purchase', [ $this, 'purchase' ] );
	}

	/**
	 * Track conversions when EDD product added to cart
	 *
	 * @since 1.1.0
	 *
	 * @uses "edd_post_add_to_cart"
	 */
	public function add_to_cart(){
		hooks::get_instance([])->check_if_victory( 'edd_cart' );
	}

	/**
	 * Track conversions when EDD product is purchases
	 *
	 * @since 1.1.0
	 *
	 * @uses "edd_complete_purchase"
	 */
	public function purchase(){
		hooks::get_instance( [] )->check_if_victory( 'edd_sale' );
	}

}
