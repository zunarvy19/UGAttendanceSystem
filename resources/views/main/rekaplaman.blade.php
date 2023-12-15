@extends('layouts.sidebar')

@section('container')
<section id="mainbar" class="w-full">
<div class="flex justify-end p-10">
<a href="">
    <button class="bg-button2 text-white py-2 w-[98px] rounded-lg hover:bg-opacity-75 font-normal text-center">Kembali</button>
</a>
</div>
<div class="flex flex-row">
    <div class="px-40 py-3 w-96 text-center"></div>    
    <div id="Mainbar" class="px-[10vh] pt-4 w-full">
        <div class="mb-10">
            <h1 class="text-3xl font-semibold text-center">
                INPUT ABSENSI MAHASISWA
            </h1>
        </div>
        <div class="flex justify-between mb-8">
            <div class="flex items-center">
                <div>
                    <label class="block" for="">Status Mahasiswa</label>
                    <input class="h-10 border w-auto text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" type="text" name="" id="" placeholder="Semua keterangan"  value="{{ request()->input('status_kehadiran') }}">
                </div>
            </div>                                           
                    <form action="/processReport">
                        <div class="flex items-center">
                            <label for="default-search" class="text-sm font-medium text-gray-900 sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input name="search" type="search" id="default-search" class="block w-96 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Cari mahasiswa">
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-secondary hover:bg-opacity-75 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Cari</button>
                            </div>
                        </div>
                    </form>                                           
        </div>
        <div>
            <table class="min-w-full border-collapse block md:table ">
                <thead class="block md:table-header-group">
                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                    <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell">No</th>
                    <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[50vh]">Nama Mahasiswa</th>
                    <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[20vh]">Kelas</th>
                    <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[20vh]">Minggu</th>
                    <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[20vh]">Tanggal</th>
                    <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell ">Status Kehadiran</th>
                </thead>
                <tbody class="block md:table-row-group">
                @php
                    $no = 1;
                @endphp
                @foreach ($datahadir as $index=>$absensi)
                <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">No</span>{{$no++}}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Nama Mahasiswa</span>{{$absensi->mahasiswa->nama}}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Kelas</span>{{$absensi->kelas->nama_kelas}}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Minggu</span>{{$absensi->minggu_id}}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Tanggal</span>{{ date('d-m-Y', strtotime($absensi->tanggal)) }}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Status Kehadiran</span>{{$absensi->status_kehadiran}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>

<script>
    document.getElementById('downloadButton').addEventListener('click', function() {
        document.getElementById('exportForm').submit();
    });
</script>

@endsection