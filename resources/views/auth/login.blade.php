<!doctype html>
<html>
<head>
  <title>{{$title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <!-- Tailwind Style -->
  <link rel="stylesheet" href="../dist/output.css">
  <!-- Bootstrap Icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-[70%] hidden bg-gray-500  bg-cover relative items-center"
          style="background-image: url(https://cdn.discordapp.com/attachments/1161313327570485251/1170715020632526889/Untitled_design.png?ex=655a0c53&is=65479753&hm=b3fd62791e8f5018c2614aa2867fcd6ca84356a8426bde6e72fb6401e8ae11a7&);">
          <div class="absolute bg-black  z-0"></div>
        </div>
        <div class="lg:w-1/2 w-full flex items-center justify-center text-center md:px-16 px-0 z-0"
          style="background-color: #04364A;">
          <div class="absolute lg:hidden z-10 inset-0 bg-gray-500 bg-no-repeat bg-cover items-center"
            style="background-image: url(https://images.unsplash.com/photo-1577495508048-b635879837f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80);">
            <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
          </div>
    
          <div class="w-[30rem] h-auto py-6 z-20 bg-[#04364A] mb-[10px] rounded-xl">
            <h1 class="my-6 text-[24px] font-semibold uppercase">
              Login
            </h1>
            <p>
            </p>
            <div class>
              <form action="/login" method="POST">
                @csrf
                <div class=" px-10">
                  <label for=" username" class="text-start block text-lg py-2">Nama Pengguna</label>
                  <input required type="text" name="username" id="username" placeholder="Masukkan nama pengguna"
                    class="block w-full h-[37%] p-4 text-lg rounded-lg border focus:border-2 focus:border-blue-400 focus:outline-0 placeholder:text-[1.2rem] placeholder:text-gray-500 text-black">
    
                  <label for="" class="text-start block text-xl py-2 mt-4">Password</label>
                  <input
                    class="w-full h-[37%] p-4 text-lg rounded-lg focus:border-2 focus:border-blue-400 focus:outline-0 placeholder:text-[1.2rem] placeholder:text-gray-500 text-black"
                    type="password" name="password" id="password" placeholder="Masukkan password" required>

                    
                    @if($errors->has('error'))
                    <div class="flex items-center p-4 mb-4 mt-5 text-sm text-white border border-red-800 rounded-lg bg-red-800" role="alert">
                      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                      </svg>
                      <div>
                        <span class="font-medium">
                          {{ $errors->first('error') }}
                        </span>
                      </div>
                    </div>
                    @endif
                  <div class="flex justify-start pt-2 mt-2">
                    <input type="checkbox">
                    <label class="text-white text-base ml-1"> Ingat saya</label>
                  </div>
    
                  <div class="px-4 pb-2 pt-4">
                    <button
                      class="capitalize font-semibold mx-auto mt-[115px] w-full h-14 text-lg rounded-xl bg-[#64CCC5] hover:opacity-[0.9] focus:outline-none">Masuk
                    </button>
                  </div>
    
                  <div class="p-4 text-center right-0 left-0 flex justify-center space-x-4 mt-16 lg:hidden ">
    
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>