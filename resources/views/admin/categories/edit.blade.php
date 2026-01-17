@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-lg">
    <h1 class="text-xl font-bold mb-4">Edit Kategori</h1>

    <form action="{{ route('admin.categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="name"
               value="{{ $category->name }}"
               class="w-full border p-2 mb-3">

        <textarea name="description"
                  class="w-full border p-2 mb-3">{{ $category->description }}</textarea>

        <button class="bg-green-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>
@endsection
