<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#ece7e1] flex min-h-screen font-sans text-[#867c6d]">

<!-- ================= SIDEBAR ================= -->
<aside class="w-64 bg-[#7a4f2f] text-[#ece7e1] flex flex-col">

    <!-- Brand -->
    <div class="px-6 py-5 border-b border-[#947757]">
        <div class="text-xl font-bold tracking-wide">🧱 SekopSekop</div>
        <div class="text-sm opacity-90">Admin Panel</div>
    </div>

    <!-- Menu -->
    <nav class="flex-1 px-4 py-6 space-y-2 text-sm">

        <!-- Dashboard -->
        <a href="/admin/dashboard"
           class="flex items-center gap-2 px-3 py-2 rounded transition
           {{ request()->is('admin/dashboard') ? 'bg-[#947757] text-white' : 'hover:bg-[#947757]/80' }}">
            📊 <span>Dashboard</span>
        </a>

        <!-- Produk -->
        <a href="{{ route('admin.products.index') }}"
           class="flex items-center gap-2 px-3 py-2 rounded transition
           {{ request()->is('admin/products*') ? 'bg-[#947757] text-white' : 'hover:bg-[#947757]/80' }}">
            🧱 <span>Produk</span>
        </a>

        <!-- Kategori -->
        <a href="{{ route('admin.categories.index') }}"
           class="flex items-center gap-2 px-3 py-2 rounded transition
           {{ request()->is('admin/categories*') ? 'bg-[#947757] text-white' : 'hover:bg-[#947757]/80' }}">
            🗂️ <span>Kategori</span>
        </a>

        <!-- Pesanan -->
        <a href="#"
           class="flex items-center gap-2 px-3 py-2 rounded transition hover:bg-[#947757]/80">
            📦 <span>Pesanan</span>
        </a>

        <!-- User -->
        <a href="#"
           class="flex items-center gap-2 px-3 py-2 rounded transition hover:bg-[#947757]/80">
            👤 <span>User</span>
        </a>

    </nav>

    <!-- Logout -->
    <div class="px-4 py-4 border-t border-[#947757]">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit"
                    class="w-full flex items-center gap-2 px-3 py-2 rounded
                           text-red-200 hover:bg-[#947757]/80 transition">
                🚪 <span>Logout</span>
            </button>
        </form>
    </div>

</aside>
<!-- =============== END SIDEBAR =============== -->


<!-- ================= MAIN CONTENT ================= -->
<div class="flex-1 flex flex-col">

    <!-- Topbar -->
    <header class="bg-white px-6 py-4 flex justify-between items-center shadow-sm">
        <h1 class="text-xl font-semibold text-[#7a4f2f]">
            @yield('page-title')
        </h1>

        <div class="text-sm">
            Halo, <span class="font-semibold text-[#7a4f2f]">Admin</span>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</div>
<!-- =============== END MAIN CONTENT =============== -->

</body>
</html>
