@extends('app.layout')
@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-success" href="{{route('product.index')}}">Product</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
            Content area...
        </div>
    </div>
</div>
@endsection