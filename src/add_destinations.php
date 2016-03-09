<?php
/**
 * Add EDD conversion destination tracking
 *
 * @package   ingot-edd-lib
 * @author    Josh Pollock <Josh@JoshPress.net>
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 Josh Pollock for Ingot LLC
 */


namespace ingot\addon\edd;


class add_destinations {
	/**
	 * Add hooks
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_filter( 'ingot_allowed_click_types', [ $this, 'destination_types' ] );
	}

	/**
	 * Add EDD type destination tests
	 *
	 * @since 1.0.0
	 *
	 * @uses "ingot_allowed_click_types" filter
	 *
	 * @param $types
	 *
	 * @return array
	 */
	public function destination_types( $types ){

		return array_merge( $types, [
				'cart_edd' => [
					'name'        => __( 'Add To Cart -- Easy Digital Downloads', 'ingot' ),
					'description' => __( 'Conversion is registered when an item is added to the Easy Digital Downloads cart.', 'ingot' ),
				],
				'sale_edd' => [
					'name'        => __( 'Purchase -- Easy Digital Downloads', 'ingot' ),
					'description' => __( 'Conversion is registered when an Easy Digital Downloads sale is completed.', 'ingot' ),
				],
			]
		);

	}

}
