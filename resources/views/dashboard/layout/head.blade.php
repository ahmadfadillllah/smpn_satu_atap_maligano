<!doctype html>
<html lang="en">
<head>
    <title>{{ $title }} || {{ config('app.name') }} </title><!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Phoenixcoded"><!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('logo') }}/tut-wuri.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/plugins/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/inter/inter.css" id="main-font-link">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/phosphor/duotone/style.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/feather.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/fonts/material.css">
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/style.css" id="main-style-link">
    <script src="{{ asset('dashboard') }}/assets/js/tech-stack.js"></script>
    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/style-preset.css">
    {{-- Sweetalert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
</head>
<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr"
    data-pc-theme_contrast="" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    @include('notification.sweetalert')
