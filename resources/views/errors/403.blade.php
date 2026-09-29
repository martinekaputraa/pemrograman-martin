<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Akses Ditolak - POS Barokah Mart</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full text-center">
        <!-- Icon Peringatan -->
        <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 text-red-600 rounded-full mb-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-2">403</h1>
        <h2 class="text-xl font-semibold text-red-600 mb-4">Akses Ditolak</h2>
        
        <p class="text-gray-600 mb-6">
            {{ $exception ?? 'Anda tidak memiliki hak akses ke halaman ini.' }}
        </p>

        <a href="{{ route('dashboard') }}" class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-md font-medium hover:bg-indigo-700 transition">
            Kembali ke Dashboard
        </a>
    </div>
</body>
</html>