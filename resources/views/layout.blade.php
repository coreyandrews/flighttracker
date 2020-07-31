<!DOCTYPE HTML>
<html>

<head>
    <title>Flight Tracker</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

    <!-- Page Wrapper -->
    <div id="page-wrapper">
    
        <!-- Laravel Includes/Yields -->
        @include('header')
        @yield('content')
        @include('footer')

        <!-- Scripts -->
        <script src="/js/jquery.min.js"></script>
        <script src="/js/jquery.scrollex.min.js"></script>
        <script src="/js/browser.min.js"></script>
        <script src="/js/breakpoints.min.js"></script>
        <script src="/js/util.js"></script>
        <script src="/js/main.js"></script>

    </div>

</body>
</html>