<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Country Info</title>
    <link href="/resources/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</head>
<body class="mx-auto bg-blue-200 bg-gradient-to-tr from-blue-200 to-blue-400 min-h-screen pt-8">
<div class="mt-8 mb-8">
    <div class="mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden" style="width: 550px">
        <div class="current-weather relative">
            <div class="flex-items-center sm:justify-between px-4 py-10">
                <div class="row flex items-center">
                    <div>
                        <div class="text-2xl font-semibold cols-12">
                            Country: {{$countryInfo[0]['name']['official']}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="future-weather dark:bg-gray-800 px-4 space-y-8 pt-5">
            <div class="row pb-3">
                <div class="cols-12"><h3 style="font-size: 23px">Population: {{$countryInfo[0]['population']}}</h3>
                </div>
            </div>
            <div class="row pb-3">
                <div class="cols-12"><h3 style="font-size: 23px">Continent: {{$countryInfo[0]['continents'][0]}}</h3>
                </div>
            </div>
            <div class="row pb-3">
                <div class="cols-12"><h3 style="font-size: 23px">TimeZone: {{$countryInfo[0]['timezones'][0]}}</h3>
                </div>
            </div>
            <div class="row pb-3">
                <img src="{{$countryInfo[0]['flags']['png']}}" alt="flag"/>
            </div>
            <div class="row pb-3">
                @if($countryInfo[0]['landlocked'] === false )
                    <div class="cols-12"><h3 style="font-size: 23px">{{$countryInfo[0]['name']['official']}} is not
                            landlocked</h3>
                        @endif

                        @if($countryInfo[0]['landlocked'] === true)
                            <div class="cols-12"><h3 style="font-size: 23px">{{$countryInfo[0]['name']['official']}} is
                                    landlocked</h3>
                                @endif
                            </div>
                    </div>
            </div>
        </div>

</body>
</html>
