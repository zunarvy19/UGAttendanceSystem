@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    {{-- <link rel="icon" type="images/x-icon" href="https://www.w3docs.com/favicon.ico" /> --}}
    @vite('resources/css/app.css')
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Tailwind Style -->
    <link rel="stylesheet" href="../dist/output.css">
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</head>
<body>
    <section id="Fullbar" class="flex flex-row w-full">
        <!-- Sidebar -->
        <section id="Sidebar">
        <div class="fixed top-0 bottom-0 lg:left-0 px-4 py-3 w-96 overflow-y-auto text-center bg-dark">
            <div id="Wrap Navbar" class="flex flex-col justify-between h-full">
                <aside id="sidebar-multi-level-sidebar">
                    <div id="Main Feature" class="flex-col ">
                        <div id="Profile" class="flex flex-col mt-10">
                            <div class="w-[180px] h-[180px] rounded-full bg-slate-400 mx-auto overflow-hidden">
                                <div>
                                    <img src="/img/pp.jpg" class="scale-150">
                                </div>
                            </div>
                            <h1 class="font-semibold text-xl text-white mx-3 mb-0 mt-10 capitalize">
                                {{Auth::user()->name}}
                            </h1>
                            <h1 class="font-normal text-l text-white mt-3">{{Auth::user()->username}}</h1>
                            <div class="p-2.5 mt-5 text-xl {{($title === 'Profile') ? 'text-secondary font-semibold': 'text-white'}}">
                                <a href="{{route('viewprofile')}}">
                                    <h1 class="text-[16px]">Profile</h1>
                                </a>
                            </div>
                        </div>
                        <hr class="my-5">
                            <div class=" text-xl rounded-lg {{($title === 'Dashboard' || $title === 'Rekap Absen' ) ? 'text-secondary font-semibold': 'text-white'}}">
                                <div class="p-2.5 mt-1 flex items-center ">
                                    <i class="bi bi-display px-2 py-1 scale-125"></i>
                                    <a href="{{route('dashboard')}} ">
                                        <h1 class=" text-[16px] ml-3">Dashboard</h1>
                                    </a>
                                </div>
                            </div>

                            <div class=" text-xl rounded-lg {{($title === 'Data Mahasiswa' || $title === '3KA01' || $title === '3KA02' || $title === '3KA10' || $title === '3KA17') ? 'text-secondary font-semibold': 'text-white'}}">
                                <div class="p-2.5 mt-1 flex items-center ">
                                    <i class="bi bi-people px-2 py-1 scale-125"></i>
                                    <a href="{{route('datamahasiswa')}} ">
                                        <h1 class=" text-[16px] ml-3 ">Data Mahasiswa</h1>
                                    </a>
                                </div>
                            </div>

                        <div class="text-xl rounded-lg {{($title === 'Absensi') ? 'text-secondary font-semibold': 'text-white'}}">
                            <div class="p-2.5 mt-1 flex items-center">
                                <i class="bi bi-book-half px-2 py-1 scale-125"></i>
                                <a href="/inputabsen">
                                    <h1 class=" text-[16px] ml-3">Input Absen</h1>
                                </a>
                            </div>
                        </div>

                        <div class="text-xl rounded-lg {{($title === 'Rekap Absensi') ? 'text-secondary font-semibold': 'text-white'}}">
                            <div class="p-2.5 mt-1 flex items-center">
                                <i class="bi bi-journals px-2 py-1 scale-125"></i>
                                <a href="/viewrekap">
                                    <h1 class="text-[16px] ml-3">Rekap Absensi</h1>
                                </a>
                            </div>
                        </div>
                    </div>

                </aside>
                {{-- LOGOUT --}}
               
                <form action="/logout" method="POST" id="formLogout">
                    @csrf
                    <div id="Logout" class="">
                        <div class="text-white mb-2">
                                <div class="p-2.5 mt-1 flex items-center">                                 
                                    <i class="bi bi-box-arrow-right px-2 py-1 text-xl"></i>
                                    <button type="submit" class="text-base" id="submitButton">Keluar</button>
                                </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            
                            document.addEventListener('DOMContentLoaded', function() {
                                const form = document.getElementById('formLogout');
                                const submitButton = document.getElementById('submitButton');
                            
                                submitButton.addEventListener('click', function(event) {
                                  event.preventDefault(); // Mencegah pengiriman formulir secara langsung
                            
                                  // Tampilkan SweetAlert saat tombol submit diklik
                                  Swal.fire({
                                    title: 'Apakah Anda yakin ingin keluar?',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonText: 'Logout',
                                    confirmButtonColor: '#176B87',
                                    cancelButtonText: 'Cancel'
                                  }).then((result) => {
                                    // Jika pengguna mengklik 'Ya, Simpan!', kirim formulir
                                    if (result.isConfirmed) {
                                      form.submit(); // Kirim formulir setelah SweetAlert dikonfirmasi
                                    }
                                  });
                                });
                              });
                            </script>
                </div>
                </form>

            </div>
        </div>
        </section>
    </section>
<div class="">
@yield('container')
</div>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</body>
</html>