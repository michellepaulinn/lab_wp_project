@extends('master')

@section('title',' | Manage Game')

@section('content')
<div class="m-auto top-3 px-2 pb-4 d-flex flex-column" style="width:80%;">
    <div class="m-4 align-self-center">
        <a href="/category/add" class="text-light btn bg-navy">Add New Category</a>
    </div>
    <div>
        @foreach($category as $ctg)
        <div class="card mx-2 flex-row p-2">
            <div class="card-body ml-auto flex- align-self-center">
                <h5 class="card-title">{{$ctg->categoryName}}</h5>
            </div>
            <div class="align-self-center d-flex">
                <a href="/category/update/{{$ctg->id}}" class="mx-2 text-light btn bg-navy">UPDATE</a>
                <form action="/category/remove/{{$ctg->id}}" method="post">
                    @csrf
                        <button  class=" mx-2 text-light btn btn-danger" onclick=" return confirm('Are you sure?')">REMOVE</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection