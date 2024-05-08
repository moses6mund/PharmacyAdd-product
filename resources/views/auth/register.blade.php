@extends('app.layout')
@section("title", "Register")
@section("content")
    <main class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    @if(session()->has("success"))
                        <div class="alert alert-success">
                            {{session()->get("success")}}
                        </div>
                    @endif
                    @if(session()->has("error"))
                         <div class="alert alert-danger">
                        {{session()->get("error")}}
                         </div>
                     @endif
                    <div class="card">
                        <h3 class="card-header text-center">Register</h3>
                        <div class="card-body">
                            <form method="POST" action="{{route('register.post')}}">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" placeholder="fullname"
                                     class="form-control" name="name" required>
                                     @if($errors->has('name'))
                                     <span class="text-danger">
                                        {{$errors->first('name')}}
                                     </span>
                                     @endif
                                  </div>
                                <div class="mb-3">
                                    <input type="email" placeholder="Email"
                                     class="form-control" name="email" required>
                                     @if($errors->has('email'))
                                     <span class="text-danger">
                                        {{$errors->first('email')}}
                                     </span>
                                     @endif
                                  </div>
                                <div class="mb-3">
                                  <input type="password" placeholder="Password"
                                   class="form-control" name="password" required>
                                   @if($errors->has('password'))
                                     <span class="text-danger">
                                        {{$errors->first('password')}}
                                     </span>
                                     @endif
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Register Account</button>
                                </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection