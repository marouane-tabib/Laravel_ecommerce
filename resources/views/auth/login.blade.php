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
                    <h2 class="h5 text-uppercase">{{ __('Login') }}</h2>
                    <form action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="userName" class="text-small text-uppercase">User Name</label>
                                    <input type="text" name="username" id="" class=" form-control" value="{{ old('username') }}" placeholder="Enter Your Name">
                                    @error('username') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <label for="password" class="text-small text-uppercase">User Password</label>
                                    <input type="text" name="password" id="" class=" form-control" value="{{ old('password') }}" placeholder="Enter Your Password">
                                    @error('password') <span class="text-danger"> {{ $message }} </span>@enderror
                                </div>
                            </div><br>
                            <div class="col-12 py-2">
                                <div class="form-group col-lg-6 form-group">
                                    <input class="custom-control custom-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : 'unchecked ' }} >
                                    <label for="remember" class="custom-control-label text-small">{{ __('Remember Me') }}</label>
                                </div>
                            </div><br>
                            <div class="col-12 py-2">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-dark">{{ __('Login') }}</button>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="btn btn-link">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-secondary float-right">
                                            {{ __('Have\'t an account?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </section>
                    {{-- <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form> --}}

@endsection
