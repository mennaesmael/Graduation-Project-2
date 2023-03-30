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


                    <div class="w-9/12  mr-48 mt-7 text-center">
                        <div class="">
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <p class="card-title text-2xl font-bold"> المستخدمين</p>
                                        </div>
                                        <div class="card-body">
                                            @if ($users->isEmpty())
                                                <p>No users found.</p>
                                            @else
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="text-primary">
                                                            <tr>
                                                                <th>User_ID</th>
                                                                <th>الأسم</th>
                                                                <th>الأدمن</th>
                                                                <th>الإيميل</th>
                                                                <th>تم انشائه في</th>
                                                                <th>أخر تسجيل دخول</th>
                                                                <th>تعديل حالة المستخدم </th>
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
                                                                    <td>
                                                                        <form method="POST" action="/make-admin/{{ $user->user_id }}" id="make-admin-form">
                                                                            @csrf
                                                                            <button type="submit" id="make-admin-button" class="btn {{ $user->admin === 'لا' ? 'btn-primary' : 'btn-secondary' }}" style="background-color: transparent; border: 2px solid #ccc; color: #ff0000; padding: 10px 20px; transition: all 0.3s ease;">
                                                                              {{ $user->admin === 'لا' ? 'جعله ادمن' : 'عدم جعله ادمن' }}
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
                        @if (session('success'))
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script>
                            Swal.fire({
                                title: "نجاح!",
                                text: "{{ session('success') }}",
                                icon: "success",
                                confirmButtonText: "OK"
                            });
                        </script>
                        @endif
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
          button.addEventListener('click', function(event) {
            event.preventDefault();
            Swal.fire({
              title: 'هل "سيتم تحديث حالة المستخدم',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'نعم، قم بالتحديث!',
              cancelButtonText: 'الغاء'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.closest('form').submit();
                }
            });
          });
        });
        </script>

</body>

</html>
