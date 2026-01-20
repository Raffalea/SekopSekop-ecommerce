@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('page-title', 'Dashboard')

@section('content')

<!-- ================= STATISTIK ================= -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <div class="bg-white rounded-xl shadow-sm p-5 border border-[#ece7e1]">
        <p class="text-sm mb-1">Total Produk</p>
        <h3 class="text-3xl font-bold text-[#7a4f2f]">120</h3>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 border border-[#ece7e1]">
        <p class="text-sm mb-1">Pesanan</p>
        <h3 class="text-3xl font-bold text-[#7a4f2f]">45</h3>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 border border-[#ece7e1]">
        <p class="text-sm mb-1">Pendapatan</p>
        <h3 class="text-3xl font-bold text-[#a2886d]">
            Rp 12.500.000
        </h3>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-5 border border-[#ece7e1]">
        <p class="text-sm mb-1">User</p>
        <h3 class="text-3xl font-bold text-[#7a4f2f]">80</h3>
    </div>

</div>

<!-- ================= PESANAN TERBARU ================= -->
<div class="bg-white rounded-xl shadow-sm border border-[#ece7e1]">

    <div class="px-6 py-4 border-b border-[#ece7e1]">
        <h2 class="text-lg font-semibold text-[#7a4f2f]">
            Pesanan Terbaru
        </h2>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-[#ece7e1]">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Nama</th>
                    <th class="px-6 py-3">Total</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>
            <tbody>

                <tr class="hover:bg-[#ece7e1]/70 transition">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4 font-medium text-[#7a4f2f]">
                        Rifki
                    </td>
                    <td class="px-6 py-4">
                        Rp 650.000
                    </td>
                    <td class="px-6 py-4">
                        <span class="inline-block px-3 py-1 text-xs font-semibold
                                   rounded-full bg-[#a2886d]/20 text-[#7a4f2f]">
                            Selesai
                        </span>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection
