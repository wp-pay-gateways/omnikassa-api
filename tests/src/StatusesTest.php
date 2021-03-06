<?php
/**
 * Statuses test
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Gateways\OmniKassa2
 */

namespace Pronamic\WordPress\Pay\Gateways\OmniKassa2;

use PHPUnit\Framework\TestCase;
use Pronamic\WordPress\Pay\Payments\PaymentStatus;

/**
 * Statuses test
 *
 * @author  Remco Tolsma
 * @version 2.1.9
 * @since   2.0.2
 */
class StatusesTest extends TestCase {
	/**
	 * Test transform.
	 *
	 * @dataProvider status_matrix_provider
	 * @param string $omnikassa_2_status OmniKassa 2.0 status string.
	 * @param string $expected           Expected Pronamic Pay status string.
	 */
	public function test_transform( $omnikassa_2_status, $expected ) {
		$pronamic_pay_status = Statuses::transform( $omnikassa_2_status );

		$this->assertEquals( $expected, $pronamic_pay_status );
	}

	/**
	 * Status matrix provider.
	 *
	 * @return array<array<string|null>>
	 */
	public function status_matrix_provider() {
		return array(
			array( Statuses::CANCELLED, PaymentStatus::CANCELLED ),
			array( Statuses::COMPLETED, PaymentStatus::SUCCESS ),
			array( Statuses::EXPIRED, PaymentStatus::EXPIRED ),
			array( Statuses::IN_PROGRESS, PaymentStatus::OPEN ),
			array( 'not existing status', null ),
		);
	}
}
