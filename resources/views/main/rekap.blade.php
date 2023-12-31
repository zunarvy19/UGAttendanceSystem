@extends('layouts.sidebar')
@section('container')
<section id="mainbar" class="w-full">
    <div class="flex justify-center items-center h-screen ml-80">
    <div class="w-[50vh] p-10 bg-white rounded-3xl drop-shadow-lg">
        <h1 class="mt-3 text-xl font-semibold block text-center text-black">Laporan Kehadiran</h1>
        <form action="{{ route('processReport') }}" method="GET">
        <div class="mt-10">
        <label for="Username" class="block text-base mb-2 text-black">Kelas</label>
        <select class="h-10 border w-full text-base px-2 py-1 rounded-lg" name="kelas_id" id="">
            <option value="">Pilih Kelas</option>
            @foreach ($datakelas as $kelas)
            <option {{(Request::get('kelas_id') == $kelas->id)? 'selected' : ''}} value="{{$kelas->id}}">
                {{$kelas->nama_kelas}}
            </option>
            @endforeach
        </select>
        </div>
        <div class="mt-3">
        <label for="Username" class="block text-base mb-2 text-black">Pilih minggu pertemuan:</label>
        </div>
        <div class="grid grid-cols-7">
        @foreach ($cariminggu as $week)
            <div>
            <input type="checkbox" name="minggu_id[]" value="{{ $week->id }}" {{ (Request::get('minggu_id') == $week->id) ? 'checked' : '' }}">
            <label for="minggu{{ $week->id }}">{{ $week->minggu }}</label>
            </div>
        @endforeach
        </div>
        <div class="mt-3">
        <label for="tanggal" class="block text-base mb-2 text-black">Status Mahasiswa</label>
        <select class="h-10 border w-full text-base px-2 py-1 rounded-lg" name="status_kehadiran" id="">
            <option value="">Semua Kehadiran</option>

                <option {{ (Request::get('status_kehadiran') == 'Hadir') ? 'selected' : ''}}  value="Hadir" >Hadir</option>
                <option {{ (Request::get('status_kehadiran') == 'Izin') ? 'selected' : ''}}   value="Izin">Izin</option>
                <option {{ (Request::get('status_kehadiran') == 'Sakit') ? 'selected' : ''}}  value="Sakit">Sakit</option>
                <option {{ (Request::get('status_kehadiran') == 'Alpha') ? 'selected' : ''}}  value="Alpha">Alpha</option>
        </select>
        </div>
        <div class="mt-3">
        <label for="tanggal" class="block text-base mb-2 text-black">Output</label>
        <select class="h-10 border w-full text-base px-2 py-1 rounded-lg" name="" id="">
            {{-- <option value="">Pilih output</option> --}}
            <option value="preview">Preview</option>
            {{-- <option value="excel">Download as Excel</option> --}}
        </select>
        </div>
        <div class="mt-8 mb-3 flex justify-end">
        <a href="inputrekap.html">
            <button class="bg-primary text-white py-2 w-[98px] rounded-lg hover:bg-opacity-75 font-normal text-center"> Submit
            </button>
        </a>
        </div>
    </form>
    </div>
    </div>
</section>
@endsection
