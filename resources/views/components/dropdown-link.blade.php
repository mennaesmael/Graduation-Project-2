<div class="max-w-48 overflow-x-auto">
    <a {{ $attributes->merge(['class' => 'block px-4 py-2 text-sm font-medium 
    text-gray-700 dark:text-gray-300 hover:bg-gray-100  focus:outline-none
     focus:bg-gray-100 ', 'style' => 'line-height: 2.25rem']) }}>
        {{ $slot }}
    </a>
</div>
