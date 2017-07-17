<?php
include_once("inc/facebook.php"); //include facebook SDK
######### Facebook API Configuration ##########
$appId = '735120656627446'; //Facebook App ID
$appSecret = 'a2d1f55ebbd71effa5e3a09f4890fa12'; // Facebook App Secret
$homeurl = 'http://www.mega-cours.fr/mini_projet/facebook_login_with_php/index.php';  //return to home
$fbPermissions = 'email';  //Required facebook permissions

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret

));
$fbuser = $facebook->getUser();
?>