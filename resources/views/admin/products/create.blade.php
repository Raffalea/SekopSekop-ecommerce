@extends('layouts.admin')

@section('page-title', 'Tambah Produk')

@section('content')

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow max-w-xl">

        @csrf

        <input type="text" name="name" placeholder="Nama Produk" class="w-full border p-2 mb-3">

        <textarea name="description" placeholder="Deskripsi" class="w-full border p-2 mb-3"></textarea>
        
        <select name="category_id" class="w-full border p-2 mb-3" required>
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <input type="number" name="price" placeholder="Harga" class="w-full border p-2 mb-3">

        <input type="number" name="stock" placeholder="Stok" class="w-full border p-2 mb-3">

        <input type="file" name="image" class="mb-4">

        <button class="bg-orange-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>

@endsection
