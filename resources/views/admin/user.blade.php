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


    <div class="grid grid-cols-5  ">



        <div class="">

            <!-- Sidenav -->
            <nav id="sidenav-7"
                class="fixed top-0 right-0 h-screen w-80 translate-x-full overflow-hidden bg-white
    shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:-translate-x-0 dark:bg-zinc-800"
                data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-right="true">
                <ul class="relative m-0 list-none px-[0.2rem]" data-te-sidenav-menu-ref>
                    <li class="relative">
                        <a href="{{route('dashboard')}}" class="flex h-full cursor-pointer items-center truncate rounded-[5px] py-4 px-6 text-[0.875rem]
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

                                <span class=" text-black text-center text-lg font-semibold"> تسجيل المستخدمين الجدد </span>

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


                    <div class="w-9/12  mr-48 mt-7 text-center h-full">
                        <div class="">
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <p
                                                class="card-title text-3xl font-semibold text-gray-900 mb-4 text-center m-8">
                                                المستخدمين</p>

                                        </div>
                                        <div class="card-body">
                                            <form class="flex items-center justify-center content-center" method="GET"
                                                action="{{ route('workers') }}">
                                                <label for="simple-search" class="sr-only">Search</label>
                                                <div class="relative w-fit items-center content-center ">
                                                    <div
                                                        class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                                                    </div>
                                                    <input type="text" name="user_name"
                                                        class="bg-gray-100 border  text text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full pl-10 p-2.5  "
                                                        placeholder=" البحث عن موظف عن طريق الاسم" required>
                                                </div>
                                                <button type="submit"
                                                    class="items-center
                                                    p-2.5 mr-1 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                    </svg>
                                                    <span class="sr-only">Search</span>
                                                </button>
                                            </form>

                                            @if ($users->isEmpty())
                                                <h1 style="font-size: 150%">لا يوجد موظفين</h1>
                                            @else
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="fw-bold text-orange-500">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>الأسم</th>
                                                                <th>الأدمن</th>
                                                                <th>الإيميل</th>
                                                                <th>تم انشائه في</th>
                                                                <th>أخر تسجيل دخول</th>
                                                                <th>حساب المستخدم</th>
                                                                <th>تعديل حالة المستخدم </th>
                                                                <th>ايقاف المستخدم</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($users as $user)
                                                                <tr>
                                                                    <td>{{ $user->user_id }}</td>
                                                                    <td>{{ $user->name }}</td>
                                                                    <td>{{ $user->admin }}</td>
                                                                    <td>{{ $user->email }}</td>
                                                                    <td>{{ $user->created_at }}</td>
                                                                    <td>{{ $user->last_login }}</td>
                                                                    <td>{{ $user->is_suspended }}</td>
                                                                    <td>
                                                                        <form method="POST"
                                                                            action="/make-admin/{{ $user->user_id }}"
                                                                            id="make-admin-form">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                id="make-admin-button"
                                                                                class=" btn {{ $user->admin === 'لا' ? 'btn-primary' : 'btn-secondary' }}"
                                                                                style="background-color: transparent; border: 2px solid #ccc; color: #161616cc; padding: 10px 20px; transition: all 0.3s ease; font-size: 15px; font-weight:500;">
                                                                                {{ $user->admin === 'لا' ? 'تفعيل الأدمن' : 'ايقاف الأدمن' }}
                                                                            </button>
                                                                        </form>
                                                                    </td>
                                                                    <td>
                                                                        <form action="/suspend/{{ $user->user_id }}"
                                                                            method="POST" id="suspend-form">
                                                                            @csrf
                                                                            <button
                                                                                class="suspend-button btn{{ $user->is_suspended === 'مفعل' ? 'btn-primary' : 'btn-secondary' }}"
                                                                                style="background-color: transparent; border: 2px solid #ccc; color: #f54b4be9; padding: 10px 20px; transition: all 0.3s ease; font-size: 15px; font-weight:500;">
                                                                                {{ $user->is_suspended === 'مفعل' ? 'ايقاف الحساب' : 'تفعيل الحساب' }}
                                                                            </button>
                                                                        </form>

                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                {{ $users->links() }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </x-app-layout>
        </div>

    </div>

    <footer
        class="bg-neutral-100  text-neutral-600 dark:bg-gray-900 dark:text-neutral-200 lg:text-left inset-x-0 bottom-0 static
overflow-hidden">
        <div class="bg-neutral-200 p-6 text-left dark:bg-gray-900  ">
            <span class="ml-96">المجلس الاعلي للآثار جميع الحقوق محفوظة 2023 © </span>


        </div>
    </footer>











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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const buttons = document.querySelectorAll('#make-admin-form');
        buttons.forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'سيتم تحديث حالة المستخدم',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'نعم، قم بالتحديث',
                    cancelButtonText: 'الغاء'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.closest('form').submit();
                        Swal.fire({
                            title: 'تم التحديث بنجاح',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'حسناً'
                        });
                    }
                });
            });
        });
    </script>

    <script>
        $('.suspend-button').click(function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'سيتم تحديث حالة الحساب',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'نعم، قم بالتحديث',
                cancelButtonText: 'الغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit the form to suspend the account
                    $(this).closest('form').submit();
                    Swal.fire({
                        title: 'تم التحديث بنجاح',
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'حسناً'
                    });
                }
            });
        });
    </script>


</body>

</html>
