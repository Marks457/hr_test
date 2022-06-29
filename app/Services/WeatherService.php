<?php

namespace App\Services;

class WeatherService
{
    private $api_key;
    private $omskLat;
    private $omskLon;

    /**
     * WeatherService constructor.
     */
    public function __construct()
    {
        $this->api_key = config('weather.api_key');
        $this->omskLat = config('weather.omsk_lat');
        $this->omskLon = config('weather.omsk_lon');
    }

    /**
     * Gets the weather data from yandex
     * @param $client
     * @return array|bool
     */
    public function getWeatherData($client){
        $res = $client->request(
            'GET',
            'https://api.weather.yandex.ru/v2/forecast/?lat='. $this->omskLat . '&lon='. $this->omskLon,
            [
                'headers' => [
                    'X-Yandex-API-Key' => $this->api_key,
                ],
                'verify' => false
            ]
        );
        if ($res->getStatusCode() == 200){
            $weatherData = json_decode($res->getBody()->getContents());

            return array(
                'weatherIcon' => $weatherData->fact->icon,
                'temp' => $weatherData->fact->temp,
                'feelsLike' => $weatherData->fact->feels_like,
                'weatherDesc' => $weatherData->fact->condition,
                'windSpeed' => $weatherData->fact->wind_speed,
                'windDegree' => $weatherData->fact->wind_dir,
                'pressure' => $weatherData->fact->pressure_mm,
                'humidity' => $weatherData->fact->humidity
            );
        }

        return false;
    }

}
