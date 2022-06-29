@extends('master')
@section('title', ' | Add Game')

@section('content')
    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center m-4 pt-4">
        <div class="bg-white m-4 p-4 rounded shadow">
            <div>
                <h3 class="text-center">Add Game</h3>
            </div>
            <div>
                <form action="/game/add-process" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="gameTitle" id="gameTitle" placeholder="Title">
                    </div>
                    <div class="form-group">
                        {{-- Tanya, categorynya boleh pake dropdown ga? --}}
                        <input type="text" class="form-control" name="category" id="category" placeholder="Category">
                    </div>
                    <div class="form-group">
                        {{-- <p class="bg-secondary">IDR</p> --}}
                        <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="Thumbnail">
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Slider</label>
                       <input type="file" multiple class="form-control" name="slider" id="slider" placeholder="Slider">
                    </div>
                    <div class="form-group">
                        <textarea name="review" id="" cols="75" rows="5" placeholder="Description"></textarea><br>
                    </div>




                    <br>
                    <input type="submit" class="btn bg-navy text-light" value="ADD GAME">
                </form>
            </div>
        </div>
    </div>
@endsection