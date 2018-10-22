<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>activePotato</title>
        
        @include ('myLayouts.styles')
    </head>

    <body class="index-page sidebar-collapse">
    	@include ('myLayouts.nav')

    	@yield('content')

    </body>
    	@include ('myLayouts.footer')
</html>
