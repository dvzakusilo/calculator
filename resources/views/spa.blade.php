<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <meta name="keywords" content="создание сайтов, bitrix, битрикс, разработка сайтов, сделать сайт, laravel, vue">
        <meta name="description" content="Разработка и создание сайтов любой сложности по низким ценам">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="/images/index/favicon.ico">
    </head>
    <body>
        <div id="app"></div>
        <script>
            window.config = @json([
                'appName' => config('app.name'),
                'deviceName' => 'spa'
            ])
        </script>
        <script src="{{ asset("js/app.js") }}" charset="utf-8"></script>
    </body>
</html>
