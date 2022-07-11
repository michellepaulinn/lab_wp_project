<div>
    {{-- {{dd($games )}} --}}
    @foreach ($games as $game)
        <div class="card mx-2 flex-row p-2">
            <div class="self-align-center">
                <img src="{{asset('/thumbnails/'.$game->gameThumbnail)}}" class="card-img-left cart-img rounded" alt="...">
            </div>
            <div class="card-body ml-auto flex-grow align-self-center">
                <a href="/game/details/{{$game->id}}">
                    <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
                </a>
                <h6 class="card-text"><p>{{$game->category->categoryName}}</p></h6>
            </div>
            <div class="align-self-center">
                @if($game->price === 0)
                <h6 class="card-title text-end mx-2"><b>FREE</b></h6>
                @else
                <h6 class="card-title text-end mx-2"><b>IDR {{number_format( $game->price)}}</b></h6>
                @endif
                @if($stat === 'cart')
                <div class="d-flex">
                    <form action="/cart/remove" method="post">
                        @csrf
                        <input type="hidden" name="game_id" value="{{ $game->id }}">
                        <button type="submit" class="mx-2 text-light btn btn-danger">REMOVE</button>
                    </form>
                </div>
                @elseif($stat === 'manage')
                <div class="d-flex">
                    <a href="/game/update/{{$game->id}}" class=" mx-2 text-light btn bg-navy">UPDATE</a>
                    <form action="/game/remove/{{$game->id}}" method="post">
                    @csrf
                        <button  class=" mx-2 text-light btn btn-danger" onclick=" return confirm('Are You Sure?')">REMOVE</button>
                    </form>
                </div>
                @endif
                    {{-- @elseif --}}

            </div>
        </div>
        @endforeach
        
</div>