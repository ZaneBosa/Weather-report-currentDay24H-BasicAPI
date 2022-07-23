<?php
namespace App\Controllers;

use App\Models\WeatherData;
use App\Views\TwigView;

class WeatherDataController
{
    public function show(): TwigView
    {
        $urlContents = file_get_contents('http://api.weatherapi.com/v1/forecast.json?key=c109ef50045a4c70a6890554222107&q=Paris&days=3&aqi=no&alerts=no');
        $weatherDetails = json_decode($urlContents);
        
        $weatherReport = [];

        foreach ($weatherDetails->forecast->forecastday[0]->hour as $hourlyReport) {
            $weatherReport[] = new WeatherData(
                $hourlyReport->time,
                $hourlyReport->temp_c,
                $hourlyReport->humidity,
                $hourlyReport->condition->icon,
                $hourlyReport->condition->text
            );
        }

        return new TwigView('weather-hourly-report.html', [
            'weatherReport' => $weatherReport
        ]);
        
    }
}