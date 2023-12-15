@extends('layouts.sidebar')
@section('container')
{{-- mainbar --}}
<section id="mainbar" class="w-full">
<div class="flex flex-row">
    <div class="px-40 py-3 w-96 text-center"></div>
    <div id="Mainbar" class="px-[70px] pt-16 w-full">
        <div class="flex justify-end">
            <h1 class="text-4xl font-bold text-primary mb-16">
                UG Academic Attendance
            </h1>
        </div>
        <div class="grid grid-cols-3 justify-between gap-x-10 mb-10">
              <div class="bg-gradient-to-r from-primary to-secondary h-[25vh] rounded-3xl drop-shadow-md">
                  <div class="flex flex-col pl-10">
                      <h1 class="text-2xl text-white font-semibold pt-8">TOTAL MAHASISWA</h1>
                      <h1 class="text-4xl text-white font-semibold pt-16">164</h1>
                      <h1 class="text-2xl text-white font-semibold pt-2">MAHASISWA</h1>
                  </div>
              </div>
              <div class="bg-gradient-to-r from-primary to-secondary h-[25vh] rounded-3xl drop-shadow-md">
                  <div class="flex flex-col pl-10">
                      <h1 class="text-2xl text-white font-semibold pt-8">TOTAL KELAS</h1>
                      <h1 class="text-4xl text-white font-semibold pt-16">4</h1>
                      <h1 class="text-2xl text-white font-semibold pt-2">KELAS</h1>
                  </div>
              </div>
              <div class="bg-gradient-to-r from-primary to-secondary h-[25vh] rounded-3xl drop-shadow-md">
                  <div class="flex flex-col pl-10">
                      <h1 class="text-2xl text-white font-semibold pt-8">TOTAL MATA KULIAH</h1>
                      <h1 class="text-4xl text-white font-semibold pt-16">1</h1>
                      <h1 class="text-2xl text-white font-semibold pt-2">MATA KULIAH</h1>
                  </div>
              </div>
          </div>
          <div class="my-20 flex justify-center items-center ">
              <h1 class="text-3xl text-primary font-bold">JADWAL PERKULIAHAN</h1>
          </div>
          <table class="min-w-full border-collapse block md:table ">
              <thead class="block md:table-header-group">
                  <tr
                      class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                      <th
                          class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-48">
                          Kelas</th>
                      <th
                          class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-48">
                          Hari</th>
                      <th
                          class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell">
                          Mata Kuliah</th>
                      <th
                          class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-48">
                          Waktu</th>
                      <th
                          class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-48">
                          Ruang</th>
              </thead>
              <tbody class="block md:table-row-group">
                  <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Kelas</span>3KA02</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Hari</span>Selasa</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Mata kuliah</span>Interaksi Manusia &
                          Komputer*/**</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Waktu</span>1/2/3</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Ruang</span>E313</td>
                      </td>
                  </tr>
                  <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Kelas</span>3KA01</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Hari</span>Selasa</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Mata kuliah</span>Interaksi Manusia &
                          Komputer*/**</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Waktu</span>4/5/6</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Ruang</span>E317</td>
                      </td>
                  </tr>
                  <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Kelas</span>3KA10</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Hari</span>Rabu</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Mata kuliah</span>Interaksi Manusia &
                          Komputer*/**</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Waktu</span>1/2/3</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Ruang</span>E214</td>
                      </td>
                  </tr>
                  <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Kelas</span>3KA17</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Hari</span>Selasa</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Mata kuliah</span>Interaksi Manusia &
                          Komputer*/**</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Waktu</span>4/5/6</td>
                      <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span
                              class="inline-block w-1/3 md:hidden font-bold">Ruang</span>E212</td>
                      </td>
                  </tr>

              </tbody>
          </table>


          <!-- <div class="flex justify-center items-center">
                      <div class="flex flex-cols-5  overflow-hidden w-[130vh] justify-center items-center">
                      <div class="border-black border w-[20vh] h-[5vh] bg-primary flex items-center justify-center">
                          <h1 class="text-white font-semibold">Kelas</h1>
                      </div>
                      <div class="border-black border w-[20vh] h-[5vh] bg-primary flex items-center justify-center">
                          <h1 class="text-white font-semibold">Hari</h1>
                      </div>
                      <div class="border-black border w-[60vh] h-[5vh] bg-primary flex items-center justify-center">
                          <h1 class="text-white font-semibold">Mata Kuliah</h1>
                      </div>
                      <div class="border-black border w-[20vh] h-[5vh] bg-primary flex items-center justify-center">
                          <h1 class="text-white font-semibold">Waktu</h1>
                      </div>
                      <div class="border-black border w-[20vh] h-[5vh] bg-primary flex items-center justify-center">
                          <h1 class="text-white font-semibold">Ruang</h1>
                      </div>
                      </div>
                  </div> -->
      </div>
  </div>
</section>
@endsection