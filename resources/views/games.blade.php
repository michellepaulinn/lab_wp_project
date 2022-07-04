@extends('master')
@section('title', '')

@section('content')

<div class="container d-flex  flex-column justify-content-center align-items-center flex-wrap ">
    <form action="" class="container d-flex justify-content-center align-items-center mt-2" method="GET">
        <input type="text" class="form-control w-50 me-2" placeholder="Search.." name="keyword">
        <button class="btn bg-green" type="submit"><span class="material-icons">search</span></button>
    </form>
    <div class="d-flex justify-content-center flex-wrap mt-3" >
      @include('columnCards', ['games'=>$games])
    </div>
  <div class="mt-3 p-4">
  {{-- cm link urutan halamannya --}}
  {{-- {{$games->links()}} --}}

  {{-- buat pagination wktu searching keyword (ex.u) jd halamannya ttp di searching, ga pindah ke pagi yg sebelumnya --}}
    <div class="d-flex justify-content-between">
      <div>
        <p>
          Showing  {{$games->firstItem()}} to {{$games->lastItem()}} of {{$games->total()}} games
        </p>
      </div>
      <div>
        {{$games->appends($_GET)->links()}}
      </div>
    </div>

  </div>

</div>

 @endsection