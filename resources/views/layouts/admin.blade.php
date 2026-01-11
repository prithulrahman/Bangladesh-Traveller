<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Admin Panel' }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans bg-slate-50">
    <!-- Navbar -->
    <x-admin_navbar />

    <div class="flex">
        <!-- Sidebar -->
        <x-admin_sidebar />
        <!-- Main Content -->
        <main class="flex-1 overflow-auto">
            <div class="p-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Footer -->
    {{-- <x-admin_footer /> --}}

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>