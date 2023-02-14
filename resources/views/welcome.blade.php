<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Weather App</title>
    <link href="/resources/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gridTemplateColumns: {
                            'weather': '3fr 6fr 3fr',
                        }
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>
</head>

<body class="mx-auto bg-blue-200 bg-gradient-to-tr from-blue-200 to-blue-400 min-h-screen">
<div class="mt-8">
    <div class="mx-auto bg-gray-900 text-white text-sm rounded-lg overflow-hidden" style="width: 550px">
        <div class="current-weather flex items-center sm:justify-between px-4 py-6">
            <div class="flex items-center">
                <div>
                    <div class="text-5xl font-semibold">4&#176;C</div>
                    <div class="text-gray-400 font-semibold mt-2">Feels like 5&#176;C</div>
                </div>
                <div class="ml-5">
                    <div class="font-semibold">Overcast</div>
                    <div class="text-gray-400">Colchester, England</div>
                </div>
            </div>
            <div>icon</div>
        </div>
        <ul class="future-weather dark:bg-gray-800 px-4 py-6 space-y-8">
            <li class="items-center">
                <div class="row">
                    <div class="col-2 text-gray-400">TUE</div>
                    <div class="col-1 flex-items-center">
                        <div>icon</div>
                    </div>
                    <div class="col-7 flex-items-center">
                        <div>Clear Sky</div>
                    </div>
                    <div class="col-2 text-right text-xs" style="margin-top: -5px">
                        <div>4&#176;C</div>
                        <div>4&#176;C</div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-2 text-gray-400">TUE</div>
                    <div class="col-1 flex-items-center">
                        <div>icon</div>
                    </div>
                    <div class="col-7 flex-items-center">
                        <div>Clear Sky</div>
                    </div>
                    <div class="col-2 text-right text-xs" style="margin-top: -5px">
                        <div>4&#176;C</div>
                        <div>4&#176;C</div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-2 text-gray-400">TUE</div>
                    <div class="col-1 flex-items-center">
                        <div>icon</div>
                    </div>
                    <div class="col-7 flex-items-center">
                        <div>Clear Sky</div>
                    </div>
                    <div class="col-2 text-right text-xs" style="margin-top: -5px">
                        <div>4&#176;C</div>
                        <div>4&#176;C</div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-2 text-gray-400">TUE</div>
                    <div class="col-1 flex-items-center">
                        <div>icon</div>
                    </div>
                    <div class="col-7 flex-items-center">
                        <div>Clear Sky</div>
                    </div>
                    <div class="col-2 text-right text-xs" style="margin-top: -5px">
                        <div>4&#176;C</div>
                        <div>4&#176;C</div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-2 text-gray-400">TUE</div>
                    <div class="col-1 flex-items-center">
                        <div>icon</div>
                    </div>
                    <div class="col-7 flex-items-center">
                        <div>Clear Sky</div>
                    </div>
                    <div class="col-2 text-right text-xs" style="margin-top: -5px">
                        <div>4&#176;C</div>
                        <div>4&#176;C</div>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</div>


</body>
</html>
















