<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homepage') }}
        </h2>
    </x-slot>
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white">
                    @include('backoffice.components.content-modals.initial-banner')
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white">
                    @include('backoffice.components.content-modals.occupation')
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white">
                    @include('backoffice.components.content-modals.first-text')
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white">
                    @include('backoffice.components.content-modals.second-text')
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white">
                    @include('backoffice.components.content-modals.footer-text')
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white position-relative">
                    <p class="add-socials">
                        Socials <i class="fa-solid fa-plus fa-bounce fontawesome-icons"></i>
                    </p>
                    <div class="btns-socials">
                        <div class="row">
                            <div class="col-6">
                                <button  class="btn btn-info" x-data="" x-on:click.prevent="$dispatch('open-modal', 'add-socials')">
                                    Add
                                </button>
                                @include('backoffice.components.content-modals.add-socials')
                            </div>
                            <div class="col-6">
                                <button class="btn btn-success" x-data="" x-on:click.prevent="$dispatch('open-modal', 'show-socials')">
                                    Edit
                                </button>
                                @include('backoffice.components.content-modals.show-socials')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white">
                    @include('backoffice.components.content-modals.email')
                </div>
            </div>
            <div class="col-sm-4 col-lg-3 p-2">
                <div class="col-12 p-6 bg-white">
                    @include('backoffice.components.content-modals.phone')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
        @csrf
        @method('delete')

        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Are you sure you want to delete your account?') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
        </p>

        <div class="mt-6">
            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

            <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                placeholder="{{ __('Password') }}" />

            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
        </div>

        <div class="mt-6 flex justify-end">
            <x-secondary-button x-on:click="$dispatch('close')">
                {{ __('Cancel') }}
            </x-secondary-button>

            <x-danger-button class="ml-3">
                {{ __('Delete Account') }}
            </x-danger-button>
        </div>
    </form>
</x-modal>

<script>
    let isLeftHidden = false;
    document.querySelector('.add-socials').addEventListener('click', function() {
        const socials = document.querySelector('.btns-socials');

        if (isLeftHidden) {
            socials.style.opacity = '0';
            socials.style.left = '17%';
            socials.style.visibility = 'hidden';

        } else {
            socials.style.opacity = '1';
            socials.style.left = '43%';
            socials.style.visibility = 'visible';
        }

        isLeftHidden = !isLeftHidden;
    });
</script>
