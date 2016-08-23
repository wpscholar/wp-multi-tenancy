<?php

define( 'WP_MULTI_TENANT', true );

define( 'SITE_DOMAIN', getenv( 'HTTP_HOST' ) );
define( 'SITE_DIRECTORY', class_exists( 'WP_CLI' ) ? getenv( 'PWD' ) : getenv( 'DOCUMENT_ROOT' ) );

define( 'DISALLOW_FILE_MODS', true );

require SITE_DIRECTORY . '/wp-config-local.php';

$is_ssl = (boolean) getenv( 'HTTPS' ) || 443 == getenv( 'SERVER_PORT' ) || 'https' === getenv( 'HTTP_X_FORWARDED_PROTO' );
$scheme = $is_ssl ? 'https' : 'http';

if ( ! defined( 'WP_HOME' ) ) {
	define( 'WP_HOME', $scheme . '://' . SITE_DOMAIN );
}

if ( ! defined( 'WP_SITEURL' ) ) {
	define( 'WP_SITEURL', WP_HOME . '/wp' );
}

if ( ! defined( 'UPLOADS' ) && ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'UPLOADS', '../uploads' );
}

if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
}
if ( ! defined( 'WP_CONTENT_URL' ) ) {
	define( 'WP_CONTENT_URL', WP_HOME . '/content' );
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