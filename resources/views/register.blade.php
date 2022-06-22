@extends('master')
@section('title', ' | Register')

@section('content')
    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center m-4">
        <div class="bg-white p-4 w-25 rounded shadow m-4">
            <div>
                <h1 class="text-center">Register</h1>
            </div>
            <div>
                <form action="/registerProcess" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label><input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label><input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password</label><input type="password" class="form-control" name="password2" id="password2">
                    </div>
                    <div class= "d-flex justify-content-between mt-2">
                        <a href="/login">Already Register? </a>
                        <input type="submit" class="btn bg-navy text-light" value="REGISTER">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    @if ($errors->any())
    {{-- {{ dd($errors->all()) }} --}}
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif

 @endsection


    

