<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-gray-900 text-white min-h-screen">
        <div class="p-6 font-bold text-xl bg-orange-600">
            Admin Panel
        </div>
        <nav class="p-4 space-y-3">
            <a href="/admin/dashboard" class="block hover:bg-gray-700 p-2 rounded">
                📊 Dashboard
            </a>
            <a href="{{ route('admin.products.index')}}" class="block hover:bg-gray-700 p-2 rounded">
                🧱 Produk
            </a>
            <a href="{{ route('admin.categories.index')}}" class="block hover:bg-gray-700 p-2 rounded">
                🗂️ Kategori
            </a>
            <a href="#" class="block hover:bg-gray-700 p-2 rounded">
                📦 Pesanan
            </a>
            <a href="#" class="block hover:bg-gray-700 p-2 rounded">
                👤 User
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left text-red-400 hover:bg-gray-700 p-2 rounded">
                    🚪 Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">@yield('page-title')</h1>
            <span class="text-gray-600">
                Halo, <b>Admin</b>
            </span>
        </div>

        @yield('content')
    </main>

</body>

</html>
