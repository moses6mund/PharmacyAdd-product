@extends('app.layout')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('product.index')}}">Back</a>
                </div>
            </div>
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems in your input.<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{route('product.update',$products->id)}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>ProductName</strong>
                        <input type="text" name="product_name" value="{{$products->product_name}}" class="form-control" placeholder="productname">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>Quantity</strong>
                        <input type="text" name="quantity" value="{{$products->quantity}}" class="form-control" placeholder="quantity">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>Price</strong>
                        <input type="text" name="price" value="{{$products->price}}" class="form-control" placeholder="price">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>Amount</strong>
                        <input type="text" name="amount" value="{{$products->amount}}" class="form-control" placeholder="amount">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-control">
                        <strong>Sells</strong>
                        <input type="text" name="sells" value="{{$products->sells}}" class="form-control" placeholder="sells">
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
   </div>
@endsection