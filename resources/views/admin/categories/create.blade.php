@extends('layouts.admin')

@section('content')
<div class="p-6 max-w-lg">
    <h1 class="text-xl font-bold mb-4">Tambah Kategori</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf

        <input type="text" name="name"
               class="w-full border p-2 mb-3"
               placeholder="Nama kategori">

        <textarea name="description"
                  class="w-full border p-2 mb-3"
                  placeholder="Deskripsi (opsional)"></textarea>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Simpan
        </button>
    </form>
</div>
@endsection
