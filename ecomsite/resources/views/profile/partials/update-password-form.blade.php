<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>
        <p>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </p>
    </header>
    <form method="post" action="{{ route('password.update') }}">
        @csrf
        @method('put')

        <div class="row mb-3">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <div class="col-sm-10">
                <x-text-input id="current_password" name="current_password" type="password" class="form-control"
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>

        <div class="row mb-3">
            <x-input-label for="password" :value="__('New Password')" />
            <div class="col-sm-10">
                <x-text-input id="password" name="password" type="password" class="form-control"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
        </div>

        <div class="row mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <div class="col-sm-10">
                <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                @if (session('status') === 'password-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </form>
</section>
