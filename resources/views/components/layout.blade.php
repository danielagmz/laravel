<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @stack('scripts')
    @stack('styles')
</head>

<body class="{{ $bodyClass }}">

  <div class="container">
    @if (!Auth::check())
        <x-shared.landing_nav />
    @else
        <x-nav />
    @endif
    {{ $slot }}
  </div>
</body>

</html>
