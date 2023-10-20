<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'change-text-footer')">
    Text Footer <i class="fa-solid fa-plus fontawesome-icons"></i>
</button>

<x-modal name="change-text-footer" focusable>
    <form method="post" action="" class="p-6">
        @csrf
        @method('patch')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('You wanna change text of footer?') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="text-footer" value="{{ __('Text Footer') }}" class="sr-only" />

            <x-text-input id="text-footer" name="text-footer" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Text Footer') }}" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-green-button class="ml-3">
                {{ __('Update Text') }}
            </x-green-button>
        </div>
    </form>
</x-modal>
