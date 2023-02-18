<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- bootstrap css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    {{-- google font css --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">
    {{-- main css file --}}
    <style>
        * {
            font-family: 'Playfair Display', serif;
            color: #000000;
            font-size: 20px;
        }

        a {
            color: #000000 !important;
        }
    </style>
</head>

<body>
    {{-- app start --}}
    <main id="app"></main>
    {{-- app end --}}

    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- main js file --}}
    @vite('resources/js/app.js')
</body>

</html>
