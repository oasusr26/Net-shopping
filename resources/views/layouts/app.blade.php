<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ネットショッピング</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        @include('commons.navbar')
        
        <div class="container">
            
            @yield('content')
        </div>
        
        @include('commons.footer')
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>