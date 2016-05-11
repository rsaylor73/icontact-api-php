<?php

// Load the iContact library
require_once('lib/iContactApi.php');

// Give the API your information
iContactApi::getInstance()->setConfig(array(
	'appId'       => appId, 
	'apiPassword' => apiPassword, 
	'apiUsername' => apiUsername
));

$ip = $_SERVER['remote_addr'];
if (ip == $ip) {

	var_dump($oiContact->getCampaigns());



} else {
	print "Access Deined!";
}

?>