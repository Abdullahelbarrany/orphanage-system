<?php
include_once "WeatherDataDto.php";
class OpenweathermapAdapter 
{
   
   private $city_name;
   private$api_key;


    public function __construct()
    {
        $this->city_name='Egypt';
        $this->api_key='197e780f9ae9c453b173d487bd35b417';

    }

    public function currentWeather()
    {
        $city_name='Egypt';
       $api_key='197e780f9ae9c453b173d487bd35b417';

        $api_URl='http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
        $weather_data= json_decode(file_get_contents($api_URl),true);
        $temprature=$weather_data['main']['temp'];
        $temp_in_cel=round($temprature-273.15);
        $temprature_current_weather=$weather_data['weather'][0]['main'];
        return $temp_in_cel;
        
        
    }
}