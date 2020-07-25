@extends('layouts.master')

@section('content')
@if(Session::has('success'))
 <div class="row justify-content-center">
     <div class="col-md-4 col-sm-6 my-3">
         <div class="alert alert-success">
             {{ Session::get('success')}}
         </div>
     </div>
@endif
 <div class="row">
   @foreach($pizzas as $pizza )
    <div class="col-sm-6 col-md-4 my-5">
        <div class="card" style="width: 18rem;">
        <img src="{{ $pizza->imagePath }}" class="card-img-top" alt="Pizza"  style="height: 200px; width: 250px;">
        <div class="card-body">
            <h5 class="card-title">{{ $pizza->title }}</h5>
            <div class="mb-5">
            <p class="card-text text-truncate" >{{ $pizza->description }}</p>
            </div>
            <div class="clearfix">
                <div class="float-left price" style="font-weight: bold; font-size: 16px; ">${{ $pizza->price }}</div>
                <a href="{{ route('pizza.addToCart', $id = $pizza->id, ['id' => $pizza->id] ) }}" class="btn btn-success  float-right">Add To Cart</a>
            </div>
        </div>
        </div>
    </div>
    @endforeach 
 </div>  




@endsection
