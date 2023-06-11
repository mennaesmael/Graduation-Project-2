<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')

    <title>الصفحة الرئيسية-إدارة الحفائر قطاع الأثار المصرية-المجلس الاعلي للآثار</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
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
        a:focus {

        }

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

<body class=" bg-gray-100">
    <div class="  justify-items-center items-center relative top-28">
        <div class="text-center items-center justify-items-center  ">
            <img src="{{URL::asset('/images/وزارة السياحة والاثار مصر.png')}}" alt="Logo" class="w-96 items-center m-auto  " >
            <span  class="text-2xl font-semibold items-center content-center mt-20">   اهلا بكم فى قاعدة بيانات إدارة الحفائر قطاع الآثار المصرية</span>
            @if (Route::has('login'))
                <div class=" flex-col items-center mt-6 ">
                    @auth
                       <div class="w-40  m-auto bg-gray-900 border-gray-500 rounded-full p-2.5 dark:hover:bg-gray-300
                       dark:hover:text-black">
                        <a href="{{ url('/dashboard') }}"
                        class="font-semibold   dark:text-gray-100
                         dark:hover:text-black ">الصفحة الرئيسية</a>
                       </div>
                    @else


                <a href="{{ route('login') }}" class=" inline-block text-lg px-6 py-2 bg-gray-900 rounded-full text-gray-100" >{{ __('تسجيل الدخول') }}</a>


                    @endauth
                </div>
            @endif
        </div>
    </div>




    <footer  class="bg-neutral-100  text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left absolute inset-x-0 bottom-0">
        <div class="bg-neutral-200 p-6 text-center dark:bg-gray-900  ">
            <span>المجلس الاعلي للآثار جميع الحقوق محفوظة 2023 © </span>


          </div>
    </footer>
</body>


</html>
