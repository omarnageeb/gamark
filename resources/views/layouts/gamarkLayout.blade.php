<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>النقابة العامة للجمارك</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/normalize.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/style.css')}}"/>
         <link rel="stylesheet" href="{{asset('assets/front/css/dbstyle.css')}}">
        <script src="{{asset('assets/front/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('assets/front/js/respond.min.js')}}"></script>
          <link rel="stylesheet" type="text/css" href="{{asset('assets/front/css/slick.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/front/slick-theme.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Amiri|Harmattan&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&family=IBM+Plex+Sans+Arabic:wght@300&display=swap" rel="stylesheet">





    </head>

    <body>



        @include('gamarkFront.includes.header')

        @yield('content')

        @include('gamarkFront.includes.footer')

         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script  src="{{asset('assets/css/front/js/jquery-3.3.1.min.js')}}"></script>
        <script  src="{{asset('assets/css/front/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script  src="{{asset('assets/css/front/js/slick.min.js')}}"></script>




  </body>

</html>
