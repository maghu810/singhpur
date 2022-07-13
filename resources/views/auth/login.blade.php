{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login Form with Neon Button</title>
  <link rel="stylesheet" href="{{asset('css/login.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-box">
  <h2>Singhpur Gram Panchayat</h2>
  <h3>Login Form</h3>
  @if (session('status'))
  <div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif

<form method="POST" action="{{ route('login') }}" id="login" name="login">
    @csrf

    <div class="user-box">
      <input type="email" name="email" :value="" required autofocus>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required autocomplete="current-password">
      <label>Password</label>
    </div>
    <a href="#" onclick="myFunction()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Login
    </a>
  </form>
</div>
<!-- partial -->
<script>
    function myFunction() {
        document.getElementById("login").submit();
    }
</script>
  
</body>
</html>
