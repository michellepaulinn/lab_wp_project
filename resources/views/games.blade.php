@extends('master')
@section('title', '')

@section('content')

<div class="container d-flex justify-content-center align-items-start flex-row flex-wrap ">
    <form action="" class="container d-flex justify-content-center align-items-center mt-2" method="GET">
        <input type="text" class="form-control w-50 me-2" placeholder="Search.." name="keyword">
        <button class="btn bg-green" type="submit"><span class="material-icons">search</span></button>
    </form>
    {{-- <div class="d-flex justify-content-center flex-wrap gap-2"> --}}
      @foreach ($games as $game)
        <div class="card text-dark m-2" style="width: 12rem;">
          <img class="card-img" src="{{ asset('/images/'.$game->gameThumbnail)}}" alt="" >
          <div class="card-body">
            <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
            <p class="card-text">
              <span>{{ $game->description }}</span>
            </p>
            <h6 class="card-title align-text-right"><b>{{$game->price}}</b></h6>
            <a href="/game/{{$game->id}}" class="btn bg-navy text-light">View Games</a>
          </div>
        </div>
      @endforeach
    {{-- </div> --}}
  
    
  </div>
  <div class="pages d-flex justify-content-center align-items-center flex-column m-3">
  {{-- cm link urutan halamannya --}}
  {{-- {{$games->links()}} --}}

  {{-- buat pagination wktu searching keyword (ex.u) jd halamannya ttp di searching, ga pindah ke pagi yg sebelumnya --}}
  {{$games->appends($_GET)->links()}}
  </div>

 @endsection