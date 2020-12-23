<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Core Buster') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/report.css') }}">
</head>
<body class="">

<div id="app">
    omg joe
</div>

<script
    src="https://js.sentry-cdn.com/7bd3b1ddb5734f02a803ea3a6aba2e64.min.js"
    crossorigin="anonymous" data-lazy="no">
</script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
