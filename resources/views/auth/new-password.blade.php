@extends('app.layout')
@section("title","new-Password")
@section("content")
<main>
    <div class="ms-auto me-auto mt-5" style="width: 500px">
       <div class="mt-5">
        @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger"{{session('error')}}></div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success"{{session('succes')}}></div>
         @endif
        </div>
        <p>We will send a link to your email, use that link to reset password.</p>
        <form method="POST" action="{{route('reset.password.post')}}">
            @csrf
            <input type="text" name="token" hidden value="{{$token}}">
            <div class="mb-3">
                <input type="email" placeholder="Email"
                 class="form-control" name="email" required autofocus>
            </div>
            <div class="mb-3">
                <input type="text" placeholder="Enter New Password"
                 class="form-control" name="password" required autofocus>
            </div>
            <div class="mb-3">
                <input type="text" placeholder="password_confirmation"
                 class="form-control" name="passswordConfirm" required autofocus>
            </div>
            <div class="d-grid mx-auto">
                <button type="submit" class="btn btn-dark btn-block">Sign In</button>
            </div>
          </form>
    </div>
</main>
@endsection