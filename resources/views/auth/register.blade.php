@extends('layouts.app')

@section('content')

    <!-- HERO SECTION-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Login</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                        <li class="breadcrumb-item"><a class="text-dark" href="{{ route('front.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


        
    <section class="py-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2 class="h5 text-uppercase">{{ __('Register') }}</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="first_name" class="text-small text-uppercase">First Name</label>
                                    <input type="text" name="first_name" id="" class=" form-control" value="{{ old('first_name') }}" placeholder="Enter Your Name">
                                    @error('first_name') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>

                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="last_name" class="text-small text-uppercase">Last Name</label>
                                    <input type="text" name="last_name" id="" class=" form-control" value="{{ old('last_name') }}" placeholder="Enter Your Name">
                                    @error('last_name') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="userName" class="text-small text-uppercase">User Name</label>
                                    <input type="text" name="username" id="" class=" form-control" value="{{ old('username') }}" placeholder="Enter Your Name">
                                    @error('username') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="email" class="text-small text-uppercase">User Name</label>
                                    <input type="text" name="email" id="" class=" form-control" value="{{ old('email') }}" placeholder="Enter Your Name">
                                    @error('email') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="mobile" class="text-small text-uppercase">Mobile Number</label>
                                    <input type="text" name="mobile" id="" class=" form-control" value="{{ old('mobile') }}" placeholder="Enter Your Name">
                                    @error('mobile') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="password" class="text-small text-uppercase">Password</label>
                                    <input type="text" name="password" id="" class=" form-control" value="{{ old('password') }}" placeholder="Enter Your Name">
                                    @error('password') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="password_confirmation" class="text-small text-uppercase">Password</label>
                                    <input type="text" name="password_confirmation" id="" class=" form-control" value="{{ old('password_confirmation') }}" placeholder="Enter Your Name">
                                    @error('password_confirmation') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">{{ __('Register') }}</button>
                                    @if (Route::has('login'))
                                        <a href="{{ route('login') }}" class="btn btn-link">
                                            {{ __('Have an account?') }}
                                        </a>
                                    @endif
                                </div>
                            </div><br>

                        </div>
                    </form>
            </div>
        </div>
    </section>
@endsection
