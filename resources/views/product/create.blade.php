@extends('app.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Create New Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('product.index')}}">Back</a>
                </div>
            </div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong>There were some problems with your input.<br><br>
    
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('product.store')}} " method="POST">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ProductName:</strong>
                        <input type="text" name="product_name" class="form-control" placeholder="productname">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantity:</strong>
                        <input type="number" name="quantity" class="form-control" placeholder="quantity">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Price:</strong>
                        <input type="number" name="price" class="form-control" placeholder="price">
                    </div>
                </div>
    
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Amount:</strong>
                        <input type="number" name="amount" class="form-control" placeholder="amount">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Sells:</strong>
                        <input type="text" name="sells" class="form-control" placeholder="sells">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection