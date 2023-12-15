@extends('layouts.sidebar')
@section('container')
<section id="mainbar" class="w-full">
  <div class="flex flex-row">
      <div class="px-40 py-3 w-96 text-center"></div>
      <div id="Mainbar" class="px-[70px] pt-16 w-full">
          <div class="flex justify-end mb-16">
              <a href="/datamahasiswa">
                  <button class="bg-button2 text-white py-2 w-[98px] rounded-lg hover:bg-opacity-75 font-normal text-center">Kembali</button>
              </a>
          </div>
          <div class="mb-16">
              <h1 class="text-2xl font-semibold text-center text-primtext">
                  DAFTAR MAHASISWA
              </h1>
              <h1 class="text-2xl font-semibold text-center mt-3 text-primtext">
                  3KA10
              </h1>
          </div>
          <div>
              <div class="flex justify-between">
                  <div class="flex items-center">
                      <h1 class=" flex mb-4 text-lg font-semibold">Total Mahasiswa :&nbsp;<span>{{$total3ka10}}</span></h1>
                  </div>
                  <div>
                    <form action="/view3ka10">
                        @csrf
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative mb-4 ">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                            <input type="search" id="default-search" class="block w-96 p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari mahasiswa" name="search">
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-secondary hover:bg-opacity-75 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                    </form>
                      </div>
                  </div>
              </div>                                                    
          </div>
          <div>
              <table class="min-w-full border-collapse block md:table mb-5 ">
                  <thead class="block md:table-header-group">
                  <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                      <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell">No</th>
                      <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[80vh]">Nama Mahasiswa</th>
                      <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[40vh]">NPM</th>
                      <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[40vh]">Kelas</th>
                  </thead>
                  <tbody class="block md:table-row-group">
                    @php
                    $no = 1;
                @endphp
                @foreach ($data3ka10 as $item)
                <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">No</span>{{$no++}}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Nama Mahasiswa</span>{{$item ->nama}}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">NPM</span>{{$item->npm}}</td>
                    <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Kelas</span>{{$item->kelas}}</td>
                </tr>
                @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>
@endsection