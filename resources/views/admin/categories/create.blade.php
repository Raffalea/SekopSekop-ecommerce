@extends('layouts.admin')

@section('title', 'Tambah Kategori')
@section('page-title', 'Tambah Kategori')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-100 max-w-xl">

    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Form Kategori</h2>
    </div>

    <form action="{{ route('admin.categories.store') }}"
          method="POST"
          class="p-6 space-y-4">

        @csrf

        <!-- Nama -->
        <div>
            <label class="text-sm text-gray-600">Nama Kategori</label>
            <input type="text" name="name"
                   class="w-full mt-1 rounded-lg border-gray-300
                          focus:border-orange-500 focus:ring-orange-500"
                   placeholder="Contoh: Semen">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="text-sm text-gray-600">Deskripsi (opsional)</label>
            <textarea name="description" rows="4"
                class="w-full mt-1 rounded-lg border-gray-300
                       focus:border-orange-500 focus:ring-orange-500"
                placeholder="Deskripsi kategori"></textarea>
        </div>

        <!-- Button -->
        <div class="flex gap-3 pt-4">
            <button
                class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-lg">
                Simpan
            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded-lg">
                Batal
            </a>
        </div>

    </form>
</div>

@endsection
