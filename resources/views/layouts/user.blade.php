<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-orange-600 text-white px-6 py-4 flex justify-between">
        <h1 class="font-bold text-xl">Toko Material</h1>
        <div class="space-x-4">
            <a href="/user/dashboard">Dashboard</a>
            <a href="/products">Produk</a>
            <a href="/cart">Keranjang</a>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button type="submit" class="text-red-200 hover:underline">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>

</body>

</html>
