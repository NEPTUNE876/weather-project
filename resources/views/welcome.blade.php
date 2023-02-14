<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Weather App</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="/resources/css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
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
                    <div class="col-8 flex-items-center">
                        <div>icon</div>
                        <div>Clear Sky</div>
                    </div>
                    <div class="col-2 text-right text-xs">
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
















