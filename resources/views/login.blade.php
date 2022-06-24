@extends('master')
@section('title', ' | Login')

@section('content')

    <div class="h-100 w-100 d-flex flex-column align-items-center justify-content-center m-4 pt-4">
        <div class="bg-white m-4 p-4 rounded shadow">
            <div>
                <h1 class="text-center">Login</h1>
            </div>
            <div>
                <form action="/login-process" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    {{-- <br> --}}
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="poster">
                        {{-- <br> --}}
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe"><label for="rememberMe" class="form-check-label">Remember Me</label>
                        <br>
                    </div>
                    <a href="/register" >Don't have an account? Register Now!</a>
                    <br>
                    <input type="submit" class="btn bg-navy text-light my-2" value="LOG IN">
                </form>
                <div class="text-danger text-center">
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