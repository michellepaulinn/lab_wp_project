@extends('master')
@section('content')

<div class="container d-flex justify-content-center align-items-start flex-row flex-wrap">
    <form action="/search" class="container d-flex justify-content-center align-items-center mt-2" method="GET">
        <input type="text" class="form-control w-50 me-2" placeholder="Search.." name="keyword">
        <button class="btn bg-green" type="submit"><span class="material-icons">search</span></button>
    </form>
</div>

<div class="m-4">
   <div class="container justify-content-center m-auto px-4">
     {{-- Featured --}}
     <div>
         <h2 class="text-left">Featured Games</h2>
     </div>
     @include('columnCards', ['games' => $featured])
    <div >
        <h2 class="text-left">Hot</h2>
    </div>
    @include('rowCards', ['games'=>$hot, 'stat'=>'cart'])
</div>


 @endsection