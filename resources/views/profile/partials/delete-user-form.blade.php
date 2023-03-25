<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('مسح الحساب الخاص بك') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('بمجرد حذف حسابك ، سيتم حذف جميع بياناته نهائيًا. قبل حذف حسابك ، يرجى تنزيل أي بيانات أو معلومات ترغب في الاحتفاظ بها.
            ') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('حذف') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('هل انت متاكد من حذف هذا الحساب') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('بمجرد حذف حسابك ، سيتم حذف جميع بياناته نهائيًا. قبل حذف حسابك ، يرجى تنزيل أي بيانات أو معلومات ترغب في الاحتفاظ بها.') }}
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-3/4"
                    placeholder="{{ __('كلمة المرور') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-between">
                <x-secondary-button class="order-2" x-on:click="$dispatch('close')">
                    {{ __('الغاء') }}
                </x-secondary-button>

                <x-danger-button class="order-1">
                    {{ __('حذف الحساب') }}
                </x-danger-button>

            </div>
        </form>
    </x-modal>
</section>
