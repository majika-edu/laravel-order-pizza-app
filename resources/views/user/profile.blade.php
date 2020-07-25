@extends('layouts.master')

@section('content')
<div class="wrapper fadeInDown">
  <h1 class="mt-3" align="center">User Profile</h1>
  <hr>
  <h2>Your Orders</h2>
  <div class="row">
  @foreach($orders as $order)
    <div class="card">
      <div class="card-header">
        <strong>Total Price: {{ number_format($order->cart->totalPrice, 2) }} $</strong>
      </div>
      <div class="card-body">
        <ul class="list-group">
           @foreach($order->cart->items as $item )
            <li class="list-group-item">
              <span class="badge">{{ number_format($item['price'], 2) }} $</span>
           </li>
           <li class="list-group-item">
              <span class="badge">{{ $item['item']['title'] }}</span>
           </li>
           <li class="list-group-item">
              <span class="badge">{{ $item['qty'] }} Unit(s) </span>
           </li>
          @endforeach 
        </ul>
      </div>
  </div>
    @endforeach
  </div>
</div>
@endsection 