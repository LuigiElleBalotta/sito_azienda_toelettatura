<?php
// DOCS: https://developers.facebook.com/docs/php/gettingstarted#install-manually
require_once __DIR__ . '/facebook_sdk/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '{app-id}',
	'app_secret' => '{app-secret}',
	'default_graph_version' => 'v2.5',
]);

?>