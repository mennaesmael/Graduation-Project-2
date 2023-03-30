<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>لوحة القيادة</title>

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">

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


                    <div class="w-9/12  mr-20 mt-7 text-center">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="card-title">مرحباً {{ auth()->user()->name }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead class=" text-orange-500 ">
                                            <tr>
                                                <th>ID</th>
                                                <th>الأسم</th>
                                                <th>الإيميل</th>
                                                <th>أخر تسجيل دخول</th>
                                                <th>عدد الملفات التي قمت برفعها خلال الشهور</th>
                                                @can('admin')
                                                    <th>عدد الملفات التي رفعها الموظفون خلال الشهور</th>
                                                @endcan
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                              <td>{{ auth()->user()->user_id }}</td>
                                              <td>{{ auth()->user()->name }}</td>
                                              <td>{{ auth()->user()->email }}</td>
                                              <td>{{ auth()->user()->last_login }}</td>
                                              <td>
                                                <select>
                                                  @foreach ($userFilesByMonth as $entry)
                                                  <option value="{{ $entry->month }}-{{ $entry->year }}">{{ $entry->count }} ({{ $entry->month }}/{{ $entry->year }})</option>
                                                  @endforeach
                                                </select>
                                              </td>
                                              @can('admin')
                                              <td>
                                                <select>
                                                  @foreach ($filesByMonth as $entry)
                                                  <option value="{{ $entry->month }}-{{ $entry->year }}">{{ $entry->count }} ({{ $entry->month }}/{{ $entry->year }})</option>
                                                  @endforeach
                                                </select>
                                              </td>
                                              @endcan
                                            </tr>
                                            </tbody>

                                </div>
                            </div>
                        </div>
                    </div>



                    {{--
        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white 0 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 ">
                        <a href="{{ route('upload') }}">{{ __("اذهب الي صفحة رفع الملفات") }}</a>
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <a href="{{ route('search') }}">{{ __("اذهب الي صفحة البحث") }}</a>
                    </div>
                    @can('admin')
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <a href="{{ route('admin.dashboard') }}">ادارة قاعدة البيانات</a>
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div> --}}

            </x-app-layout>
        </div>

    </div>







</body>



</html>
