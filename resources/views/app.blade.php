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
        @yield('aimeos_header')
        <!--@ yield('aimeos_styles')-->
        <!-- Styles -->
        <link href="{{mix('css/app.css')}}" rel="stylesheet">
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