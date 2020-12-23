@extends('layouts.auth')

@section('content')
<div class="container reset">
  <div class="container__inner">
    <div class="branding text-center mb-5">
      <img src="{{ asset('images/logo.svg') }}" alt="" class="mb-2">
    </div>

    <div class="form_wrapper">
      <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-3">
          <label for="email" class="mb-1">{{ __('E-Mail Address') }}</label>

          <div class="">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="mb-3">
              <label for="password-confirm" class="mb-1">{{ __('Confirm Password') }}</label>

              <div class="">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>

            <div class="mb-0">
              <div class="">
                <button type="submit" class="btn btn-primary">
                  {{ __('Reset Password') }}
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
