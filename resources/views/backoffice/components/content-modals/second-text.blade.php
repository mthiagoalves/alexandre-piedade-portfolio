<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'change-second-text')">
    Second Text <i class="fa-solid fa-plus fontawesome-icons"></i>
</button>

<x-modal name="change-second-text" focusable>
    <form method="post" action="" class="p-6">
        @csrf
        @method('put')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('You wanna change second text?') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="second-text" value="{{ __('Second Text') }}" class="sr-only" />
            <textarea cols="10" rows="3" id="second-text" name="second-text" class="mt-1 block w-3/4"
                placeholder="{{ __('Second Text') }}">
            </textarea>

        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-green-button class="ml-3">
                {{ __('Update banner') }}
            </x-green-button>
        </div>
    </form>
</x-modal>
