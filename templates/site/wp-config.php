<?php

/**
 * WordPress configuration file
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 */

define( 'DISALLOW_FILE_EDIT', true );

if ( file_exists( __DIR__ . '/wp-config-local.php' ) ) {
	require __DIR__ . '/wp-config-local.php';
}

$is_ssl = (boolean) getenv( 'HTTPS' ) || 443 == getenv( 'SERVER_PORT' ) || 'https' === getenv( 'HTTP_X_FORWARDED_PROTO' );
$scheme = $is_ssl ? 'https' : 'http';

if ( ! defined( 'WP_HOME' ) ) {
	define( 'WP_HOME', $scheme . '://' . getenv( 'HTTP_HOST' ) );
}

if ( ! defined( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', WP_HOME . '/wp' );
}

if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
}

if ( ! defined( 'WP_CONTENT_URL' ) ) {
	define( 'WP_CONTENT_URL', WP_HOME . '/content' );
}

if ( ! defined( 'UPLOADS' ) ) {
	define( 'UPLOADS', '../uploads' );
}

if ( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', 'localhost' );
}

if ( ! defined( 'DB_CHARSET' ) ) {
	define( 'DB_CHARSET', 'utf8' );
}

if ( ! defined( 'DB_COLLATE' ) ) {
	define( 'DB_COLLATE', '' );
}

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

if ( ! isset( $table_prefix ) ) {
	$table_prefix = 'wp_';
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/wp' );
}

require_once( ABSPATH . 'wp-settings.php' );