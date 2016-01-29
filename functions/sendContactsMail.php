<?php
include_once($_SERVER['DOCUMENT_ROOT']."/config.php");
error_reporting(0);
$mailMGR = new mail_manager();
echo $mailMGR->sendMail($_REQUEST['from'], EMAIL_PROPRIETARIO, htmlentities($_REQUEST['testo'], 0, 'UTF-8'), $_REQUEST['nome']." - ".$_REQUEST['oggetto']);
?>