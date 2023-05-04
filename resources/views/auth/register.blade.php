<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>تسجيل الموظفين-إدارة الحفائر قطاع الأثار المصرية-المجلس الاعلي للآثار</title>
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />


</head>
<body>

<footer  class="bg-neutral-100  text-neutral-600 dark:bg-gray-900 dark:text-neutral-200 lg:text-left absolute inset-x-0 bottom-0 ">
  <div class="bg-neutral-200 p-6 text-left dark:bg-gray-900  ">
      <span class="ml-96">المجلس الاعلي للآثار جميع الحقوق محفوظة 2023 © </span>


    </div>
</footer>
<div class="grid grid-cols-5  ">


    <div class="">

        <!-- Sidenav -->
        <nav id="sidenav-7"
            class="fixed top-0 right-0 h-screen w-80 translate-x-full overflow-hidden bg-white
    shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:-translate-x-0 dark:bg-zinc-800"
            data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-right="true">
            <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
                <li class="relative">
                    <a class="flex h-full cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]
           text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50
           hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none
            active:bg-slate-50 active:text-inherit
             active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none
              motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10
               dark:active:bg-white/10"
                        data-te-sidenav-link-ref>

                        <img src="{{ URL::asset('/images/وزارة السياحة والاثار مصر.png') }}" alt="Logo"
                            class="w-40 items-center m-auto  ">

                    </a>
                    <hr>
                </li>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]
           text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit
           hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50
           active:text-inherit
           active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none
           motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        href="{{ route('upload') }}">

                        <span class=" text-black text-center text-lg font-semibold">رفع ملف</span>

                    </a>

                </li>
                <hr>
                <li class="relative">
                    <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]
           text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none
             active:bg-slate-50 active:text-inherit
              active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none
              motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                        data-te-sidenav-link-ref href="{{ route('search') }}">

                        <span class=" text-black text-center text-lg font-semibold">بحث عن ملف</span>

                    </a>

                </li>
                <hr>
                @can('admin')
                    <li class="relative">
                        <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]
           text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none
            focus:bg-slate-50 focus:text-inherit focus:outline-none
             active:bg-slate-50 active:text-inherit
              active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none
              motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref href="{{ route('register') }}">

                            <span class=" text-black text-center text-lg font-semibold"> تسجيل الموظفين الجدد </span>

                        </a>

                    </li>

                    <hr>
                    <li class="relative">
                        <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]
         text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none
          focus:bg-slate-50 focus:text-inherit focus:outline-none
           active:bg-slate-50 active:text-inherit
            active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none
            motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref href="{{ route('workers') }}">

                            <span class=" text-black text-center text-lg font-semibold"> المستخدمين</span>

                        </a>

                    </li>

                    <hr>
                    <li class="relative">
                        <a class="flex h-12 cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]
         text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none
          focus:bg-slate-50 focus:text-inherit focus:outline-none
           active:bg-slate-50 active:text-inherit
            active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none
            motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
                            data-te-sidenav-link-ref href="{{ route('tracking') }}">

                            <span class=" text-black text-center text-lg font-semibold"> نشاط المستخدمين</span>

                        </a>

                    </li>
                @endcan
            </ul>
        </nav>
        <!-- Sidenav -->
    </div>


<div class="col-span-4">

  <x-app-layout >
    <div class="">
        <x-slot name="header ">
            <h2 class="font-bold text-xl text-gray-800  leading-tight ">
                {{ __('الصفحة الرئيسية') }}
            </h2>
        </x-slot>



  <div class="mr-28   ">


<x-guest-layout class="bg-gray-100  ">

        <form method="POST" action="{{ route('register') }}" class="grid grid-cols-2  text-right gap-6  w-10/12  pr-11">
            @csrf
            <div class="items-center content-center  text-center col-span-2">
                <span  class="text-2xl font-semibold  ">   تسجيل الموظفين</span>

            </div>

            <!-- Name -->

            <div class="">
                <x-input-label for="name" :value="__('الأسم')"  class="m-4  text-lg"/>
                <x-text-input id="name" class="block mt-1 w-full bg-gray-100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class=" ">
                <x-input-label for="email" :value="__('البريد الألكتروني')" class="m-4  text-lg"/>
                <x-text-input id="email" placeholder="يجب ان يكون البريد مسجلا فى gmail" class="block mt-1 w-full bg-gray-100" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Admin -->
            <div class="  ">
                <x-input-label for="admin" :value="__('تسجيله كأدمن')" class="m-4  text-lg"/>
                <x-text-input id="admin" class="block mt-1 w-full bg-gray-100" placeholder="برجاء الاجابة بنعم او لا" type="text" name="admin" :value="old('admin')" required autocomplete="admin" />
                <x-input-error :messages="$errors->get('admin')" class="mt-2" />
            </div>


               <!-- Password -->
               <div class=" ">
                <x-input-label for="password" :value="__('كلمة المرور')" class="m-4  text-lg"/>

                <x-text-input id="password" class="block mt-1 w-full bg-gray-100"
                                type="password"
                                name="password"
                                required autocomplete="new-password"
                                placeholder="يجب الا يقل عن 8 احرف او ارقام"
                                />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="   ">
                <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" class="m-4  text-lg"/>

                <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gray-100"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="يجب الا يقل عن 8 احرف او ارقام"

                                />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </div>

            <div class="flex items-center justify-front   text-2xl  col-span-2 ">
                <x-primary-button class="ml-4 textcolor    ">
                    <span class="text-lg ">{{ __('تسجيل') }}</span>

                </x-primary-button>


            </div>

        </form>
        @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ session('تم بنجاح') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        </script>
    @endif
    </x-guest-layout>



  </div>



</x-app-layout>
</div>

</div>

</body>



</html>






















