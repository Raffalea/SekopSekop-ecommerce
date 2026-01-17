@extends('layouts.admin')

@section('title', 'Dashboard Admin')
@section('page-title', 'Dashboard')

@section('content')

<!-- Statistik -->
<div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-gray-500">Total Produk</h3>
        <p class="text-2xl font-bold">120</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-gray-500">Pesanan</h3>
        <p class="text-2xl font-bold">45</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-gray-500">Pendapatan</h3>
        <p class="text-2xl font-bold text-green-600">Rp 12.500.000</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-gray-500">User</h3>
        <p class="text-2xl font-bold">80</p>
    </div>
</div>

<!-- Tabel Pesanan Terbaru -->
<div class="bg-white rounded shadow p-4">
    <h2 class="font-bold text-lg mb-4">Pesanan Terbaru</h2>

    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Total</th>
                <th class="p-2 border">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td class="p-2 border">1</td>
                <td class="p-2 border">Rifki</td>
                <td class="p-2 border">Rp 650.000</td>
                <td class="p-2 border text-green-600">Selesai</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
