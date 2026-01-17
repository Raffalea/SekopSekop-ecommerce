@extends('layouts.user')

@section('title', 'Dashboard User')

@section('content')

<h2 class="text-2xl font-bold mb-6">
    Halo, {{ auth()->user()->name ?? 'User' }} 👋
</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-gray-500">Pesanan Saya</h3>
        <p class="text-2xl font-bold">3</p>
    </div>

    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-gray-500">Belum Dibayar</h3>
        <p class="text-2xl font-bold text-red-500">1</p>
    </div>

    <div class="bg-white p-4 rounded shadow">
        <h3 class="text-gray-500">Total Belanja</h3>
        <p class="text-2xl font-bold text-green-600">Rp 1.250.000</p>
    </div>
</div>

<div class="bg-white p-4 rounded shadow">
    <h3 class="font-bold mb-3">Pesanan Terakhir</h3>

    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">Produk</th>
                <th class="p-2 border">Total</th>
                <th class="p-2 border">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td class="p-2 border">Semen Portland</td>
                <td class="p-2 border">Rp 650.000</td>
                <td class="p-2 border text-yellow-500">Diproses</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
