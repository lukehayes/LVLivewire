<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->

        <!-- Styles -->
        <script type="text/javascript" src="{{asset('tailwind.min.js') }}"></script>
    </head>

    <body class="bg-zinc-200 container mx-auto">
        @yield("dashboard-main")
    </body>

</html>
