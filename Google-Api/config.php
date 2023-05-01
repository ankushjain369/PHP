<?php

session_start();

require_once 'vendor/autoload.php';

$google_client = new Google_Client();

$google_client->setClientId('319481792314-de6dopflkletrta981g1ngkj65r7vgua.apps.googleusercontent.com');

$google_client->setClientSecret('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');

$google_client->setRedirectUri('http://localhost/php/Google-Api/index.php');

$google_client->addScope('email');

$google_client->addscope('profile');

?>