@extends('layouts.global')
{{-- @section('title')
Data Mahasiswa - Staff
@endsection --}}
@section('content')
<div class="w-full h-full flex">

    <div class="w-full flex flex-col bg-[#AED2FF]">
        {{-- @include('components.header', ['nama' => 'Tegar', 'gambar' => 'assets/images/ka-prodi.jpg']) --}}
        <div class="h-full m-4 p-8 bg-[#EEF1FF]" rounded-lg drop-shadow-md">
            <div class="w-full h-auto flex justify-end">
                <a href="{{route("welcome")}}">
                    <button class="px-4 py-2  bg-blue-900 rounded-md text text-white">Logout</button>
                </a>
            </div><br>
            <p class="text-4xl font-bold mb-4">Data Furniture</p>
            <hr><br>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-[#EEF1FF]"">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Barang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deksripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jumlah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $prdct)
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900
                        whitespace-nowrap">
                                {{ $prdct->id}}
                            </th>
                            <td class="px-6 py-4">
                                {{ $prdct->jenis }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $prdct->barang->nama}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $prdct->deskripsi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $prdct->jumlah }}
                            </td>
                            <td class="px-6 py-4">
                                Rp {{ number_format($prdct->harga, 0, ',', '.') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
