@extends('plantilla')
   <link rel="stylesheet" href="./css/main.css">
   <link rel="stylesheet" href="./css/login.css">
@section('content')
  <div class="formulario">
    <form method="post" action="{{ route('login') }}">
        @csrf
      <header class="head-form">
        <h2>Log In</h2>
        <p>Inicia sesion acá con tu email y contraseña.</p>
      </header>
      <div class="field-set">
        <input class="form-input mb-3 @error('email') is-invalid @enderror" id="txt-input" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        <br>
        <input class="form-input  @error('password') is-invalid @enderror" type="password" placeholder="Contraseña" id="pwd" name="password" required autocomplete="current-password">
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

        <div class="form-group form-check">
			<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
              {{ __('Remember Me') }}
          </label>
        

        </div>

        <button class="log-in"> Log In </button>
      </div>

      <div class="other">
        <button class="btn submits frgt-pass">
          @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Olvidaste tu contraseña?') }}
              </a>
          @endif
        </button>
        <button class="btn submits sign-up"><a href='register'>Registrarme</a></button>

      </div>
  </div>
  </form>
  </div>
  
@endsection
