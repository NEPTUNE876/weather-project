<body class="mx-auto bg-blue-200 bg-gradient-to-tr from-blue-200 to-blue-400 min-h-screen">
<div class="mt-8 mb-8">
    <div class="mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden" style="width: 550px">
        <div class="current-weather relative">
            <div class="flex-items-center sm:justify-between px-4 py-10">
                <div class="flex items-center">
                    <div>
                        <div class="text-5xl font-semibold">{{round($currentWeather['main']['temp'])}}&#176;C</div>
                        <div class="text-gray-400">Feels Like {{round($currentWeather['main']['feels_like'])}}&#176;C
                        </div>
                    </div>
                    <div class="ml-5">
                        <div class="font-semibold">{{ucfirst($currentWeather['weather'][0]['description'])}}</div>
                        <div class="text-gray-400">Colchester, UK</div>
                    </div>
                </div>
                <div class="absolute right-0 mr-2 bottom-0 mt-10" style="margin-top: -5px">
                    <img src="http://openweathermap.org/img/wn/{{$currentWeather['weather'][0]['icon']}}@4x.png"
                         style="transform: translateY(23px);" alt="icon"/>
                </div>
            </div>
            <button class="absolute right-0 bottom-0 mb-2 mr-2 text-xs">Toggle</button>
        </div>
        <ul class="future-weather dark:bg-gray-800 px-4 space-y-8 pt-10">
            @foreach($futureWeather['list'] as $weather )
                <li class="items-center">
                    <div class="row">
                        <div
                            class="col-2 text-gray-400">{{strtoupper(\Carbon\Carbon::createFromTimestamp($weather['dt'])->format('D @ H:i')) }}</div>
                        <div class="col-3 ">
                            <img src="http://openweathermap.org/img/wn/{{$weather['weather'][0]['icon']}}@4x.png"
                                 style="transform: translateY(-40px);" alt="icon"/>
                        </div>
                        <div class="col-5 flex-items-center">
                            <div>{{ucfirst($weather['weather'][0]['description'])}}</div>
                        </div>
                        <div class="col-2 text-right text-xs" style="margin-top: -5px">
                            <div style="padding-bottom: 5px">H: {{round($weather['main']['temp_max'])}}&#176;C</div>
                            <div style="padding-bottom: 5px">L: {{round($weather['main']['temp_min'])}}&#176;C</div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
