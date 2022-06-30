@extends('master')
@section('title', ' | Cart')

@section('content')

<div class="m-auto top-3 px-2 pb-4 d-flex flex-column" style="width:80%;">
    <h3 class="m-4">Your Cart</h5>
    
    <div class="games w-100" >
        <div>
            @include('rowCards',['games'=>$games, 'stat'=>'cart'])
        </div>
        <div class="m-2 px-3 card d-flex flex-row">
            <div class="card-body flex-grow">
                <div>Total</div>
                <div class="sub">{{ count($cartDetails) }} games</div>
            </div>
            <div class="align-self-center">IDR {{number_format($totalPrice)}}</div>
        </div>
    </div>
    <div class="align-self-end m-2">
        <a href="/" class="btn bg-navy text-light ">Check Out</a>
    </div>
        
    
</div>

@endsection