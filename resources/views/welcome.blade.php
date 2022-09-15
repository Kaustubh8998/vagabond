<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}">
        <script type="text/javascript">window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
    </head>
    <body>

        <div id="app">
            <vagabond>
                
            </vagabond>
        </div>
        
        <script type="text/javascript">
            window.DomainName = '{{ env('APP_URL') }}';
        </script>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
