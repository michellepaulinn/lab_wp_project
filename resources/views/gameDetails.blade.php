@extends('master')
@section('title', ' | '.$game->gameName)

@section('content')

<div class="justify-content-center m-auto w-50">
    <div class="gameVisual">
        <div class="card text-dark m-2" style="width: 12rem;">
            <img class="card-img" src="{{ asset('/images/'.$game->gameThumbnail)}}" alt="" >
            <div class="card-body">
              <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
              <p class="card-text">
                <span>{{ $game->description }}</span>
              </p>
              <h6 class="card-title align-text-right"><b>{{$game->price}}</b></h6>
              <a href="" class="btn bg-navy text-light">Add to Cart</a>
            </div>
        </div>

        <div class="slider">

        </div>
    </div>

    <div class="gameExplain bg-white d-flex justify-content-around">
        <div class="genre">
            <div class="sub">Genre</div>
            <div>{{-- $game->category_id--}}</div>
        </div>
        <div class="releaseDate">
            <div class="sub">Release Date</div>
            <div>{{-- $game->createdAt --}}</div>
        </div>
        <div class="revs">
            <div class="sub">All Reviews</div>
            <div>{{-- jumlah review positiv dan negati --}}</div>
        </div>
    </div>
    <div class="recc">
        <div class="sub">More Like This</div>
        <div class="moreGames"> {{--musinya ini nampilin game yang kategorinya sama--}} </div>
    </div>
    {{-- <div class="review">
        <div class="newReview">
            <div class="sub">Leave A Review!</div>
            <form action="">
                <input type="radio" name="recc" id="yes">
                <label for="ch">Reccomend</label>
                <input type="radio" name="rec" id="no">
                <label for="ch">Not Reccomended</label>
                <textarea name="review" id="" cols="30" rows="10"></textarea><br>
                <input type="submit" value="POST">
            </form>
            </div>
        <div class="reviews">
            @foreach ($reviews as $review)
                <div class="card text-dark m-2" style="width: 18rem;">
                    // username
                    <img class="img-badge img-circle me-3" src="{{$game->gameThumbnail}}" alt="" >
                    // recomended/not
                    // reviews
                    <div class="card-body">
                    <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
                    <p class="card-text">
                        <span>{{ $game->description }}</span>
                    </p>
                    <h5 class="card-title"><b>{{$game->price}}</b></h5>
                    <a href="/game/{{$game->id}}" class="btn btn-primary bg-blue"><i class="fas fa-compact-disc"></i> View Games</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}

</div>

@endsection