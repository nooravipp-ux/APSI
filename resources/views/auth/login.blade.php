@extends('auth.base-auth')

@section('auth')
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
					<span class="login100-form-title p-b-26">
                    {{ __('Login') }}
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100 @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" required  autofocus>
                        <span class="focus-input100" data-placeholder="Username Or Email"></span>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password">
						<span class="focus-input100" data-placeholder="Password"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
@endsection
