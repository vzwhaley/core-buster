@extends('layouts.auth')

@section('content')
  <div class="container">
    <div class="container__inner">
      <div class="branding text-center mb-5">
        <img src="{{ asset('images/logo.svg') }}" alt="" class="mb-2">
      </div>

      <div class="form_wrapper">
        @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
          @csrf

          <div class="mb-3">
            <label for="email" class="mb-1t">{{ __('E-Mail Address') }}</label>

            <div class="">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="mb-0">
              <div class="">
                <button type="submit" class="btn btn-primary">
                  {{ __('Send Password Reset Link') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection
