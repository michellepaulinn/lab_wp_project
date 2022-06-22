<div class="d-flex flex-row justify-content-center ">
    @foreach ($games as $game)
    <a href="/game/{{$game->id}}">
        <div class="card text-dark m-2" style="width: 12rem;">
           <img class="card-img" src="{{ asset('/images/'.$game->gameThumbnail)}}" alt="" >
           <div class="card-body">
               <h5 class="card-title"><b>{{$game->gameName}}</b></h5>
               <p class="card-text">
                   <span>{{ $game->description }}</span>
               </p>
               @if($game->price === 0)
               <h6 class="card-title align-text-right"><b>FREE</b></h6>
               @else
               <h6 class="card-title align-text-right"><b>IDR {{$game->price}}</b></h6>
               @endif
           </div>
       </div>
   </a>
   @endforeach
</div>