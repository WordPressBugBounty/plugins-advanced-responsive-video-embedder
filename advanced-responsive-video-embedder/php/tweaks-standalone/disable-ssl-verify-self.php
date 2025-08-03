<?php
/**
 * @package   Nextgenthemes\TweakMaster
 * @link      https://nexgenthemes.com
 * @copyright 2025 Nicolas Jonas
 * @license   GPL-3.0
 *
 * @wordpress-plugin
 * Plugin Name:      Disable Self SSL Verify
 * Description:      This prevents SSL errors for development sites that are hosted locally with a self-signed certificate
 * Plugin URI:       https://nexgenthemes.com/plugins/tweakmaster/
 * Version:          1.0.0
 * Author:           Nicolas Jonas
 * Author URI:       https://nexgenthemes.com
 * License:          GPLv3
 */

declare(strict_types = 1);

namespace Nextgenthemes\TweakMaster;

add_filter( 'http_request_args', __NAMESPACE__ . '\disable_ssl_verify_for_dev', 10, 2 );

function disable_ssl_verify_for_dev( array $args, string $url ): array {

	if ( str_starts_with( $url, home_url() ) ) {
		$args['sslverify'] = false;
	}

	return $args;
}
