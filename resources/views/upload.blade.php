<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>رفع الملفات</title>
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />


</head>

<body>

    <footer
        class="bg-neutral-100  text-neutral-600 dark:bg-gray-900 dark:text-neutral-200 lg:text-left absolute inset-x-0 bottom-0 ">
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

            <x-app-layout>
                <div class="">
                    <x-slot name="header ">
                        <h2 class="font-bold text-xl text-gray-800  leading-tight ">
                            {{ __('الصفحة الرئيسية') }}
                        </h2>
                    </x-slot>

                    <div class="card m-10 mr-20" style="width: 89%; padding: 22px;">

                        <p class="card-category text-2xl font-semibold text-black text-center m-4 mt-n2">رفع ملف</p>
                        @if ($errors->any())
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'خطا',
                                html: '<ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                                showCloseButton: true,
                                showCancelButton: false,
                                focusConfirm: false,
                                confirmButtonText: 'OK',
                            });
                        </script>
                    @endif
                        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data"
                            id="upload-form" class="mt-3 mt-n2">
                            @csrf
                            <div class="text-right my-6 mb-3">
                                <label for="name" class="text-lg font-semibold">اسم الملف:<span
                                        class="text-red-600">*</span></label>
                                <input id="name" type="text" class="form-control" name="name"
                                    value="{{ old('name') }}" required autofocus>
                            </div>
                            <div class="text-right my-6 mb-3">
                                <label for="file" class="text-lg font-semibold">اختر الملف:<span
                                        class="text-red-600">*</span></label>
                                <div class="file-input-container">
                                    <label for="file" class="file-label"></label>
                                    <input id="file" name="file" class="file-input"
                                        aria-describedby="file_input_help" type="file" required>
                                </div>
                            </div>
                            <div class="text-right my-6">
                                <label for="notes" class="text-lg font-semibold">ملاحظات</label>
                                <textarea id="notes" name="notes" class="form-control focus:border-indigo-500 focus:ring-indigo-500 p-2"
                                    rows="4" cols="50">{{ old('notes') }}</textarea>
                            </div>
                            <button type="submit"
                                class="btn btn-outline-primary btn-lg mt-4">{{ __('رفع') }}</button>
                        </form>
                        <br>
                        @if (session('success'))
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                                Swal.fire({
                                    title: "تم بنجاح",
                                    text: "{{ session('success') }}",
                                    icon: "success",
                                    confirmButtonText: "OK"
                                });
                            </script>
                        @endif

                    </div>





            </x-app-layout>
        </div>

    </div>





</body>



</html>
