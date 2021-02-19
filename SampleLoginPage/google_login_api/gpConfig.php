<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '74860314020-0mvkkadftu1218scems0svp2iv8l0sd2.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'XRXLNHKm9rB60fxM0aFNjfUp'; //Google client secret
$redirectURL = 'WEBSITE URL'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>