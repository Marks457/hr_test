@extends('mainLayout')

@section('title')Погода@endsection
@section('stylesheets')

@endsection

@section('content')
    <div class="main_wrapper">
        <div class="container d-flex flex-column justify-content-between">
            <div class="row">
                <form action="{{ route('index') }}" id="city_degrees_form" method="POST" class="col-12">
                    <div class="row flex-wrap">
                        <div class="col-5">
                            <div class="row d-flex flex-column justify-content-start">
                                <div class="city_info">
                                    <div class="curr_city">
                                        Омск
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row d-flex flex-wrap justify-content-center">
                        <div class="col-6 temp_container">
                            <div class="row flex-column justify-content-center">
                                <div class="temp_img">
                                    <img class="weather-img" src="https://yastatic.net/weather/i/icons/blueye/color/svg/{{ $weatherIcon }}.svg" alt="Weather img" />
                                </div>
                                <div class="temp_degrees d-flex justify-content-center">{{ $temp }}°</div>
                                <div class="temp_desc"><p>{{ $weatherDesc }}</p></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-between flex-wrap">
                        <div class="wind">
                            <p class="wind_heading bottom_headings">Ветер</p>
                            <p class="wind_desc bottom_descs">{{ $windSpeed }} м/с, {{ $windDegree }}</p>
                        </div>
                        <div class="pressure">
                            <p class="pressure_heading bottom_headings">Давление</p>
                            <p class="pressure_desc bottom_descs">{{ $pressure }} мм рт. ст.</p>
                        </div>
                        <div class="humidity">
                            <p class="humidity_heading bottom_headings">Влажность</p>
                            <p class="humidity_desc bottom_descs">{{ $humidity }}%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')

@endsection
