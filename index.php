<?php
require_once('geoplugin.class.php');
$geoPlugin = new geoPlugin();
$geoPlugin ->locate();
$countryCode = $geoPlugin ->countryCode;

switch($countryCode) {
    case US:
       header('Location: https://apple-serve.github.io/help.html');
        break;
    case GB:
       header('Location: http://gb.example.com/');
        break;
    case FR:
       header('Location: http://fr.example.com/');
        break;
    case IN:
       header('Location: https://support.apple.com/');
        break;
}
?>