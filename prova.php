<?php 
include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
/* PHP SDK v5.0.0 */
/* make the API call */
$request = new FacebookRequest(
$session,
'GET',
'https://graph.facebook.com/1511815565706861/feed'
);
$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */
?>