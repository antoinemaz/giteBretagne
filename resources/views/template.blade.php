<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gite de Bretagne</title>

        <link rel="stylesheet" href="{{ URL::asset('boostrap/css/bootstrap.min.css') }}" />
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('boostrap/js/bootstrap.min.js') }}"></script>

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    </head>
    <body>

        <div id="container" class="container">
            @section('banner')
                <div class="div-banner">
                    <img class="banner-img" src="{{URL::asset('images/test7.png')}}" />
                </div> 
            @show

            @section('navigation')

                <nav class="navigation">
                    <ul class="nav nav-justified">
                        <li class="active">
                             <a href="{{URL::route('index')}}">Accueil</a>
                         </li>
                         <li class="active">
                             <a href="#">La Longère</a>
                         </li>
                         <li class="active">
                             <a href="#">Activités</a>
                         </li>
                         <li class="active">
                             <a href="{{URL::route('tarifs')}}">Tarifs</a>
                         </li>
                        <li class="active">
                             <a href="{{URL::route('contact')}}">Contact</a>
                         </li>

                    </ul>
                </nav>

            @show
            <div class="content">
                @yield('content')
            </div>

            @section('footer')
                <div class="footer">
                     Appelez nous au 06.58.65.87.61
                </div>
            @show
        </div>
    </body>
</html>
