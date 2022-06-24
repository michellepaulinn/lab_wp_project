@extends('master')
@section('title', ' | Register')

@section('content')
    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center m-4">
        <div class="bg-white p-4 w-50 rounded shadow m-4">
            <div>
                <h1 class="text-center">Register</h1>
            </div>
            <div>
                <form action="/register-process" method="post" enctype="multipart/form-data">
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
                        <label for="password">Confirm Password</label><input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                    </div>
                    <div class= "d-flex justify-content-between mt-2">
                        <a href="/login">Already have an account? Login Now</a>
                        <input type="submit" class="btn bg-navy text-light" value="REGISTER">
                    </div>
                </form>
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
    </div>
    


 @endsection


    

