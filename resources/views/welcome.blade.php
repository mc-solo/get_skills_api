<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @endif
</head>



<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="min-h-screen bg-gradient-to-tr from-gray-900 to-gray-800">
        <div class="flex items-center justify-center h-full text-white">
          <h1 class="text-4xl font-bold">Welcome to My Landing Page</h1>
        </div>
    </div>
      
   

</body>

</html>