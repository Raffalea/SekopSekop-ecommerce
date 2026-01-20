@extends('layouts.admin')

@section('title', 'Tambah Produk')
@section('page-title', 'Tambah Produk')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-100 max-w-2xl">

    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Form Produk</h2>
    </div>

    <form action="{{ route('admin.products.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="p-6 space-y-4">

        @csrf

        <!-- Nama -->
        <div>
            <label class="text-sm text-gray-600">Nama Produk</label>
            <input type="text" name="name"
                   class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500"
                   placeholder="Contoh: Semen Tiga Roda">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="text-sm text-gray-600">Deskripsi</label>
            <textarea name="description" rows="4"
                class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500"
                placeholder="Deskripsi produk"></textarea>
        </div>

        <!-- Kategori -->
        <div>
            <label class="text-sm text-gray-600">Kategori</label>
            <select name="category_id" required
                class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Harga -->
        <div>
            <label class="text-sm text-gray-600">Harga</label>
            <input type="number" name="price"
                   class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">
        </div>

        <!-- Stok -->
        <div>
            <label class="text-sm text-gray-600">Stok</label>
            <input type="number" name="stock"
                   class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500">
        </div>

        <!-- Gambar -->
        <div>
            <label class="text-sm text-gray-600">Gambar Produk</label>
            <input type="file" name="image"
                   class="w-full mt-1 text-sm text-gray-600">
        </div>

        <!-- Button -->
        <div class="flex gap-3 pt-4">
            <button
                class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-lg">
                Simpan
            </button>

            <a href="{{ route('admin.products.index') }}"
               class="bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded-lg">
                Batal
            </a>
        </div>

    </form>
</div>

@endsection
