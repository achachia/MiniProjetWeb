<?php

/**
 * Author: CodexWorld
 * Author URI: http://www.codexworld.com
 * Function Name: getLatLong()
 * $address => Full address.
 * Return => Latitude and longitude of the given address.
 * */
function getLatLong($address) {
    if (!empty($address)) {
        //Formatted address
        $formattedAddr = str_replace(' ', '+', $address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . $formattedAddr . '&sensor=false');
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
        $data['latitude'] = $output->results[0]->geometry->location->lat;
        $data['longitude'] = $output->results[0]->geometry->location->lng;
        //Return latitude and longitude of the given address
        if (!empty($data)) {
            return $data;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

/**
 * Use getLatLong() function like the following.
 */
$address = 'White House, Pennsylvania Avenue Northwest, Washington, DC, United States';
$latLong = getLatLong($address);
$latitude = $latLong['latitude'] ? $latLong['latitude'] : 'Not found';
$longitude = $latLong['longitude'] ? $latLong['longitude'] : 'Not found';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="http://www.codexworld.com/wp-content/uploads/2014/09/favicon.ico" type="image/x-icon" />
        <meta name="description" content="Live Demo at CodexWorld - Get Latitude and Longitude from Address using Google Maps API and PHP by CodexWorld">
        <meta name="keywords" content="demo, codexworld demo, project demo, live demo, tutorials, programming, coding">
        <meta name="author" content="CodexWorld">
        <title>Live Demo - Get Latitude and Longitude from Address using Google Maps API and PHP by CodexWorld</title>
        <link href="http://demos.codexworld.com/includes/css/bootstrap.css" rel="stylesheet">
        <link href="http://demos.codexworld.com/includes/css/style.css" rel="stylesheet">
        <style type="text/css">.result{border:2px
                    dashed #009755;width:auto;padding:10px;font-size:18px;border-radius:5px;color:#FF7361;margin-bottom:10px}p
            span{font-weight:bold;color:#000}label{width:75px;display:block;float:left}textarea{width:300px;height:60px}input[type='submit']{cursor:pointer}
        </style>
    </head>
    <body> 
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header"> 
                    <a class="navbar-brand" href="http://www.codexworld.com/"> 
                        <img src="http://91.68.209.9/bmi/www.codexworld.com/wp-content/uploads/2014/09/codexworld-logo.png" alt="CodexWorld"> 
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="social_btn nav navbar-nav navbar-left">
                        <li class="flike">
                            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Fcodexworld&width=85&layout=button_count&action=like&show_faces=false&share=false&height=21&appId=1602134356668306" width="85" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </li>
                        <li class="tflow">
                            <iframe allowtransparency="true" data-show-count="true" frameborder="0" scrolling="no" src="//platform.twitter.com/widgets/follow_button.html?screen_name=codexworldblog" style="width:300px; height:20px;"></iframe>
                        </li>
                        <li class="gplus"><div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/110696445627919232462" data-rel="publisher"></div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="https://github.com/codexworld/get-latitude-longitude-from-address-using-google-maps-api-and-php.git" target="_blank">Download</a></li>
                        <li> <a href="http://www.codexworld.com/get-latitude-longitude-from-address-using-google-maps-api-php/">Tutorial</a></li>
                    </ul>
                </div>
            </div> 
        </nav>
        <div class="bar-header">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5750766974376423" data-ad-slot="4802459696" data-ad-format="auto"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
        <div class="demo-title">
            <h4>DEMO BY <span class="one">CODEX</span><span class="two">WORLD</span>: Get Latitude and Longitude from Address using Google Maps API and PHP</h4>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><div>
                        <?php if ($_POST['addressSubmit']) { ?>
                            <div class="result">
                                <p id="lat"><span>Latitude:</span> <?= $latitude; ?></p>
                                <p id="long"><span>Latitude:</span> <?= $longitude; ?></p>

                            </div>
                        <?php } ?>
                        <form method="post">
                            <p>
                                <label>Address</label>
                                <textarea name="address" cols="30" rows="3"></textarea>
                            </p>
                            <p><input type="submit" name="addressSubmit" value="Get LatLong"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bar-footer">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5750766974376423" data-ad-slot="2211144895" data-ad-format="link"></ins>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
        <script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
    </body>
</html>