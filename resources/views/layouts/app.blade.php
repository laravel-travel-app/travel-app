<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="shortcut icon" sizes="114x114" href="{{ asset('./favicon.ico') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
</head>

<body class="font-font-primary block">
    <div class="fixed right-5 bottom-10 bg-green-500  rounded-lg z-50">
        <div class="py-2 px-5 text-clr-smooth-white leading-tight">
            <a class="flex items-center space-x-2" href="https://wa.link/4ti0bp">
                <i class="uil-whatsapp text-xl"></i>
                <h2>Pesan Sekarang</h2>
            </a>
        </div>
    </div>
    <header>
        <x-navigation />
    </header>
    <main>
        {{ $slot }}
    </main>
    <x-footer />
</body>

</html>
