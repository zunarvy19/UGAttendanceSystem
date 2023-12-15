@extends('layouts.sidebar')
@section('container')
  <!-- Mainbar -->
  <section id="mainbar" class="w-full">
      <div class="flex justify-end p-10">
      <a href="{{route('inputabsen')}}">
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
                <form action="{{ route('kehadiran.setor') }}" method="POST" id="formKehadiran">
                @csrf
                <div class="flex justify-center">
                    <input class="text-3xl font-semibold text-center mt-3 mb-8 " hidden type="text" name="kelas_id" value="{{ $dataAbsensi->kelas_id }}">
                </div>
                
              </div>
              
              <div class="flex justify-between mb-8">
                
                  <div class="">
                          <label class="block" for="">Minggu</label>
                          <input  class="h-10 border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" type="text" name="minggu_id" value="{{ $dataAbsensi->minggu_id }}" id="">
                  </div>
                  <div class="">
                          <label class="block" for="">Tanggal</label>
                          <input class="h-10 border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" type="text" name="tanggal" value="{{  $dataAbsensi->tanggal }}" id="">
                  </div>
              </div>
            
              <div>
                  <table class="min-w-full border-collapse block md:table ">
                      <thead class="block md:table-header-group">
                      <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                          <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell">No</th>
                          <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[50vh]">Nama Mahasiswa</th>
                          <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[20vh]">NPM</th>
                          <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell w-[20vh]">Kelas</th>
                          <th class="bg-primary p-2 text-white font-semibold md:border md:border-dark text-center block md:table-cell ">Status Kehadiran</th>
                      </thead>
                      <tbody class="block md:table-row-group">
                        @php
                            $no =1;
                        @endphp
                        @foreach ($students as $student)
                        <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold"></span>{{$no++}}</td>
                            <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Nama Mahasiswa</span>{{$student->nama}}</td>
                            <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">NPM</span>{{$student->npm}}</td>
                            <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Kelas</span>{{$student->kelas}}</td>
                            <td class="p-2 md:border md:border-dark text-center block md:table-cell"><span class="inline-block md:hidden font-bold">Status Kehadiran</span>
                                <div class="flex gap-x-10 justify-center">
                                    <div>
                                        <input type="radio" name="kehadiran{{$student->id}}" value="Hadir">
                                        <label for="hadir">Hadir</label>  
                                    </div>
                                    <div>
                                        <input type="radio" name="kehadiran{{$student->id}}" value="Izin">
                                        <label for="izin">Izin</label>  
                                    </div>
                                    <div>
                                        <input type="radio" name="kehadiran{{$student->id}}" value="Sakit">
                                        <label for="sakit">Sakit</label>  
                                    </div>
                                    <div>
                                        <input type="radio" name="kehadiran{{$student->id}}" value="Alfa">
                                        <label for="alfa">Alpa</label>  
                                    </div>
                                </div>                                
                            </td>
                        </tr>
                        @endforeach
                        {{-- @endif --}}

                      </tbody>
                  </table>
              </div>
              <div class="flex justify-end">
                    <button class="bg-primary text-white py-2 w-[98px] rounded-lg hover:bg-opacity-75 font-normal text-center mt-10 mb-10" id="submitButton">
                        Submit
                    </button>
              </div>
              <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

              <script>
                document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('formKehadiran');
                const submitButton = document.getElementById('submitButton');
        
                submitButton.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah pengiriman formulir secara langsung
              
                    // Tampilkan SweetAlert saat tombol submit diklik
                    Swal.fire({
                      title: 'Data berhasil disimpan',
                      text: 'Ingin melihat laporan kehadiran mahasiswa?',
                      icon: 'success',
                      showCancelButton: true,
                      confirmButtonText: 'Ya!',
                      confirmButtonColor: '#176B87',
                      cancelButtonText: 'Batal'
                    }).then((result) => {
                      // Jika pengguna mengklik 'Ya, Simpan!', kirim formulir
                      if (result.isConfirmed) {
                        form.submit(); // Kirim formulir setelah SweetAlert dikonfirmasi
                      }
                    });
                  });
                });
              </script>
            </form>
          </div>
      </div>
  </section>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('select[name="kelas_id"]').on('change', function() {
      var selectedClassId = $(this).val();
      var selectedClassName = $('select[name="kelas_id"] option:selected').text();
      $('#selectedClassName span').text(selectedClassName);
    });
  });
</script>


@endsection