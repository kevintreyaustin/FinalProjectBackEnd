@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto bg-white text-black p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Daftar Barang</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-2 rounded">{{ session('success') }}</div>
    @endif

    @auth
        <a href="{{ route('barang.create') }}" class="bg-blue-500 text-blue px-4 py-2 rounded">Tambah Barang</a>
    @endauth

    <table class="table-auto w-full border-collapse border border-gray-500 mt-4">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-500 px-4 py-2">Nama</th>
                <th class="border border-gray-500 px-4 py-2">Kategori</th>
                <th class="border border-gray-500 px-4 py-2">Harga</th>
                <th class="border border-gray-500 px-4 py-2">Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($barangs) && count($barangs) > 0)
                @foreach ($barangs as $barang)
                    <tr>
                        <td class="border border-gray-500 px-4 py-2">{{ $barang->nama }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ $barang->kategori }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ number_format($barang->harga, 0, ',', '.') }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ $barang->jumlah }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="border border-gray-500 px-4 py-2 text-center">Tidak ada barang tersedia.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
