<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Services\WeatherService;

class WeatherController extends Controller
{

    /**
     * Displays weather page
     * @param WeatherService $weatherService
     * @param Client $client
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(WeatherService $weatherService, Client $client)
    {
        $weatherData = $weatherService->getWeatherData($client);

        return view('weather', $weatherData);
    }



}
