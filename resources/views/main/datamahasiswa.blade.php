@extends('layouts.sidebar')
@section('container')
<section id="mainbar" class="w-full">
<div class="flex flex-row">
      <div class="px-40 py-3 w-96 text-center"></div>
      <div id="Mainbar" class="px-[70px] pt-16 w-full">
          <div class="flex justify-center mb-16">
              <h1 class="text-4xl font-bold text-primary text-center ">DAFTAR KELAS</h1>
          </div>
          <div class="grid grid-cols-3  gap-x- gap-y-10">
              <div class="bg-gradient-to-r from-primary to-secondary h-[32vh] rounded-3xl drop-shadow-md w-[45vh]">
                  <a href="/view3ka01">
                      <div class="h-64 overflow-hidden rounded-2xl w-full">
                          <img class="w-full" src="/img/bg1.png" alt="">
                      </div>
                      <div class="h-[8vh]">
                          <h1 class="text-xl text-center font-bold text-white mt-3">3KA01</h1>
                      </div>
                  </a>
              </div>                      
              <div class="bg-gradient-to-r from-primary to-secondary h-[32vh] rounded-3xl drop-shadow-md w-[45vh]">
                  <a href="/view3ka02">
                      <div class="h-64 overflow-hidden rounded-2xl w-full">
                          <img class="w-full" src="/img/bg2.png" alt="">
                      </div>
                      <div class="h-[8vh]">
                          <h1 class="text-xl text-center font-bold text-white mt-3">3KA02</h1>
                      </div>
                  </a>
              </div>                      
              <div class="bg-gradient-to-r from-primary to-secondary h-[32vh] rounded-3xl drop-shadow-md w-[45vh]">
                  <a href="/view3ka10">
                      <div class="h-64 overflow-hidden rounded-2xl w-full">
                          <img class="w-full" src="/img/bg3.png" alt="">
                      </div>
                      <div class="h-[8vh]">
                          <h1 class="text-xl text-center font-bold text-white mt-3">3KA10</h1>
                      </div>
                  </a>
              </div>                      
              <div class="bg-gradient-to-r from-primary to-secondary h-[32vh] rounded-3xl drop-shadow-md w-[45vh]">
                  <a href="/view3ka17">
                      <div class="h-64 overflow-hidden rounded-2xl w-full">
                          <img class="w-full" src="/img/bg4.png" alt="">
                      </div>
                      <div class="h-[8vh]">
                          <h1 class="text-xl text-center font-bold text-white mt-3">3KA17</h1>
                      </div>
                  </a>
              </div>                                                
          </div>                                                                   
    </div>
</div>
</section>
@endsection
