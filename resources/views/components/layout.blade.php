<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="{{ $bodyClass }}">

  <div class="container">
    @if ($anonimo)
        <x-shared.landing_nav />
    @else
        <x-nav />
    @endif
    {{ $slot }}
  </div>
</body>

</html>
