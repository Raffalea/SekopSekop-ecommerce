@extends('layouts.admin')

@section('title', 'Edit Produk')
@section('page-title', 'Edit Produk')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-100 max-w-2xl">

    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Edit Produk</h2>
    </div>

    <form action="{{ route('admin.products.update', $product) }}"
          method="POST"
          enctype="multipart/form-data"
          class="p-6 space-y-4">

        @csrf
        @method('PUT')

        <!-- Nama -->
        <div>
            <label class="text-sm text-gray-600">Nama Produk</label>
            <input type="text" name="name"
                   value="{{ old('name', $product->name) }}"
                   class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="text-sm text-gray-600">Deskripsi</label>
            <textarea name="description" rows="4"
                class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">{{ old('description', $product->description) }}</textarea>
        </div>

        <!-- Kategori -->
        <div>
            <label class="text-sm text-gray-600">Kategori</label>
            <select name="category_id"
                class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Harga & Stok -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="text-sm text-gray-600">Harga</label>
                <input type="number" name="price"
                       value="{{ old('price', $product->price) }}"
                       class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">
            </div>

            <div>
                <label class="text-sm text-gray-600">Stok</label>
                <input type="number" name="stock"
                       value="{{ old('stock', $product->stock) }}"
                       class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">
            </div>
        </div>

        <!-- Gambar -->
        @if ($product->image)
            <div>
                <label class="text-sm text-gray-600">Gambar Saat Ini</label>
                <img src="{{ asset('storage/'.$product->image) }}"
                     class="w-32 rounded border mt-2">
            </div>
        @endif

        <div>
            <label class="text-sm text-gray-600">Ganti Gambar</label>
            <input type="file" name="image" class="mt-1 text-sm text-gray-600">
        </div>

        <!-- Button -->
        <div class="flex gap-3 pt-4">
            <button
                class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-lg">
                Update
            </button>

            <a href="{{ route('admin.products.index') }}"
               class="bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded-lg">
                Batal
            </a>
        </div>

    </form>
</div>

@endsection
