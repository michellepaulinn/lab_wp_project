@extends('master')
@section('title', ' | Add Category')

@section('content')
@if (session('warning'))
    <div class="alert alert-danger">
        {{ session('warning') }}
    </div>
@endif
    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center m-4 pt-4">
        <div class="bg-white m-4 p-4 rounded shadow w-50">
            <div>
                <h3 class="text-center">Add Category</h3>
            </div>
            <div>
                <form action="/category/add-process" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="category" id="category" placeholder="Category">
                    </div>
                    <br>
                    <input type="submit" class="btn bg-navy text-light" value="ADD CATEGORY">
                </form>
            </div>
        </div>
    </div>
@endsection