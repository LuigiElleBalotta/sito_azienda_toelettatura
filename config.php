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

/* PHP SDK v5.0.0 */
/* make the API call */
$response = $fb->get("/729783137104775/posts", "466576463534668|bf7744806e9352368d3e9e965647d5ea");
$graphObject = $response->getGraphEdge();
/* handle the result */

$graphJSON = $graphObject->asJson();

$arr = json_decode($graphJSON, true);
include("functions/functions.php");
$photoJSON = file_get_contents("https://graph.facebook.com/729783137104775/photos?access_token=466576463534668|bf7744806e9352368d3e9e965647d5ea&type=uploaded");
$arrPhoto = json_decode($photoJSON, true);

?>