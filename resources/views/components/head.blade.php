<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>DIVA</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])

@yield('styles')