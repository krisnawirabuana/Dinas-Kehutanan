<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

        <title>Dinas Kehutanan Provinsi Jawa Timur</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@latest/dist/flowbite.min.css" />
    </head>
    <body>
        <div class="flex w-full h-screen">
            <div class="w-3/5 bg-red-900">
                <img class="h-screen object-cover" src="https://learnenglishteens.britishcouncil.org/sites/teens/files/styles/article/public/field/image/rs930_135120665-low.jpg?itok=g5LI5W4C" alt="auth-image">
            </div>
            <div class="w-2/5 flex flex-wrap items-center p-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>