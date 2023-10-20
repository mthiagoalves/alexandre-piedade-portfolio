<button class="btn btn-success" x-data="" x-on:click.prevent="$dispatch('open-modal', 'edit-social-{{ $i }}')">
    Edit
</button>

<x-modal name="edit-social-{{ $i }}" focusable>
    <form method="post" action="" class="p-6">
        @csrf
        <div class="col-12 p-6">
            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Edit social') }}
            </h2>

            <div class="mt-6">
                <x-input-label for="social" value="{{ __('Social') }}" class="sr-only" />

                <x-text-input id="social" name="social" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('Social') }}" />
            </div>
            <div class="mt-2">
                <x-input-label for="link-social" value="{{ __('Link Social') }}" class="sr-only" />

                <x-text-input id="link-social" name="link-social" type="text" class="mt-1 block w-3/4"
                    placeholder="{{ __('Link') }}" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-green-button class="ml-3">
                    {{ __('Save') }}
                </x-green-button>
            </div>
        </div>
    </form>
</x-modal>