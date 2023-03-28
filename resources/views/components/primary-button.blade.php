<button {{ $attributes->merge(['type' => 'submit', 'class' => '  
bg-blue-500 inline-flex items-center px-4 py-2  border border-transparent rounded-md 
font-semibold text-xs text-white uppercase tracking-widest  active:bg-gray-100 
 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
