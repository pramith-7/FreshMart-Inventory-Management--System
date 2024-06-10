@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 ">
        <div class="pull-left">
            <h2>Item </h2>
        </div>
    </div>
</div>

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Name : {{ $product->name }}</p>
      <p class="card-text">Description : {{ $product->detail }}</p>
      <p class="card-text">Price : {{ $product->price }}</p>
      <a href="{{ route('products.index') }}" class="btn btn-primary">Go Back</a>
    </div>
  </div>

@endsection