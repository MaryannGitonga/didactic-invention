<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Lucid Micro</title>
</head>
<body>
    <div class="fixed top-0 left-0 px-6 py-4">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-indigo-700">Lucid App 1</h3>
            </div>
        </div>
    </div>
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a href="{{ route('show') }}" class="text-base text-gray-700 dark:text-indigo-700 underline mr-8">Items</a>
        <a href="{{ route('index') }}" class="text-base text-gray-700 dark:text-indigo-700 underline">Create Item</a>
    </div>
    @yield('content')
</body>
</html>
