<?php
// DOCS: https://developers.facebook.com/docs/php/gettingstarted#install-manually
require_once __DIR__ . '/facebook-sdk-v5/autoload.php';
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
$fb = new Facebook\Facebook([
	'app_id' => '466576463534668',
	'app_secret' => 'bf7744806e9352368d3e9e965647d5ea',
	'default_graph_version' => 'v2.5',
	//1511815565706861
]);


include("functions/functions.php");
include("functions/mailManager/mailManager_class.php");
define("EMAIL_PROPRIETARIO", "");

?>