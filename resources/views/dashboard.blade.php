<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('الصفحة الرئيسية') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
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
</x-app-layout>
