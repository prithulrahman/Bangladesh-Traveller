<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans bg-slate-50">
    
    <!-- Navbar -->
    <x-navbar />

    {{ $slot }}

    <!-- Footer -->
    <x-footer />

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>