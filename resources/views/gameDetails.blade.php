@extends('master')
@section('title', ' | '.$game->gameName)

@section('content')

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@elseif (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif

<div class="justify-content-center m-auto py-4 "style="width:70%;">
    <div class="gameVisual d-flex flex-row m-4">
        <div class="card text-dark m-2 shadow-sm" style="width: 12rem;">
            <img class="card-img" src="{{ asset('/thumbnails/'.$game->gameThumbnail)}}" alt="" >
            <div class="card-body">
              <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
              <p class="card-text">
                <span>{{ $game->description }}</span>
              </p>
              <h6 class="card-title align-text-right"><b>{{ number_format($game->price)}}</b></h6>
              <form action="/add-cart" method="post">
                    @csrf
                    <input type="hidden" name="game_id" value="{{ $game->id }}">
                    <button type="submit" class="btn bg-navy text-light">Add to Cart</button>
              </form>
            </div>
        </div>
        {{-- Gimana caranya masukin source ke carousel pake foreach? --}}
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @php $i = 0; $x = 'active' @endphp
                @foreach ($gameSliders as $slider)
                @php if($i == 0) $x = 'active'; else $x = '';  @endphp
                    <div class="carousel-item {{$x}}">
                        <img src="{{ asset('/sliders/'.$slider->slider_image)}}" class="d-block w-100" alt="Image Slider {{$i}}">
                    </div>
                    @php $i++; @endphp
                @endforeach
                {{-- <div class="carousel-item active">
                    <img src="{{asset('/sliders/valorant1.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/sliders/valorant2.jpg')}}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('/sliders/valorant3.jpg')}}" class="d-block w-100" alt="...">
                  </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div class="gameExplain bg-white d-flex justify-content-around py-4 my-4 rounded align-self-start">
        <div class="genre align-self-start">
            <div class="sub">Genre</div>
            <div> <strong>{{$game->category->categoryName}}</strong></div>
        </div>
        <div class="releaseDate">
            <div class="sub">Release Date</div>
            <div > <strong>{{ $game->createdAt }}</strong> </div>
        </div>
        <div class="revs">
            <div class="sub">All Reviews</div>
            <div>
                <div>
                    {{$pos}} Recommended
                </div>
                <div>
                    {{$neg}} Not Recommended
                </div>
            </div>
        </div>
    </div>
    <div class="recc">
        <div class="sub-bold">More Like This</div>
        <div class="moreGames d-flex"> {{--musinya ini nampilin game yang kategorinya sama--}} 
            {{-- Di controllernya bikin logic kirim more 3 games w/o the same id as this one --}}
            @foreach($more as $m)
                <div class="m-4" style="width:15rem;">
                    <img class="card-img" src="{{ asset('/thumbnails/'.$m->gameThumbnail)}}" alt="" >
                    <div>
                        @if ($m->price == 0)
                        FREE
                        @else
                        {{number_format($m->price)}}    
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="review">
        <div class="newReview rounded shadow-sm bg-white p-4">
            <div class="sub-bold">Leave A Review!</div>
            <form action="/add-review/{{$game->id}}" method="post">
                @csrf
                <input type="radio" value="yes" name="rec" id="yes">
                <label for="rec">Recommended</label>
                <input type="radio" value="no" name="rec" id="no">
                <label for="rec">Not Recommended</label>
                <br>
                <textarea name="review" id="" cols="75" rows="5"></textarea><br>
                <input type="submit" value="POST" class="btn bg-navy text-light">
            </form>

            <div>
                @if($errors->any())
                    {{$errors}}
                @endif
            </div>

            </div>
        <div class="reviews my-4">
            <h5>Reviews</h5>
            <div class="d-flex flex-wrap">
                @foreach ($reviews as $review)
                <div class="card text-dark card m-2 shadow-sm p-4" style="width: 17rem;">
                    {{-- mskin ke div card-body  --}}
                    {{-- // username --}}
                    <div class="card-title">
                        <h6>{{ $review->user->name }}</h6>
                    </div>
                    {{-- // recomended/not --}}
                    @if ($review->recommended)
                    <div>
                        <div class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                              </svg>
                            <h6 class="mx-2">Recommended</h6>
                        </div>   
                    </div> 
                    @else
                    <div> 
                        <div class="d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                                <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.378 1.378 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51.136.02.285.037.443.051.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.896 1.896 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2.094 2.094 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.162 3.162 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.823 4.823 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591z"/>
                              </svg>
                            <h6 class="mx-2">Not Recommended</h6>
                        </div>  
                    </div>
                    @endif
                    {{-- // reviews --}}
                    <p class="card-text">
                        <span>{{ $review->isiReview }}</span>
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection