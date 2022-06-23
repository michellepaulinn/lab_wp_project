@extends('master')

@section('title',' | Manage Game')

@section('content')
<div class="m-auto top-3 px-2 pb-4 d-flex flex-column" style="width:80%;">
    <div class="m-4 align-self-center">
        <a href="/game/add" class="text-light btn bg-navy">Add New Game</a>
    </div>
    <div>
        @include('rowCards', ['games'=>$games, 'stat'=>'manage'])
    </div>
</div>
@endsection