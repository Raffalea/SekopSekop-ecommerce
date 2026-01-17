@extends('layouts.admin')

@section('content')
<div class="p-6">
    <div class="flex justify-between mb-4">
        <h1 class="text-xl font-bold">Kategori Produk</h1>
        <a href="{{ route('admin.categories.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">
            + Tambah
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">No</th>
                <th class="p-2 border">Nama</th>
                <th class="p-2 border">Slug</th>
                <th class="p-2 border">Deskripsi</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td class="p-2 border">{{ $loop->iteration }}</td>
                <td class="p-2 border">{{ $category->name }}</td>
                <td class="p-2 border">{{ $category->slug }}</td>
                <td class="p-2 border">{{ $category->description }}</td>
                <td class="p-2 border flex gap-2">
                    <a href="{{ route('admin.categories.edit', $category) }}"
                       class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                    <form action="{{ route('admin.categories.destroy', $category) }}"
                          method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="bg-red-600 text-white px-3 py-1 rounded"
                                onclick="return confirm('Hapus kategori?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $categories->links() }}
    </div>
</div>
@endsection
