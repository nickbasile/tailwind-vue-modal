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
<div id="app" class="lg:h-screen flex flex-col items-center justify-center bg-teal-lightest font-sans overflow-y-scroll">
    <h1 class="text-center my-8 text-grey-darkest">Try Out These Modals</h1>
    <modal-tester-component></modal-tester-component>
    <div class="my-8 text-center">
        <p class="text-xs mb-1">
            Thank you <a class="text-blue-dark no-underline" href="https://vuejs.org/v2/guide/" target="_blank">Vue.js</a>, <a class="text-blue-dark no-underline" href="https://tailwindcss.com/" target="_blank">Tailwind CSS</a>, and <a class="text-blue-dark no-underline" href="http://khaledipsum.com/" target="_blank">Khaled Ipsum!</a>
        </p>
        <p class="text-xs">
            Learn how to build this on <a class="text-blue-dark no-underline" href="https://nick-basile.com/blog/post/build-a-customizable-vuejs-modal-with-tailwind-css" target="_blank">Nick Basile's Blog</a>.
        </p>
    </div>
    <modal-component></modal-component>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
