<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <title>
        لوحة القيادة
    </title>


    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

</head>

<body class="">

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

                                <span class=" text-black text-center text-lg font-semibold"> تسجيل العاملين الجدد </span>

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

                                <span class=" text-black text-center text-lg font-semibold"> العاملين</span>

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

                                <span class=" text-black text-center text-lg font-semibold"> نشاط العاملين</span>

                            </a>

                        </li>
                    @endcan
                </ul>
            </nav>
            <!-- Sidenav -->
        </div>


        <div class="col-span-4">
            <x-app-layout>
                <div class=" w-full overflow-hidden ">
                    <div class="col-md-12  mr-4 mt-7 text-center">
                        <div class="card w-11/12">
                            <div class="card-header">
                                <h4 class="card-title text-2xl font-bold"> نشاط العاملين</h4>
                            </div>
                            <div class="card-body">
                                <form class="flex  items-center justify-center content-center"" method="GET" action="{{ route('tracking') }}">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                                        </div>
                                        <input type="text" name="user_id"
                                            class="bg-gray-100 border  text text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full pl-10 p-2.5"
                                            placeholder="البحث عن موظف عن طريق ID" required>
                                    </div>
                                    <button type="submit"
                                        class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 mr-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                </form>
                                @if (isset($actions))
                                    @if ($actions->isEmpty())
                                        <h1 style="font-size: 150%">لا يوجد موظفين</h1>
                                    @else
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="text-primary">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>معرف المستخدم</th>
                                                        <th> معرف الملف</th>
                                                        <th>النشاط</th>
                                                        <th>جمل بحث المستحدم</th>
                                                        <th>تم تحديثه بواسطة</th>
                                                        <th>وقت حدوث النشاط</th>
                                                        <th>تسجيل مستخدم جديد
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($actions as $action)
                                                        @if ($action->model() !== null)

                                                            <tr>
                                                                <td>{{ $action->model()->id }}</td>
                                                                <td>{{ $action->model()->user_id }}</td>
                                                                <td>{{ $action->model()->file_id }}</td>
                                                                <td>{{ $action->model()->action }}</td>
                                                                <td>{{ $action->model()->search_term }}</td>
                                                                <td>{{ $action->model()->updated_by }}</td>
                                                                <td>{{ $action->model()->created_at }}</td>
                                                            </tr>
                                                            @endif
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        {{ $actions->appends(['user_id' => $user_query])->links() }}
                                    @endif
                                @endif
                            </div>
                        </div>

                    </div>

            </x-app-layout>
        </div>


    </div>













    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>

</body>

</html>
