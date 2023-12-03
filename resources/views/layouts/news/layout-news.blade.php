<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="Liliana Model Agency is a new style modeling agency with a wide range of talents, centered on foreign models. We provide high-quality and detailed services with the first priority being to build trust with customers, models, and all people involved in the project.">
    <meta name="theme-color" content="#0D0D0D">
    <meta name="robots" content="noindex">
    <title>News - Liliana</title>

    <!-- start styles -->
    <link rel="stylesheet" href="/storage/assets/css/style.css">
    <link rel="stylesheet" href="/storage/assets/css/icon-style.min.css">
    <link rel="icon" type="image/png" sizes="48x48" href="/assets/img/favicon.ico">
    <link rel="stylesheet" href="/storage/assets/css/swiper-bundle.min.css">
    <!-- end styles -->
</head>

<body class="page page-news">

@include('layouts.news.header-news')

@yield('content-news')

@include('loader-site')

@include('footer-site')

<!-- start scripts -->
<script src="/storage/assets/js/env.js"></script>
<script src="/storage/assets/js/lib/jQuery.min.js"></script>
<script src="/storage/assets/js/lib/lazyload.min.js"></script>
<script src="/storage/assets/js/lib/swiper-bundle.min.js"></script>
<script src="/storage/assets/js/pro-validation.js"></script>
<script src="/storage/assets/js/popup.js"></script>
<script src="/storage/assets/js/component.js"></script>
<script src="/storage/assets/js/scripts.js"></script>

</body>

</html>
