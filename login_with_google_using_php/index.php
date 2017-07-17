<?php
   ini_set('display_errors', 1);
    error_reporting(E_ALL);
include_once("config.php");
include_once("includes/functions.php");

//print_r($_GET);die;

if (isset($_REQUEST['code'])) {

    $gClient->authenticate();
    // echo '1';
    //$_SESSION['token'] = $gClient->getAccessToken();
    //header('Location: ' . filter_var($redirectUrl, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {

    // echo '2';
    $gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
    //echo '3';
    $userProfile = $google_oauthV2->userinfo->get();
    //DB Insert
    $gUser = new Users();
    $gUser->checkUser('google', $userProfile['id'], $userProfile['given_name'], $userProfile['family_name'], $userProfile['email'], $userProfile['gender'], $userProfile['locale'], $userProfile['link'], $userProfile['picture']);
    $_SESSION['google_data'] = $userProfile;
 
    header("location: account.php");
    $_SESSION['token'] = $gClient->getAccessToken();
    // var_dump($_SESSION['google_data'] );
} else {
    //echo '4';
    $authUrl = $gClient->createAuthUrl();
    // print_r($authUrl);
}

if (isset($authUrl)) {
    //echo '5';
    echo '<a href="' . $authUrl . '"><img src="images/glogin.png" alt=""/></a>';
} else {
    // echo '6';
    echo '<a href="account.php">acces</a>';
    echo '<a href="logout.php?logout">Logout</a>';
}
?>