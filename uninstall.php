<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

function sitefinity_delete_plugin() {
	global $wpdb;

	$wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
		$wpdb->prefix . 'cms2cms_connector_options' ) );
}

sitefinity_delete_plugin();
