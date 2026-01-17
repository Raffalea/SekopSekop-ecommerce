@extends('layouts.admin')

@section('page-title', 'Edit Produk')

@section('content')

    <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-6 rounded shadow max-w-xl">

        @csrf
        @method('PUT')

        <!-- Nama -->
        <label class="block mb-1 font-semibold">Nama Produk</label>
        <input type="text" name="name" value="{{ old('name', $product->name) }}" class="w-full border p-2 mb-3">

        <!-- Deskripsi -->
        <label class="block mb-1 font-semibold">Deskripsi</label>
        <textarea name="description" class="w-full border p-2 mb-3" rows="4">{{ old('description', $product->description) }}</textarea>

        <!-- Kategori -->
        <label class="block mb-1 font-semibold">Kategori</label>
        <select name="category_id" class="w-full border p-2 mb-3" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <!-- Harga -->
        <label class="block mb-1 font-semibold">Harga</label>
        <input type="number" name="price" value="{{ old('price', $product->price) }}" class="w-full border p-2 mb-3">

        <!-- Stok -->
        <label class="block mb-1 font-semibold">Stok</label>
        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}" class="w-full border p-2 mb-3">

        <!-- Gambar Lama -->
        @if ($product->image)
            <label class="block mb-1 font-semibold">Gambar Saat Ini</label>
            <img src="{{ asset('storage/' . $product->image) }}" class="w-32 mb-3 rounded border">
        @endif

        <!-- Upload Gambar Baru -->
        <label class="block mb-1 font-semibold">Ganti Gambar (opsional)</label>
        <input type="file" name="image" class="mb-4">

        <!-- Button -->
        <div class="flex gap-2">
            <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded">
                Update
            </button>

            <a href="{{ route('admin.products.index') }}" class="bg-gray-300 px-4 py-2 rounded">
                Batal
            </a>
        </div>

    </form>

@endsection
