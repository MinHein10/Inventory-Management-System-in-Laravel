@extends('layouts.app')

@section('content')


	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf


                        <span class="login100-form-title p-b-43">
                            {{ __(' Inventory Management System Login') }}
                        </span>
                    
                        <h4>{{ __('E-Mail Address') }}</h4><br>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						{{-- <span class="label-input100">{{ __('E-Mail Address') }}</span> --}}
					</div><br>
					
					<h4>{{ __('Password') }}</h4><br>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="password" class="input100" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
						{{-- <span class="label-input100">{{ __('Password') }}</span> --}}
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
							<label class="label-checkbox100" class="form-check-label" for="remember">
								{{ __('Remember Me') }}
							</label>
						</div>

						<div>
							@if (Route::has('password.request'))
							<a class="btn btn-link" class="txt1" href="{{ route('password.request') }}">
								{{ __('Forgot Your Password?') }}
							</a>
						@endif
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>

				</form>

				<div class="login100-more" style="background-image: url('inventory/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>
@endsection
