@extends('layouts.app')
<style media="screen">
  .lo{
    background: red;
    padding: 100px;

  }
  .loo{
    background: yellow;
    padding: 100px;

  }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           @if(Auth::User()->role ==2)
          <div class="lo"></div><br><br>
          @endif
          <div class="loo"></div><br><br>
        </div>
    </div>
</div>
@endsection
