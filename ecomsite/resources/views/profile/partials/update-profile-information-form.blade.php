<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update User Profile Information') }}
        </h2>
        <p>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </p>
    </header>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="row mb-2">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <img src="{{ asset($user->userphoto) }}" class="w-px-150 h-px-100" alt="">
            </div>
        </div>
        <div class="row mb-3">
            <x-input-label for="userphoto" :value="__('User Photo')" />
            <div class="col-sm-10">
                <x-text-input id="userphoto" name="userphoto" type="file" class="form-control" :value="old('userphoto', $user->userphoto)"
                    required autofocus autocomplete="userphoto" />
                <x-input-error class="mt-2" :messages="$errors->get('userphoto')" />
            </div>
        </div>
        <div class="row mb-3">
            <x-input-label for="name" :value="__('Name')" />
            <div class="col-sm-10">
                <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
        </div>
        <div class="row mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <div class="col-sm-10">
                <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)"
                    required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>
        </div>
        <div class="row mb-3">
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="row justify-content-end">
            <div class="col-sm-10">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                @if (session('status') === 'profile-updated')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
                @endif
            </div>
        </div>
    </form>
</section>
