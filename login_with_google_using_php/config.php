<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '348086342033-r6uf8u839tbt5ov4rk2ckka6hmo21m65.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'Q_ia5SfbHYMtnYuaGGfzL-Gm'; //Google CLIENT SECRET
$redirectUrl = 'http://www.mega-cours.fr/mini_projet/login_with_google_using_php/index.php';  //return url (url to script)
$homeUrl = 'http://www.mega-cours.fr/mini_projet/login_with_google_using_php/index.php';  //return to home 

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('megacours');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>