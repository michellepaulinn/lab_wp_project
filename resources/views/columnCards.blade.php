<div class="d-flex flex-row justify-content-around flex-wrap">
    @foreach ($games as $game)
    <a href="/game/details/{{$game->id}}">
        <div class="card text-dark" style="width: 12rem;">
           <img class="card-img" src="{{ asset('/thumbnails/'.$game->gameThumbnail)}}" alt="" >
           <div class="card-body">
               <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
               <p class="card-text">
                   <span>{{ $game->description }}</span>
               </p>
               @if($game->price === 0)
                    <h6 class="text-right"><b>FREE</b></h6>
               @else
                    <h6 class="text-right"><b>IDR {{number_format( $game->price)}}</b></h6>
               @endif
           </div>
       </div>
   </a>
   @endforeach
</div>