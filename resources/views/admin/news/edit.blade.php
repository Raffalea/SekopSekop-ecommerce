@extends('layouts.admin')

@section('title', 'Edit News')
@section('page-title', 'Edit News')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-100 max-w-2xl">

    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="font-semibold text-gray-800">Edit News</h2>
    </div>

    <form action="{{ route('admin.news.update', $news) }}"
          method="POST"
          enctype="multipart/form-data"
          class="p-6 space-y-4">

        @csrf
        @method('PUT')

        <!-- Judul -->
        <div>
            <label class="text-sm text-gray-600">Judul</label>
            <input type="text" name="title"
                   value="{{ old('title', $news->title) }}"
                   class="w-full mt-1 rounded-lg border-gray-300">
        </div>

        <!-- Content -->
        <div>
            <label class="text-sm text-gray-600">Content</label>
            <textarea name="content" rows="6"
                class="w-full mt-1 rounded-lg border-gray-300">{{ old('content', $news->content) }}</textarea>
        </div>

        <!-- Gambar Lama -->
        @if ($news->image)
            <div>
                <label class="text-sm text-gray-600">Gambar Saat Ini</label>
                <img src="{{ asset('storage/'.$news->image) }}"
                     class="w-32 mt-2 rounded">
            </div>
        @endif

        <!-- Upload Baru -->
        <div>
            <label class="text-sm text-gray-600">Ganti Gambar</label>
            <input type="file" name="image">
        </div>

        <!-- Button -->
        <div class="flex gap-3 pt-4">
            <button class="bg-[#F28123] hover:bg-[#F28123]/80 text-white px-6 py-2 rounded-lg">
                Update
            </button>

            <a href="{{ route('admin.news.index') }}"
               class="bg-gray-200 px-6 py-2 rounded-lg">
                Batal
            </a>
        </div>

    </form>
</div>

@endsection