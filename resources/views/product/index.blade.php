@extends('app.layout')
@section('content')
<div class="container">
    <h1 class="text-center pt-4">Searching your product <strong class="text-danger">Gallah Pharmacy & Cosmetics</strong></h1>
    <hr>

    <div class="row py-2">
        <div class="col-md-6">
            <h2 ><a href="{{route('product.create')}}" class="btn btn-success">Adding New Product</a></h2>
        </div>
    <div class="col-md-6">
            <div class="form-group">
                    <div class="search">
                        <input type="search" class="form-control" name="search" id="search" 
                         placeholder="search...">
                    </div>
            </div>
        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col">Sells</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="alldata">
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->amount}}</td>
                    <td>{{$product->sells}}</td>
                    <td>
                            <form action="{{route('product.destroy',$product->id)}}" method="POST">
                                    <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary col-sm">Edit</a>
                                 @csrf
                                 @method('DELETE')
                                    <button type="submit" class="btn btn-danger col-sm">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
            <tbody id="Content" class="searchdata"> </tbody>
    </table>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#search").on('keyup',function(){

           $value = $(this).val();
           if($value){
                $('.alldata').hide();
                $('.searchdata').show();
           }else{

                $('.alldata').show();
                $('.searchdata').hide ();

           }

           $.ajax({

            type: 'get',
            url: '{{URL::to('search')}}',
            data: {'search':$value},

            success:function(data)
            {
                console.log(data);
                $('#Content').html(data);
            }
            
           });
        })
    })
    </script>
</div>

@endsection