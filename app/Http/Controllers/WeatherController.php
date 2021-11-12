<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function showWeather()
    {
        $response=Http::get('api.openweathermap.org/data/2.5/weather',[
           'q'=>'HaNoi',
           'appid'=>config('app.key_weather'),
        ]);
        $weather = json_decode($response);
        dd($weather);
        $currentWeather=$weather->main->temp - 273.15;
        $windSpeed=$weather->wind->speed;
        dd($windSpeed);
    }
}
