@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            
                            <div class="container">
                                <label style="margin-left: 17.5%;" for="name">{{ __('Name') }}*</label>
                                <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="container">
                                <label style="margin-left: 17.5%;" for="email">{{ __('E-Mail Address') }}*</label>
                                <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="container">
                                <label style="margin-left: 17.5%;" for="password">{{ __('Password') }}</label>
                                <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="container">
                                <label style="margin-left: 17.5%;" for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input style="width: 65%; margin-left: 17.5%; border: 1.5px solid #cacaca; border-radius: 60px; padding: 20px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="container">
                                <button style="margin-left: 17%; margin-top: 30px; color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 200px; padding-right: 200px; background-color:  #1cc88a;" type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
