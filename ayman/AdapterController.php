<?php 
include_once "WeatherDataDto.php";
include_once "OpenweathermapAdaptor.php";
include_once "WeatherProviderInterface.php";


$x=new OpenweathermapAdapter();
$y=$x->currentWeather();
$z=new WeatherDataDto($y);
$f=$z->temperature();
echo "the weather is" .$f;


?>