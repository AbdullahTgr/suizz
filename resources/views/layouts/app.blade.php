<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
        <meta name="apple-mobile-web-app-capable" content="yes" />
    
        <!-- Page Title -->
        <title>New Template — Slides 4.0.5 Template Generator</title>
    
        <!-- Compressed Styles -->
        <link href="{{asset('css/slides.min.css')}}" rel="stylesheet" type="text/css">
    
        <!-- Custom Styles -->
        <!-- <link href="css/custom.css" rel="stylesheet" type="text/css"> -->
    
        <!-- jQuery 3.3.1 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
        <!-- Compressed Scripts -->
        <script src="{{asset('js/slides.min.js')}}" type="text/javascript"></script>
    
        <!-- Custom Scripts -->
        <!-- <script src="js/custom.js" type="text/javascript"></script> -->
    
        <!-- Fonts and Material Icons -->
        <link rel="stylesheet" as="font" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700|Material+Icons"/>
       
</head>

    @yield('navbar')
    <body>
    @yield('body')
    </body>
    @yield('footer')
    @yield('scripts')

</html>
