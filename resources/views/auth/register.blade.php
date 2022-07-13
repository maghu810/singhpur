{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
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
  <h3>Register Form</h3>
  <h3>Registration Not Allowed</h3>

<form method="POST" action="{{-- {{ route('register1') }} --}}" id="register" name="register">
    @csrf

    <div class="user-box">
      <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" >
      <label>Name</label>
    </div>

    <div class="user-box">
      <input id="email" type="email" name="email" :value="old('email')" required >
      <label>Email</label>
    </div>
    <div class="user-box">
      <input id="password" type="password" name="password" required autocomplete="new-password">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
      <label>Confirm Password</label>
    </div>
    <a href="#" onclick="myFunction()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Register
    </a>
  </form>
</div>
<!-- partial -->
<script>
    function myFunction() {
        document.getElementById("register").submit();
    }
</script>
  
</body>
</html>
