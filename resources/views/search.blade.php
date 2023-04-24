<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>البحث</title>

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">

    <style>
        button,
        button:focus {
            border-radius: 2.25rem !important;
        }

        /* add border radius of 2.25 to all input fields */
        input,
        input:focus {
            border-radius: 2.25rem !important;
        }

        /* add border radius of 2.25 to all links */
        a,
        a:hover,
        a:focus {}

        .pagination-links .page-link {
            color: #007bff;
            background-color: #fff;
            border-color: #dee2e6;
            padding: .375rem .75rem;
            margin-right: 5px;
        }

        .pagination-links .page-link:hover,
        .pagination-links .page-link:focus {
            z-index: 2;
            color: #0056b3;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .pagination-links .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .pagination-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .pagination-links a {
            margin: 0 0.5rem;
        }
    </style>

</head>

<body>

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


                    <div class="container mx-auto p-4">
                        <form action="{{ route('search') }}" method="GET"
                            class="flex items-center justify-center mt-2">
                            <input type="hidden" name="searched" value="1">
                            <div class="flex w-full space-x-2 md:w-auto">
                                <input
                                    class="w-full py-2 px-4 border border-gray-400 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="text" name="query" placeholder="البحث عن ملف..."
                                    aria-label="Search by file name" style="width: 400px;" id="searchInput"
                                    list="suggestionsList">
                                <datalist id="suggestionsList"></datalist>

                                <input
                                    class="w-full py-2 px-4 border border-gray-400 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                    type="text" name="user_query"
                                    placeholder="..البحث باسم من رفع الملف"
                                    aria-label="Search by user name">
                                <button
                                    class="bg-blue-700 hover:bg-blue-500 text-white font-bold
                        py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                                    type="submit">بحث</button>

                            </div>
                        </form>



                        <div class="mt-6">
                            <h1 class="text-2xl font-semibold text-gray-900 mb-4 text-center m-8">الملفات</h1>

                            @if (count($files) > 0)
                                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                    <div class="inline-block min-w-full shadow rounded-lg border-gray-100 border">
                                        <table class="min-w-full leading-normal">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        رقم التسلسل</th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        معرف الملف</th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        معرف المستخدم</th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        اسم المستخدم</th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        اسم الملف</th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        امتداد الملف</th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        حجم الملف
                                                    </th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        الملاحظات
                                                    </th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        مسار الملف
                                                    </th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        تاريخ رفع الملف
                                                    </th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        تاريخ تحديث الملف
                                                    </th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        تم تحديثه بواسطة
                                                    </th>

                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        تحديث الملف
                                                    </th>
                                                    <th
                                                        class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                        حذف الملف
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($files as $index => $file)
                                                @if ($file->model())
                                                    <tr>
                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $index + 1 }}</span>
                                                        </td>
                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->file_id }}</span>
                                                        </td>
                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->user_id }}</span>
                                                        </td>
                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->user_name }}</span>
                                                        </td>
                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->file_name }}</span>
                                                        </td>
                                                        <td
                                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->file_extension }}</span>
                                                        </td>
                                                        <td
                                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->file_size }}</span>
                                                        </td>
                                                        <td
                                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->notes }}</span>
                                                        </td>
                                                        <td
                                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->file_path }}</span>
                                                        </td>
                                                        <td
                                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->created_at }}</span>
                                                        </td>
                                                        <td
                                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->updated_at }}</span>
                                                        </td>
                                                        <td
                                                            class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                            <span
                                                                class="font-medium text-gray-800">{{ $file->model()->updated_by }}</span>
                                                        </td>

                                                        <td
                                                            class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                                                            @if ($file->model()->file_id)
                                                                <form method="GET"
                                                                    action="{{ route('update', $file->model()->file_id) }}">
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="p-1 rounded-lg hover:bg-gray-100">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-6 w-6 text-blue-500 hover:text-blue-700"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path
                                                                                d="M18 13v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h9l5 5zm-8.5-1.5L7 10l1.5-1.5L11 9V4h2v5l2.5-1.5z" />
                                                                        </svg>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                        </td>

                                                        <td
                                                            class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                                                            @if ($file->model()->file_id)
                                                                <form
                                                                    {{-- action="{{ route('delete', $file->model()->file_id) }}" --}}
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class=" delete-button text-red-500 hover:text-red-700">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="h-5 w-5" viewBox="0 0 20 20"
                                                                            fill="currentColor">
                                                                            <path fill-rule="evenodd"
                                                                                d="M15.707 4.293a1 1 0 00-1.414 0L10 8.586 5.707 4.293a1 1 0 10-1.414 1.414L8.586 10l-4.293 4.293a1 1 0 101.414 1.414L10 11.414l4.293 4.293a1 1 0 001.414-1.414L11.414 10l4.293-4.293a1 1 0 000-1.414z"
                                                                                clip-rule="evenodd" />

                                                                        </svg>

                                                                    </button>
                                                                </form>
                                                            @endif

                                                        </td>




                                                    </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="pagination-links">
                                    {{ $files->appends(['searched' => '1', 'query' => $file_query, 'user_query' => $user_query])->links() }}
                                </div>
                            @else
                                <div class="border border-gray-400 rounded p-4">
                                    <p class="text-center text-gray-600 text-lg font-semibold">لا يوجد ملفات</p>
                                </div>
                            @endif
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
                        {{-- @can('admin')
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <a href="{{ route('admin.dashboard') }}">ادارة قاعدة البيانات</a>
    </div>
    @endcan --}}
            </x-app-layout>
        </div>

    </div>






    <script>
        document.getElementById('searchInput').addEventListener('input', function(event) {
            const input = event.target;
            const datalist = document.getElementById('suggestionsList');
            const query = input.value.trim();

            if (query.length === 0) {
                datalist.innerHTML = '';
                return;
            }

            fetch(`http://127.0.0.1:8001/suggestions?query=${encodeURIComponent(query)}`).then(response => response
                    .json())
                .then(suggestions => {
                    datalist.innerHTML = '';
                    suggestions.forEach(suggestion => {
                        const option = document.createElement('option');
                        option.value = suggestion;
                        datalist.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching suggestions:', error);
                });
        });
        document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', event => {
                event.preventDefault();
                const row = event.target.closest('tr');
                row.remove();
            });
        });
    </script>
    <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

@if (session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: '{{ session('error') }}',
    })
</script>
@endif

</body>



</html>
