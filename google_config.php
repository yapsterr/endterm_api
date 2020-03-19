<?php

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('887974993593-3focpalp8kaifvh2s7fp4i83l4orhv1p.apps.googleusercontent.com');

$google_client->setClientSecret('CucZTB8wspehhAYrOH8WbeYA');

$google_client->setRedirectUri('http://localhost/api-enarle-yap/index.php');

$google_client->addScope('email');

$google_client->addScope('profile');

session_start();

?>