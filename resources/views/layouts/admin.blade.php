<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
</head>

<body class="bg-[#ddd] flex min-h-screen font-sans text-[#313647]">

    <!-- ================= SIDEBAR ================= -->
    <aside class="w-64 bg-[#313647] text-white flex flex-col shadow-lg">

        <!-- Brand -->
        <div class="px-6 py-5 border-b border-white/10">
            <div class="flex items-center gap-3">

                <!-- Logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="SekopSekop Logo" class="w-10 h-10 object-contain">

                <!-- Text -->
                <div>
                    <div class="text-lg font-bold text-[#F28123] leading-tight">
                        SekopSekop
                    </div>
                    <div class="text-xs opacity-70">
                        Admin Panel
                    </div>
                </div>

            </div>
        </div>

        <!-- Menu -->
        <nav class="flex-1 px-4 py-6 space-y-2 text-sm">

            <!-- Dashboard -->
            <a href="/admin/dashboard"
                class="flex items-center gap-2 px-3 py-2 rounded transition
           {{ request()->is('admin/dashboard') ? 'bg-[#F28123] text-white' : 'hover:bg-[#F28123]/80' }}">
                <i class="fas fa-chart-bar"></i><span>Dashboard</span>
            </a>

            <!-- Produk -->
            <a href="{{ route('admin.products.index') }}"
                class="flex items-center gap-2 px-3 py-2 rounded transition
           {{ request()->is('admin/products*') ? 'bg-[#F28123] text-white' : 'hover:bg-[#F28123]/80' }}">
                <i class="fas fa-boxes"></i><span>Produk</span>
            </a>

            <!-- Kategori -->
            <a href="{{ route('admin.categories.index') }}"
                class="flex items-center gap-2 px-3 py-2 rounded transition
           {{ request()->is('admin/categories*') ? 'bg-[#F28123] text-white' : 'hover:bg-[#F28123]/80' }}">
                <i class="fas fa-window-restore"></i><span>Kategori</span>
            </a>

            <!-- News -->
            <a href="{{ route('admin.news.index') }}"
                class="flex items-center gap-2 px-3 py-2 rounded transition
           {{ request()->is('admin/news*') ? 'bg-[#F28123] text-white' : 'hover:bg-[#F28123]/80' }}">
                <i class="fas fa-newspaper"></i><span>News</span>
            </a>

            <!-- Pesanan -->
            <a href="#" class="flex items-center gap-2 px-3 py-2 rounded transition hover:bg-[#F28123]/80">
                <i class="fas fa-truck-loading"></i><span>Pesanan</span>
            </a>

            <!-- User -->
            <a href="#" class="flex items-center gap-2 px-3 py-2 rounded transition hover:bg-[#F28123]/80">
                <i class="fas fa-user"></i><span>User</span>
            </a>

        </nav>

        <!-- Logout -->
        <div class="px-4 py-4 border-t border-white/10">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full flex items-center gap-2 px-3 py-2 rounded
                           bg-[#F28123] hover:bg-red-600 transition text-white">
                    <i class="fas fa-door-open"></i><span>Logout</span>
                </button>
            </form>
        </div>

    </aside>
    <!-- =============== END SIDEBAR =============== -->


    <!-- ================= MAIN CONTENT ================= -->
    <div class="flex-1 flex flex-col">

        <!-- Topbar -->
        <header class="bg-white px-6 py-4 flex justify-between items-center shadow-sm border-b border-[#ddd]">
            <h1 class="text-xl font-semibold text-[#313647]">
                @yield('page-title')
            </h1>

            <div class="text-sm">
                Halo, <span class="font-semibold text-[#F28123]">Admin</span>
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
