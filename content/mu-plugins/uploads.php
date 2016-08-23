<?php

// Ensure the uploads URL is properly set
add_filter( 'upload_dir', function ( $uploads ) {
	$uploads['baseurl'] = WP_HOME . '/uploads';

	return $uploads;
} );