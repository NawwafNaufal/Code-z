<?php

require_once 'vendor/autoload.php';

$clientId = '722781873122-fvbjlf4roisoind4miqoptjsfe0uuqfp.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/login-google/sign_in.php';

$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('profile');
$client->addScope('email');
