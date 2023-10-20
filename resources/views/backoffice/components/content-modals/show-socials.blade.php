

<x-modal name="show-socials" focusable>
    <form method="post" action="" class="p-6">
        @csrf
        @method('patch')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('What socials do you wanna edit?') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="social" value="{{ __('Social') }}" class="sr-only" />

            <x-text-input id="social" name="social" type="text" class="mt-1 block w-3/4"
                placeholder="{{ __('Social') }}" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>
        </div>
    </form>
</x-modal>
