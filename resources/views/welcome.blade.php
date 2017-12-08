<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="h-screen flex flex-col items-center justify-center bg-teal-lightest font-sans">
    <h1 class="text-center mb-8">Try Out These Modals</h1>
    <div class="flex flex-col lg:flex-row lg:justify-between lg:w-3/4">
        <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-teal hover:bg-teal-dark" onclick="vueModal().show()">Default Modal</button>
        <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-green hover:bg-green-dark" onclick="vueModal().success().show()">Success Modal</button>
        <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-red hover:bg-red-dark" onclick="vueModal().error().show()">Error Modal</button>
        <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-blue hover:bg-blue-dark" onclick="vueModal().info().show()">Info Modal</button>
        <button class="flex-no-shrink text-white py-2 px-4 mb-2 lg:mb-0 rounded bg-yellow hover:bg-yellow-dark" onclick="vueModal().warning().show()">Warning Modal</button>
    </div>
    <modal-component></modal-component>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
