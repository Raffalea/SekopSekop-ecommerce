@extends('layouts.admin')

@section('title', 'News')
@section('page-title', 'News')

@section('content')

<a href="{{ route('admin.news.create') }}"
   class="inline-block mb-5 bg-[#F28123] hover:bg-[#F28123]/80 text-white px-5 py-2 rounded-lg">
    + Tambah News
</a>

<div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-x-auto">

    <table class="w-full text-sm">
        <thead class="bg-gray-50 text-gray-600">
            <tr>
                <th class="px-4 py-3">Gambar</th>
                <th class="px-4 py-3">Judul</th>
                <th class="px-4 py-3">Tanggal</th>
                <th class="px-4 py-3">Aksi</th>
            </tr>
        </thead>

        <tbody class="divide-y">
            @foreach ($news as $item)
            <tr class="text-center">

                <td class="px-4 py-3">
                    @if ($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}"
                             class="w-14 mx-auto rounded">
                    @endif
                </td>

                <td class="px-4 py-3 font-medium">
                    {{ $item->title }}
                </td>

                {{-- <td class="px-4 py-3">
                    {{ $item->content }}
                </td> --}}

                <td class="px-4 py-3">
                    {{ $item->created_at->format('d M Y') }}
                </td>

                <td class="px-4 py-3 space-x-2">
                    <a href="{{ route('admin.news.edit', $item) }}"
                       class="text-orange-600">
                        Edit
                    </a>

                    <form action="{{ route('admin.news.destroy', $item) }}"
                          method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500"
                            onclick="return confirm('Hapus news?')">
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