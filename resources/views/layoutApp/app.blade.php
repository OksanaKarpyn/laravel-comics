<!-- lamia paggina in assoluto principale  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    <!-- includiamo nav header per le tutte paggine  -->
    @include('partials.header')

    <main>
        @yield( 'content' )
    </main>
    <!-- includiamo il footer per tutte le pagine -->


    @include('partials.footer')

</body>

</html>