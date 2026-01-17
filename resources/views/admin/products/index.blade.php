@extends('layouts.admin')

@section('page-title', 'Produk')

@section('content')

<a href="{{ route('admin.products.create') }}"
   class="bg-orange-600 text-white px-4 py-2 rounded mb-4 inline-block">
    + Tambah Produk
</a>

<table class="w-full bg-white rounded shadow">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2">Gambar</th>
            <th class="p-2">Nama</th>
            <th class="p-2">Kategori</th>
            <th class="p-2">Harga</th>
            <th class="p-2">Stok</th>
            <th class="p-2">Deskripsi</th>
            <th class="p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr class="text-center border-t">
            <td class="p-2">
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}"
                         class="w-16 mx-auto">
                @endif
            </td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name ?? '-' }}</td>
            <td>{{ $product->category->name ?? '-' }}</td>
            <td>Rp {{ number_format($product->price) }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->description }}</td>
            <td class="space-x-2">
                <a href="{{ route('admin.products.edit', $product) }}"
                   class="text-blue-500">Edit</a>

                <form action="{{ route('admin.products.destroy', $product) }}"
                      method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-500"
                        onclick="return confirm('Hapus produk?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
