@extends('layouts.app')

@section('content')
<div class="uk-width-medium uk-padding-small uk-scrollspy-inview uk-animation-fade uk-align-center" uk-scrollspy="cls: uk-animation-fade" style="">
    <form class="toggle-class" method="POST" action="{{ route('login') }}">
    @csrf
        <fieldset class="uk-fieldset">
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-form-icon-flip uk-icon" data-uk-icon="icon: mail"></span>
                    <input class="uk-input uk-border-pill @error('email') is-invalid @enderror" required="" placeholder="{{ __('E-Mail Address') }}" id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            <div class="uk-margin-small">
                <div class="uk-inline uk-width-1-1">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-form-icon-flip uk-icon" data-uk-icon="icon: lock"></span>
                    <input class="uk-input uk-border-pill @error('password') is-invalid @enderror" required="" placeholder="{{ __('Password') }}" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                </div>
            </div>
            <div class="uk-margin-small uk-text-center" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label><input class="uk-checkbox" type="checkbox"> {{ __('Remember Me') }}</label>
            </div>
            <div class="uk-margin-bottom">
                <button type="submit" class="uk-button uk-button-default uk-border-pill uk-width-1-1">{{ __('Login') }}</button>
            </div>
            <div class="uk-margin-small uk-text-center">
                @if (Route::has('password.request'))
                    <a class="uk-link-reset uk-text-small toggle-class" data-uk-toggle="target: .toggle-class ;animation: uk-animation-fade" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            </div>
        </fieldset>
    </form>
</div>
@endsection
