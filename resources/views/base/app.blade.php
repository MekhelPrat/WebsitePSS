<html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        a,
        li,
        p {
            font-family: 'Raleway', sans-serif;
        }
        
        .nav-link {
            color: #FFFFFF;
            /* Warna teks default */
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #63b3ed;
            /* Warna teks saat di-hover */
        }

        .nav-link:focus,
        .nav-link:active,
        .nav-link.active {
            color: #4299e1;
            /* Warna teks saat ditekan/aktif */
        }
    </style>
</head>

<body class="bg-black">
    @yield('header')
    @yield('content')
    @yield('footer')
</body>

</html>

@yield('script')