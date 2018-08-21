<?php
/**
 * Signable
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2018 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Gateways\OmniKassa2
 */

namespace Pronamic\WordPress\Pay\Gateways\OmniKassa2;

/**
 * Signable
 *
 * @author  Remco Tolsma
 * @version 2.0.0
 * @since   1.0.0
 */
interface Signable {
	/**
	 * Get signature data.
	 *
	 * @return array
	 */
	public function get_signature_data();
}
