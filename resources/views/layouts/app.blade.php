<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('/css/app.css')}}">
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