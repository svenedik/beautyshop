<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Laravel')}}</title>  
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('favicons/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        @yield('aimeos_header')
        <!-- Fonts -->
        <!--@ yield('aimeos_styles')-->
        <!-- Styles -->
        <link href="{{mix('css/app.css')}}" rel="stylesheet">
        <script async src="{{url('//piratesquad.api.sociaplus.com/partner.js')}}"></script>

        <!-- ChatWhale -->
        <script src="{{url('//chatwhale.io/widgets/v1/39.js')}}" async="async"> </script>
    </head>
    <body>
        @include('partials.header')
        <div class="container padding-0">
            <div class="col-xs-12 col-md-10 col-md-offset-1 padding-0">
                @yield('aimeos_stage')
                @yield('aimeos_nav')
                @yield('aimeos_aside')
                @yield('aimeos_body')
                @yield('content')
            </div>
        </div>        
        @include('partials.footer')
        <script src="{{mix('js/app.js')}}"></script>
        <!--@ yield('aimeos_scripts') -->       
        @yield('inline-scripts')   
    </body>
</html>