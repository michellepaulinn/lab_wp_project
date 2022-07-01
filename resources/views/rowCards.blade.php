<div>
    {{-- {{dd($games )}} --}}
    @foreach ($games as $game)
        <div class="card mx-2 flex-row p-2">
            <div>
                <img src="{{asset('/thumbnails/'.$game->gameThumbnail)}}" class="card-img-left cart-img rounded" alt="...">
            </div>
            <div class="card-body ml-auto flex-grow">
                <a href="/game/details/{{$game->id}}">
                    <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
                </a>
                <h6 class="card-text"><p>{{$game->category->categoryName}}</p></h6>
            </div>
            <div class="align-self-center">
                @if($game->price === 0)
                <h6 class="card-title align-text-right"><b>FREE</b></h6>
                @else
                <h6 class="card-title align-text-right"><b>IDR {{number_format( $game->price)}}</b></h6>
                @endif
                <div class="d-flex">
                @if($stat === 'cart')
                    <a href="" class="text-light btn btn-danger">REMOVE</a>
                @elseif($stat === 'manage')
                    <a href="" class="text-light btn bg-navy">UPDATE</a>
                    <form action="/game/remove/{{$game->id}}" method="post">
                    @csrf
                        <button  class="text-light btn btn-danger" onclick=" return confirm('Are You Sure?')">REMOVE</button>
                    </form>
                @endif
                    {{-- @elseif --}}

                </div>
            </div>
        </div>
        @endforeach
</div>