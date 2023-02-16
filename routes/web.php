<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $location = 'Colchester, UK';
    $apiKey = env('API_KEY');
    $response = \Illuminate\Support\Facades\Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric");
    $responseFuture = \Illuminate\Support\Facades\Http::get("https://api.openweathermap.org/data/2.5/forecast?q={$location}&cnt=5&appid={$apiKey}&units=metric");
    return view('welcome', [

        'currentWeather' => $response->json(),

        'futureWeather' => $responseFuture->json(),

    ]);
});



Route::get('/countries', function () {

    $country = 'Ireland';
    $response = \Illuminate\Support\Facades\Http::get("https://restcountries.com/v3.1/name/{$country}?fullText=true");
    dump($response->json());


    return view('countries', [
        'countryInfo' => $response->json(),
    ]);
});
