@extends('master')
@section('title', ' | Cart')

@section('content')

<div>
    <div class="sub">Your Cart</div>
    
    <div class="games">
        @foreach ($games as $game)
            <div class="gameImage">
                <img src="{{$game->gameThumbnail}}" alt="">
            </div>
            <div>
                <div>{{$game->gameName}}</div>
                <div class="sub">{{-- category name--}}</div>
            </div>
            <div>
                <div class="sub">IDR {{$game->gamePrice}}</div>
                <div class="btn"><button>REMOVE</button></div>
            </div>
        @endforeach
        <div>
            <div>Total</div>
            <div class="sub">{{-- item counts --}} games</div>
        </div>
        <div>IDR {{-- total price --}}</div>
    </div>

    <div class="btn">
        <button>CHECKOUT</button>
    </div>
</div>

@endsection