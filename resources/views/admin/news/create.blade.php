@extends('layouts.admin')

@section('title', 'Tambah News')
@section('page-title', 'Tambah News')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-100 max-w-2xl">

    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Form News</h2>
    </div>

    <form action="{{ route('admin.news.store') }}"
          method="POST"
          enctype="multipart/form-data"
          class="p-6 space-y-4">

        @csrf

        <!-- Judul -->
        <div>
            <label class="text-sm text-gray-600">Judul</label>
            <input type="text" name="title"
                   class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500"
                   placeholder="Contoh: Tips Memilih Material Bangunan">
        </div>

        <!-- Content -->
        <div>
            <label class="text-sm text-gray-600">Content</label>
            <textarea name="content" rows="6"
                class="w-full mt-1 rounded-lg border-gray-300 focus:border-orange-500 focus:ring-orange-500"
                placeholder="Isi artikel..."></textarea>
        </div>

        <!-- Gambar -->
        <div>
            <label class="text-sm text-gray-600">Gambar</label>
            <input type="file" name="image"
                   class="w-full mt-1 text-sm text-gray-600">
        </div>

        <!-- Button -->
        <div class="flex gap-3 pt-4">
            <button
                class="bg-[#F28123] hover:bg-[#F28123]/80 text-white px-6 py-2 rounded-lg">
                Simpan
            </button>

            <a href="{{ route('admin.news.index') }}"
               class="bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded-lg">
                Batal
            </a>
        </div>

    </form>
</div>

@endsection