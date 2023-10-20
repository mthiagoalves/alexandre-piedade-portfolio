<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'change-first-text')">
    First Text <i class="fa-solid fa-plus fontawesome-icons"></i>
</button>

<x-modal name="change-first-text" focusable>
    <form method="post" action="" class="p-6">
        @csrf
        @method('put')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('You wanna change first text?') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="first-text" value="{{ __('First Text') }}" class="sr-only" />
            <textarea cols="10" rows="3" id="first-text" name="first-text" class="mt-1 block w-3/4"
                placeholder="{{ __('First Text') }}">
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
