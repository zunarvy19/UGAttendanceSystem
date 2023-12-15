@extends('layouts.sidebar')
@section('container')
  <!-- Mainbar -->
  <section id="mainbar" class="w-full">
    <form action="{{ route('attendances.store') }}" method="POST">
      @csrf
      <div class="flex justify-center items-center h-screen ml-80">
        <div class="w-96 p-10 bg-white rounded-3xl drop-shadow-lg">
            <h1 class="mt-3 text-xl font-semibold block text-center text-black">Absensi</h1>
            <div class="mt-10">
                <label for="Username" class="block text-base mb-2 text-black">Kelas</label>
                <select class="h-10 border w-full text-base px-2 py-1 rounded-lg" name="kelas_id" placeholder="pilih kelas">
                    <option value="">Pilih kelas</option>
                    @foreach ($datakelas as $kelas)
                        <option {{(Request::get('kelas_id') == $kelas->id)? selected : ''}} value="{{$kelas->id}}" >
                        {{$kelas->nama_kelas}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <label for="Username" class="block text-base mb-2 text-black">Minggu ke</label>
                <select class="h-10 border w-full text-base px-2 py-1 rounded-lg" name="minggu_id" placeholder="pilih kelas">
                    <option value="">Pilih Minggu</option>
                    @foreach ($cariminggu as $week)
                        <option {{(Request::get('minggu_id') == $week->id)? selected : ''}} value="{{$week->id}}" >
                        {{$week->minggu}}
                        </option>
                    @endforeach
                </select>
            </div> 
            <div class="mt-3">
                <label for="tanggal" class="block text-base mb-2 text-black">Tanggal</label>
                <input name="tanggal" type="date" id="password" data-date="" data-date-format="DD MMMMM YYYYE" class="h-10 border w-full text-base px-2 py-1 rounded-lg focus:outline-none focus:ring-0 border-gray-600" placeholder="mm/dd/yyyy">
            </div> 
            <div class="mt-8 mb-3 flex justify-end">
                <a href="absensi.html">
                <button class=" bg-primary text-white py-2 w-[98px] rounded-lg hover:bg-opacity-75 font-normal text-center">
                    Submit</button>
                </a>
            </div>
        </div>
    </div>
    </form>
 
  </section>
</section>
<script>
    $("input").on("change", function() {
    this.setAttribute(
        "data-date",
        moment(this.value, "YYYY-MM-DD")
        .format( this.getAttribute("data-date-format") )
    )
}).trigger("change")
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
@endsection