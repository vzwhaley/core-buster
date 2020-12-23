@extends('layouts.auth')

@section('content')
  <div class="container login">
    <div class="container__inner">
      <div class="branding text-center mb-5">
        <img src="{{ asset('images/logo.svg') }}" alt="" class="mb-2">
        <h1>Campaign Management Portal</h1>
      </div>

      <div class="form_wrapper">
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="mb-3">
            <label for="email" class="mb-1">{{ __('E-Mail Address') }}</label>

            <div class="">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="mb-3">
            <label for="password" class="mb-1">{{ __('Password') }}</label>

            <div class="">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="mb-3">
            <div class="">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
          </div>

          <div class="">
            <div class="">
              <button type="submit" class="primary-btn mr-3">
                {{ __('Login') }}
              </button>

              @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              @endif
            </div>
          </div>
        </form>
        <br />
        <p class="text-center">In order to access Campo, please contact your <a href="mailto:campoadmin@iostudio.com">User Administrator</a>.</p>
      </div>
    </div>
  </div>
@endsection
