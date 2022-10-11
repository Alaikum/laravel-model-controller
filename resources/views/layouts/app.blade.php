<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('/css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <title>@yield('metaTitle')</title>
</head>
<body>
    

        {{-- <header>@yield('header','header Non Trovato')</header> --}}
  

    <main>
        @yield('content')
    </main>

    
    {{-- <footer>@yield('footer','Footer Non Trovato')</footer> --}}


</body>
</html>