@extends('layouts.master')

@section('content')
@if(Session::has('cart'))
<div class="wrapper fadeInDown">
  <h2 class="mt-5 mb-3" align="center">Your Cart</h2>
      <div class="row justify-content-center">
           
                @foreach($pizzas as $pizza )
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Qty: {{ $pizza['qty'] }}</strong></li>
                        <li class="list-group-item"><strong>Pizza: {{ $pizza['item']['title'] }}</strong></li>
                        <li class="list-group-item"><strong>$: {{ number_format($pizza['price'], 2) }}</strong></li>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm">
                                    <a class="dropdown-item" href="{{ route('pizza.reduceByOne', $id = $pizza['item']['id'], ['id' => $pizza['item']['id'] ]) }}">Reduce By One</a>
                                </button>
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary btn-sm">
                                    <a class="dropdown-item" href="{{ route('pizza.remove', $id = $pizza['item']['id'], ['id' => $pizza['item']['id'] ]) }}">Remove All</a></button>
                                </div>
                            </div>
                        </div>
                        
                    </ul>
                </div>    
                @endforeach 
        </div>
        <div class="row justify-content-center my-5">
            <div class="card">
                <strong><p>Total Price: {{ number_format($totalPrice, 2) }} $</p></strong>
            </div>

        </div>

        <div class="row justify-content-center mb-3">
            <div class="dard">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
         
   @else 

       <div class="row justify-content-center my-5">
            <div class="card">
                <h1>No Items in Cart</h1>
            </div>
       </div>

@endif 
</div>



@endsection 
