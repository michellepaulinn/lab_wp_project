@extends('master')

@section('title',' | Manage Game')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="top-3 px-2 pb-4 d-flex flex-column" style="width:80%;">
        <div class="m-4 align-self-center">
            <a href="/game/add" class="text-light btn bg-navy">Add New Game</a>
        </div>
        <div>
            @include('rowCards', ['games'=>$games, 'stat'=>'manage'])
        </div>
    </div>
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
@endsection