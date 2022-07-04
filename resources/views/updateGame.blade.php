@extends('master')
@section('title', ' | Add Game')

@section('content')
    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center m-4 pt-4">
        <div class="bg-white m-4 p-4 rounded shadow">
            <div>
                <h3 class="text-center">Update Game</h3>
            </div>
            <div>
                <form action="/game/add-process" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group input-group">
                        <input type="text" class="form-control" value="{{$game->gameName}}" name="title" id="title" placeholder="Title">
                    </div>
                    <div class="form-group input-group">
                        {{-- <label for="category" class="input-group-prepend input-group-text">Category</label> --}}
                        <select id="category" class="form-control" name="category" placeholder="Category">
                            <option disabled selected placeholder="Category">Category</option>
                            @foreach ($category as $ctg)
                                <option value="{{$ctg->id}}">{{$ctg->categoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" value="{{$game->price}}" name="price" id="price" placeholder="Price">
                    </div>
                    <div class="input-group mb-2">
                        <label class="input-group-text" for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail" id="thumbnail">
                    </div>
                    <div class="input-group">
                        <label class="input-group-text" for="slider[]">Slider</label>
                        <input type="file" multiple class="form-control" name="slider[]" id="slider">
                    </div>
                    
                    <div class="form-group">
                        <textarea name="description" id="description" cols="75" rows="5"  placeholder="Description"></textarea><br>
                    </div>
                    <br>
                    <input type="submit" class="btn bg-navy text-light" value="ADD GAME">
                </form>
            </div>

            <div class="text-center text-danger">
                @if ($errors->any())
                {{-- {{ dd($errors->all()) }} --}}
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
@endsection