<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <meta name="keywords" content="создание сайтов, сайт под ключ, разработка веб сайтов, bitrix, bitrix ru, битрикс, сайт на битрикс, битрикс товары, разработка сайтов, сделать сайт, laravel, vue">
    <meta name="description" content="Разработка и создание сайтов любой сложности по низким ценам">
    <meta property="og:image"
          content="https://web-vector.ru/images/index/top_image.png">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="670">
    <meta name="twitter:image"
          content="https://web-vector.ru/images/index/top_image.png">
    <meta name="vk:image"
          content="https://web-vector.ru/images/index/top_image.png">
    <meta property="og:image" content="https://web-vector.ru/images/index/top_image.png">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">
    <meta property="og:title"
          content="Разработка и создание сайтов любой сложности по низким ценам">
    <meta property="og:description"
          content="Разработка и создание сайтов любой сложности по низким ценам">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/index/favicon.ico">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(91345060, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/91345060" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
@if (Session::get('success') )
    <!-- Small modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Сообщение отправлено</button>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
@endif
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
