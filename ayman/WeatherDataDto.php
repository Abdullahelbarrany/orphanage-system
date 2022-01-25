<?php
include_once "OpenweathermapAdaptor.php";
include_once "WeatherProviderInterface.php";
 class WeatherDataDto
{
    
     public $temperature;
    public function __construct($temperature)
    {
       
        $this->temperature = $temperature;
        
    }
    public function temperature()
    {
        return $this->temperature;
    }

    
}