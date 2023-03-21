<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحة البحث</title>
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
            border-radius: 2.25rem !important;
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

<body class="bg-gray-200">
    <div class="container mx-auto p-4">
        <form action="<?php echo e(route('search')); ?>" method="GET" class="flex items-center justify-center mt-2">
            <input type="hidden" name="searched" value="1">
            <div class="flex w-full space-x-2 md:w-auto">
                <input
                    class="w-full py-2 px-4 border border-gray-400 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    type="text" name="query" placeholder="البحث عن ملف..." aria-label="Search by file name"
                    style="width: 400px;">

                <input
                    class="w-full py-2 px-4 border border-gray-400 rounded-md shadow focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                    type="text" name="user_query" placeholder="البحث باسم من رفع الملف او المعرف الخاص به.."
                    aria-label="Search by user name or ID">
                <button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline"
                    type="submit">بحث</button>

            </div>
        </form>

        <div class="flex items-center justify-between mt-3">
            <a href="<?php echo e(route('upload')); ?>"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><?php echo e(__('الذهاب لصفحة الرفع')); ?></a>
            <a href="<?php echo e(route('dashboard')); ?>"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"><?php echo e(__('الذهاب للصفحة الرئيسية')); ?></a>
        </div>

        <div class="mt-6">
            <h1 class="text-xl font-semibold text-gray-900 mb-4">الملفات</h1>

            <?php if(count($files) > 0): ?>
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
                                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($index + 1); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->file_id); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->user_id); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->user_name); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->file_name); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->file_extension); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->file_size); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->notes); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->file_path); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->created_at); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->updated_at); ?></span>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <span class="font-medium text-gray-800"><?php echo e($file->updated_by); ?></span>
                                        </td>

                                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                                            <form method="GET" action="<?php echo e(route('update', $file->file_id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="p-1 rounded-lg hover:bg-gray-100">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6 text-blue-500 hover:text-blue-700" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path
                                                            d="M18 13v5a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h9l5 5zm-8.5-1.5L7 10l1.5-1.5L11 9V4h2v5l2.5-1.5z" />

                                                    </svg>
                                                </button>
                                            </form>
                                        </td>

                                        <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                                            <form action="<?php echo e(route('delete', $file->file_id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class=" delete-button text-red-500 hover:text-red-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M15.707 4.293a1 1 0 00-1.414 0L10 8.586 5.707 4.293a1 1 0 10-1.414 1.414L8.586 10l-4.293 4.293a1 1 0 101.414 1.414L10 11.414l4.293 4.293a1 1 0 001.414-1.414L11.414 10l4.293-4.293a1 1 0 000-1.414z"
                                                            clip-rule="evenodd" />

                                                    </svg>

                                                </button>
                                            </form>
                                        </td>




                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="pagination-links">
                    <?php echo e($files->appends(['query' => $file_query, 'user_query' => $user_query])->links()); ?>

                </div>
            <?php else: ?>
                <div class="border border-gray-400 rounded p-4">
                    <p class="text-center text-gray-600 text-lg font-semibold">لا يوجد ملفات</p>
                </div>
            <?php endif; ?>
        </div>


        <script>document.querySelectorAll('.delete-button').forEach(button => {
            button.addEventListener('click', event => {
                event.preventDefault();
                const row = event.target.closest('tr');
                row.remove();
            });
        });</script>
</body>

</html>
<?php /**PATH D:\all projects\tasks of gp\laravel\governorate3\resources\views/search.blade.php ENDPATH**/ ?>