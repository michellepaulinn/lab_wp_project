@extends('master')
@section('title', ' | '.$game->gameName)

@section('content')

<div class="justify-content-center m-auto py-4 "style="width:70%;">
    <div class="gameVisual d-flex flex-row m-4">
        <div class="card text-dark m-2 shadow-sm" style="width: 12rem;">
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

        <div class="slider flex-shrink" style="width:80%;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('/images/'.$game->gameThumbnail)}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/'.$game->gameThumbnail)}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('/images/'.$game->gameThumbnail)}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>

    <div class="gameExplain bg-white d-flex justify-content-around py-4 my-4 rounded align-self-start">
        <div class="genre align-self-start">
            <div class="sub">Genre</div>
            <div> <strong> Contoh Genre{{-- $game->genre->id--}}</strong></div>
        </div>
        <div class="releaseDate">
            <div class="sub">Release Date</div>
            <div > <strong>Contoh Date{{-- $game->createdAt --}}</strong> </div>
        </div>
        <div class="revs">
            <div class="sub">All Reviews</div>
            <div>{{-- jumlah review positiv dan negati --}}</div>
        </div>
    </div>
    <div class="recc">
        <div class="sub">More Like This</div>
        <div class="moreGames"> {{--musinya ini nampilin game yang kategorinya sama--}} 
            {{-- Di controllernya bikin logic kirim more 3 games w/o the same id as this one --}}
            {{-- @foreach($more as $m)
                <div style="width:12rem;">
                    <img class="card-img" src="{{ asset('/images/'.$game->gameThumbnail)}}" alt="" >
                    <div>{{$m->price}}</div>
                </div>
            @endforeach --}}
        </div>
    </div>
    <div class="review">
        <div class="newReview rounded shadow-sm bg-white p-4">
            <div class="sub">Leave A Review!</div>
            <form action="">
                <input type="radio" name="recc" id="yes">
                <label for="ch">Reccomend</label>
                <input type="radio" name="rec" id="no">
                <label for="ch">Not Reccomended</label>
                <br>
                <textarea name="review" id="" cols="75" rows="5"></textarea><br>
                <input type="submit" value="POST" class="btn bg-navy text-light">
            </form>
            </div>
        <div class="reviews">
            {{-- @foreach ($reviews as $review) --}}
                <div class="card text-dark card m-2 shadow-sm p-2" style="width: 18rem;">
                    {{-- mskin ke div card-body  --}}
                    {{-- // username --}}
                    <div class="card-title">
                        <h6>{{-- $review->member->name --}} Username</h6>
                    </div>
                    {{-- // recomended/not --}}
                    {{-- @if ($review->recommended) --}}
                        {{-- <img class="img-badge img-circle me-3" src="{{$game->gameThumbnail}}" alt="" > --}}
                    {{-- @else  --}}

                    {{-- @endif  --}}
                    <div>
                        {{-- <div> <img src="{{assets('')}}" alt=""></div> --}}
                        <div><h6>Reccomended</h6></div>
                    </div>
                    {{-- // reviews --}}
                    <p class="card-text">
                        <span>cth description</span>
                    </p>
                   
                </div>
            {{-- @endforeach --}}
        </div>
    </div>

</div>

@endsection