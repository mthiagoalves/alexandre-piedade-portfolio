<button x-data="" x-on:click.prevent="$dispatch('open-modal', 'change-ocupattion')">
    Occupation <i class="fa-solid fa-plus fontawesome-icons"></i>
</button>

<x-modal name="change-ocupattion" focusable>
    <form method="post" action="" class="p-6">
        @csrf
        @method('patch')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('You wanna to change Occupation?') }}
        </h2>

        <div class="mt-6">
            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
            <textarea cols="10" rows="3" id="password" name="password" class="mt-1 block w-3/4"
                placeholder="{{ __('Password') }}">
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
