@extends('layouts.admin')

@section('title', 'Edit Kategori')
@section('page-title', 'Edit Kategori')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-100 max-w-xl">

    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Edit Kategori</h2>
    </div>

    <form action="{{ route('admin.categories.update', $category) }}"
          method="POST"
          class="p-6 space-y-4">

        @csrf
        @method('PUT')

        <!-- Nama -->
        <div>
            <label class="text-sm text-gray-600">Nama Kategori</label>
            <input type="text" name="name"
                   value="{{ old('name', $category->name) }}"
                   class="w-full mt-1 rounded-lg border-gray-300
                          focus:border-orange-500 focus:ring-orange-500">
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="text-sm text-gray-600">Deskripsi</label>
            <textarea name="description" rows="4"
                class="w-full mt-1 rounded-lg border-gray-300
                       focus:border-orange-500 focus:ring-orange-500">{{ old('description', $category->description) }}</textarea>
        </div>

        <!-- Button -->
        <div class="flex gap-3 pt-4">
            <button
                class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-2 rounded-lg">
                Update
            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="bg-gray-200 hover:bg-gray-300 px-6 py-2 rounded-lg">
                Batal
            </a>
        </div>

    </form>
</div>

@endsection
