@extends('layouts.app')
@section('content')
<div class="container" >
    
    <div class="fon" style="background-repeat: no-repeat;background-position: center;margin: 0px auto ;height: 240px;width:880px;">
        <h1  style="color: #0F0;text-align: center;font-family: 'Nanum Pen Script', cursive;font-size: 53px;height: 120px;"></h1>
    </div>
    <div class="row justify-content-center">
        <img src="img/idle/1.png" id="monster" alt="">

        <div class="col-md-8" style="top: -120px">
            <div class="card" >
                <div class="card-header" style="background-color:rgba(244, 119, 54);color: white;">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" hidden type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="{{url('js/ani.js')}}"></script>
    </div>
    <div class="fon" style="background-repeat: no-repeat;background-position: center;margin: 0px auto ;height: 130px;width:880px;">
        <h1  style="color: #0F0;text-align: center;font-family: 'Nanum Pen Script', cursive;font-size: 53px;height: 120px;"></h1>
    </div>
</div>
@endsection
