@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container" style="margin-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div style="text-align: center;" class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="container" >
                                <label style="margin-left: 17.5%;" for="email" class="">{{ __('E-Mail Address') }}*</label>
                                <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="container">
                            <label style="margin-left: 17.5%;" for="password">{{ __('Password') }}*</label>
                            <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <center>
                            <table style="margin-top: -20px;">
                                <tr>
                                    <td style="padding-top: 15px;">
                                        <div class="form-group row">
                                            <div class="container">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="padding-left: 120px">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </center>                        
                    
                        <center>
                            <div class="form-group row mb-0">
                                <div class="container" style="margin-top: 10px;">
                                    <button style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 200px; padding-right: 200px; background-color:  #1cc88a;" type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </center>

                        <center>
                            <div class="container" style="margin-top: 40px;">
                                <p>Not Registered yet? <a style="color: ;" href="{{ route('register') }}">Create an account</a></p>
                            </div>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
