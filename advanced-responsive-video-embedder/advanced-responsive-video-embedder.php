<?php
/**
 * Plugin Name:       Advanced Responsive Video Embedder for Rumble, Odysee, YouTube, Vimeo, Kick ...
 * Plugin URI:        https://nextgenthemes.com/plugins/arve-pro/
 * Description:       Easy responsive video embeds via URL (like WordPress) or Shortcodes. Supports almost anything you can imagine.
 * Version:           10.6.12
 * Requires PHP:      7.4
 * Requires at least: 6.6
 * Author:            Nicolas Jonas
 * Author URI:        https://nextgenthemes.com
 * License:           GPL-3.0
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       advanced-responsive-video-embedder
 *
 * @package Nextgenthemes/ARVE
 * @author  Nicolas Jonas
 * @license GPL 3.0
 * @link    https://nextgenthemes.com
 */

declare(strict_types = 1);

namespace Nextgenthemes\ARVE;

const VERSION                       = '10.6.12';
const PRO_VERSION_REQUIRED          = '7.0.6';
const PRIVACY_VERSION_REQUIRED      = '1.1.5';
const RANDOMVIDEO_VERSION_REQUIRED  = '2.1.8';
const STICKYVIDEOS_VERSION_REQUIRED = '2.0.2';
const AMP_VERSION_REQUIRED          = '2.2.1';
const NUM_TRACKS                    = 3;
const PLUGIN_FILE                   = __FILE__;
const PLUGIN_DIR                    = __DIR__;
const VIDEO_FILE_EXTENSIONS         = array( 'av1mp4', 'mp4', 'm4v', 'webm', 'ogv' );
const DEFAULT_MAXWIDTH              = 900;
const OEMBED_HTML_PRIORITY          = -5;
const VIEW_SCRIPT_HANDLES           = array( 'arve', 'arve-pro', 'arve-sticky-videos', 'arve-random-video' );
const ADDON_NAMES                   = array( 'RandomVideo', 'Pro', 'Privacy', 'StickyVideos', 'AMP' );
// For error messages and stuff on the admin screens.
const ALLOWED_HTML = array(
	'h1'     => array( 'class' => true ),
	'h2'     => array( 'class' => true ),
	'h3'     => array( 'class' => true ),
	'h4'     => array( 'class' => true ),
	'h5'     => array( 'class' => true ),
	'h6'     => array( 'class' => true ),
	'a'      => array(
		'href'   => true,
		'target' => true,
		'title'  => true,
	),
	'abbr'   => array( 'title' => true ),
	'p'      => array(),
	'br'     => array(),
	'em'     => array(),
	'strong' => array(),
	'code'   => array(),
	'ul'     => array(),
	'li'     => array(),
	'pre'    => array(),
	'div'    => array( 'class' => true ),
);

if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
	return;
}

if ( ! defined( 'ABSPATH' ) ) {
	return; // no exit for use in build script
}

require_once __DIR__ . '/vendor/autoload_packages.php';
require_once __DIR__ . '/php/init.php';
