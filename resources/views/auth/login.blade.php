<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الدخول-إدارة الحفائر قطاع الأثار المصرية-المجلس الاعلي للآثار</title>
</head>
<body class="">
    @vite('resources/css/app.css')
<div class=" max-w-sm  absolute inset-x-1/4 mr-44 mt-24 ">

<x-guest-layout class="bg-gray-200 ">
    <!-- Session Status -->

    <x-auth-session-status class="mb-4 " :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" >
        @csrf

        <!-- Email Address -->
        <div class="items-center content-center  text-center">
            <img src="{{URL::asset('/images/وزارة السياحة والاثار مصر.png')}}" alt="Logo" class="w-80 items-center m-auto ml-9  " >
            <span  class="text-2xl textcolor font-semibold  ">   تسجيل الدخول</span>
        </div>
        <div class="">

            <x-input-label for="email" :value="__('البريد الالكتروني')" class=" m-4 "/>
            <x-text-input id="email" class="block mt-1 w-full bg-gray-100  focus:border-gray-100"
             type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('كلمة المرور')" class=" m-4" />

            <x-text-input id="password" class="block mt-1 w-full bg-gray-100" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded  border-gray-300 text-blue-500 shadow-sm  "
                    name="remember">
                <span class="ml-2 px-3 py-3 text-sm  textcolor">{{ __('تذكرني') }}</span>
            </label>


        </div>

        <div class="flex items-center justify-between mt-4 text-lg">



            <x-primary-button class="textcolor text-2xl">
                {{ __('دخول') }}
            </x-primary-button>


            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900
                  rounded-md "
                    href="{{ route('password.request') }}">
                    {{ __('نسيت كلمة المرور؟') }}
                </a>
            @endif

        </div>

    </form>
    @if(session()->has('message'))
    <script>
        alert('{{ session('message') }}');
    </script>
@endif
</x-guest-layout>
</div>

</body>
</html>
