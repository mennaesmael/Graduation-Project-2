<title>إعادة تعيين كلمة المرور</title>


<div class="max-w-sm  absolute inset-x-1/4 mr-44  mt-52">


    <x-guest-layout >
        <div class="mb-4 text-sm text-gray-600 ">
            {{ __('نسيت كلمة المرور؟ لا مشكلة') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4 " :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('البريد الالكتروني')" />
                <x-text-input id="email" class="block mt-1 w-full bg-gray-100 " type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-right justify-start mt-4">
                <x-primary-button>
                    {{ __('البريد الإلكتروني لأعادة تعيين كلمة المرور') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

</div>






