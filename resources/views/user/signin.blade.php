@extends('layouts.master')

@section('content')
<div class="wrapper fadeInDown">
  <h2 class="mt-5" align="center">Sign In</h2>
  @if(count($errors) > 0)
            <div class="alert alert-danger">
            @foreach($errors as $e)
                <p>{{ $e}}</p>
            @endforeach
            </div>
    @endif
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="" id="icon" alt="User Icon" /> -->
    </div>
    <!-- Login Form -->
    <form action="{{ route('user.signin') }}" method="post" class="clearfix mt-5">
      <div class="col-md-12">
        <label for="inputEmail"></label>
        <input type="email" name="email" id="email" class="form-control" id="inputEmail" placeholder="">
      </div>
      <div class="col-md-12">
        <label for="inputPassword"></label>
        <input type="password" name="password" id="email" class="form-control" id="inputPassword" placeholder="">
      </div>
     

      <div class="d-flex justify-content-end" style="padding: 30px 20px 20px 20px;">
        <button class="btn btn-success" type="submit" style="display:block; margin: 0 auto;">
            <i class="fas fa-user-plus"></i>
           Sign In
        </button>
        {{ csrf_field() }}
      
      </div>
    </form>

  </div>
</div>
@endsection 

