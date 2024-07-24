<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_Name') }}</title>
    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />

</head>

<body>
    @if (Auth::check())
        <script>
            window.Laravel = {
                !!json_encode([
                    'isLoggedIn' => true,
                    'user' => Auth::user(),
                ])
            }
        </script>
    @else
        <script>
            window.Laravel = {
                !!json_encode([
                    'isLoggedIn' => false,
                ])
            }
        </script>
    @endif


    <div id="app">
        <!-- Your Vue.js App -->
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    </head>

</body>

</html>
