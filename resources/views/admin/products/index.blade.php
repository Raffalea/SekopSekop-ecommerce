@extends('layouts.admin')

@section('title', 'Produk')
@section('page-title', 'Produk')

@section('content')

<a href="{{ route('admin.products.create') }}"
   class="inline-block mb-5 bg-orange-600 hover:bg-orange-700
          text-white px-5 py-2 rounded-lg">
    + Tambah Produk
</a>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-x-auto">

    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
            <tr>
                <th class="px-4 py-3">Gambar</th>
                <th class="px-4 py-3">Nama</th>
                <th class="px-4 py-3">Kategori</th>
                <th class="px-4 py-3">Harga</th>
                <th class="px-4 py-3">Stok</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-100">
            @foreach ($products as $product)
            <tr class="hover:bg-gray-50 text-center">

                <td class="px-4 py-3">
                    @if ($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}"
                             class="w-14 mx-auto rounded">
                    @endif
                </td>

                <td class="px-4 py-3 font-medium text-gray-800">
                    {{ $product->name }}
                </td>

                <td class="px-4 py-3">
                    {{ $product->category->name ?? '-' }}
                </td>

                <td class="px-4 py-3">
                    Rp {{ number_format($product->price) }}
                </td>

                <td class="px-4 py-3">
                    {{ $product->stock }}
                </td>

                <td class="px-4 py-3 space-x-2">
                    <a href="{{ route('admin.products.edit', $product) }}"
                       class="text-orange-600 hover:underline">
                        Edit
                    </a>

                    <form action="{{ route('admin.products.destroy', $product) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Hapus produk?')"
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

@endsection
