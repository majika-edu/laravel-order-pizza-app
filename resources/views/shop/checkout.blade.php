@extends('layouts.master')

@section('content')

<div class="wrapper fadeInDown">
  <h2 class="mt-5 mb-3">Checkout</h2>
  <h5>Your Total: {{ $total }} $</h5>
    <div id="formContent">
        <form action="{{ route('checkout') }}" method="post" class="clearfix mt-5" id="checkout-form">
            <div class="col-md-12">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" required>
            </div>
            <div class="col-md-12">
                <label for="">Address</label>
                <input type="text" name="address" id="address" class="form-control"  placeholder="" required>
            </div>
            <div class="col-md-12">
                <label for="">Card Holder Name</label>
                <input type="text" name="card-name" id="card-name" class="form-control"  placeholder="" required>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <label for="">Expiration Month</label>
                    <input type="text" name="card-expiry-month" id="card-expiry-month" class="form-control"  placeholder="" required>
                </div>
                <div class="col-md-5">
                    <label for="">Expiration Year</label>
                    <input type="text" name="card-expiry-year" id="card-expiry-year" class="form-control"  placeholder="" required>
                </div>
            </div>
            <div class="col-md-12">
                <label for="">CVC</label>
                <input type="text" name="card-cvs" id="card-cvs" class="form-control"  placeholder="" required>
            </div>
            {{ csrf_field() }}

            <div class="d-flex justify-content-end" style="padding: 30px 20px 20px 20px;">
                <button class="btn btn-success" type="submit" style="display:block; margin: 0 auto;">
                Buy Now
                </button>
            </div>
        </form>
    </div>
</div>
@endsection 