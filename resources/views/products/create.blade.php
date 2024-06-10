@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add new product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>There's an error in your input !!</strong><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

{{-- @if($success->any())
<div class="alert alert-danger">
    <strong>There's an error in your input !!</strong><br>
</div>
@endif --}}

<form action="{{ route('products.store') }}" method="POST">
@csrf

<div class="row">
    <div class="form-group">
        <strong>Name</strong>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
</div>

<div class="row">
    <div class="form-group">
        <strong>Price</strong>
        <input type="number" name="price" class="form-control" placeholder="Price">
    </div>
</div>

    <div class="form-group">
        <strong>Description</strong>
        <textarea class="form-control" style="height: 150px" name="detail" placeholder="Description"></textarea>
    </div>

    <div class="col-xs-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>


</form>

@endsection


