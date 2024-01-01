@extends('layouts.sidebar')
@section('container')
            <!-- Mainbar -->
            <section id="mainbar" class="w-full">
            <div class="flex flex-row">
                <div class="px-40 py-3 w-96 text-center"></div>
                        <div id="Mainbar" class="px-[70px] pt-16 w-full">  
                            <div class="w-[180px] h-[180px] rounded-full bg-white mx-auto overflow-hidden">
                                <div>
                                    <img src="/img/pp.jpg" class="scale-150">
                                </div>
                            </div>
                              <h1 class="text-center mt-3 text-lg font-medium">Profile</h1>
                              <div class="flex justify-center">
                                  <div class="">
                                      <div class="mt-10">
                                          <label for="Username" class="block text-base mb-2 text-black">Nama</label>
                                          <input disabled type="text" id="username" class="h-10 border w-[40vh] text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" placeholder="Dr. Febriani S.Kom, M.M.">
                                      </div> 
                                      <div class="mt-5">
                                          <label for="Username" class="block text-base mb-2 text-black">Email</label>
                                          <input disabled type="text" id="username" class="h-10 border w-[40vh] text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" placeholder="febriani@staff.gunadarma.ac.id">
                                      </div> 
                                      <div class="mt-5 mb-10">
                                          <label for="Username" class="block text-base mb-2 text-black">Nama pengguna</label>
                                          <input disabled type="text" id="username" class="h-10 border w-[40vh] text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" placeholder="febriani@staff.gunadarma.ac.id">
                                      </div> 
                                  </div>
                              </div>
                              <div class="container px-32">
                                  <h1 class="mt-10 text-center text-lg font-medium">Ganti password</h1>
                                  <form action="{{route('changePassword')}}" method="POST">
                                    @csrf
                                  <div class="flex mt-10 justify-between">
                                    <div class="mx-10">
                                        <label for="current_password" class="block text-base mb-2 text-black">Password saat ini</label>
                                        <input type="password" name="current_password" class="h-10 border w-[40vh] text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" placeholder="Masukkan password lama">
                                        @error('current_password')
                                            <div class="mt-1 text-[13px] text-red-600">
                                                {{$message}}
                                            </div>
                                        @enderror
                                        @if(session('success'))
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                                        <script>
                                            Swal.fire({
                                                title: 'Password berhasil diubah! <br>silahkan login kembali</br>',
                                                icon: 'success',
                                                confirmButtonText: 'OK',
                                                confirmButtonColor: '#176B87',
                                                willClose: () => {
                                                    // Lakukan logout dengan mengirimkan permintaan POST ke endpoint logout Laravel
                                                    fetch('/logout', {
                                                        method: 'POST',
                                                        headers: {
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                            'Content-Type': 'application/json'
                                                        }
                                                    }).then(response => {
                                                        if (response.redirected) {
                                                            window.location.href = response.url;
                                                        }
                                                    }).catch(error => {
                                                        console.error('Error:', error);
                                                    });
                                                }
                                                    });
                                        </script>
                                        @endif

                                </div> 
                                <div class="mx-10">
                                    <label for="new_password" class="block text-base mb-2 text-black">Password baru</label>
                                    <input type="password" name="new_password" class="h-10 border w-[40vh] text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" placeholder="Masukkan password baru">
                                </div> 
                            </div>
                            <div class="mt-10 flex justify-end mr-10">
                                <a href="dashboard.html">
                                    <button class=" bg-primary text-white py-2 w-[98px] rounded-lg hover:bg-opacity-75 font-normal text-center">Simpan</button>
                                </a>
                            </div>  
                                </form>                                                                        
                            </div>
                    </div>
            </div> 
        </section>
@endsection