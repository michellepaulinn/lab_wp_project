@extends('master')
@section('title', ' | Register')

@section('content')
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@elseif (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center m-4">
        <div class="bg-white p-4 col-md-5 rounded shadow m-4">
            <div>
                <h1 class="text-center">Register</h1>
            </div>
            <div>
                <form action="/register-process" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating my-2">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" id="name">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" required name="email" id="email">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password" id="password">
                        <label for="password">Password</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating my-2">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" required name="password_confirmation" id="password_confirmation">
                        <label for="password">Confirm Password</label>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class= "d-flex justify-content-between mt-2">
                        <a href="/login">Already have an account? Login Now</a>
                        <input type="submit" class="btn bg-navy text-light" value="REGISTER">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    


 @endsection


    

