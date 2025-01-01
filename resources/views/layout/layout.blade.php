<!doctype html>
<html class="sidebar-light sidebar-left-big-icons">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">
    @include('layout.css')

    @include('layout.js1')
</head>

<body>
    <section class="body">
        <!-- start: header -->
        @include('layout.nav')
        <!-- end: header -->
        <div class="inner-wrapper">
            <!-- start: sidebar -->
            @include('layout.aside')
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                @yield('content')
            </section>
        </div>
        @include('layout.aside2')
    </section>
    @include('layout.js2')
    @include('sweetalert::alert')
</body>

</html>
