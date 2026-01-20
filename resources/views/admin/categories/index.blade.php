@extends('layouts.admin')

@section('title', 'Kategori')
@section('page-title', 'Kategori Produk')

@section('content')

<a href="{{ route('admin.categories.create') }}"
   class="inline-block mb-5 bg-orange-600 hover:bg-orange-700
          text-white px-5 py-2 rounded-lg">
    + Tambah Kategori
</a>

@if(session('success'))
    <div class="mb-4 bg-orange-50 text-orange-700 border border-orange-200
                px-4 py-3 rounded-lg">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-x-auto">

    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
            <tr>
                <th class="px-4 py-3">No</th>
                <th class="px-4 py-3">Nama</th>
                <th class="px-4 py-3">Slug</th>
                <th class="px-4 py-3">Deskripsi</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">
            @foreach ($categories as $category)
            <tr class="hover:bg-gray-50">

                <td class="px-4 py-3 text-center">
                    {{ $loop->iteration }}
                </td>

                <td class="px-4 py-3 font-medium text-gray-800">
                    {{ $category->name }}
                </td>

                <td class="px-4 py-3 text-gray-600">
                    {{ $category->slug }}
                </td>

                <td class="px-4 py-3">
                    {{ $category->description ?? '-' }}
                </td>

                <td class="px-4 py-3 space-x-2 text-center">
                    <a href="{{ route('admin.categories.edit', $category) }}"
                       class="text-orange-600 hover:underline">
                        Edit
                    </a>

                    <form action="{{ route('admin.categories.destroy', $category) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus kategori?')"
                                class="text-red-500 hover:underline">
                            Hapus
                        </button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="mt-4">
    {{ $categories->links() }}
</div>

@endsection
