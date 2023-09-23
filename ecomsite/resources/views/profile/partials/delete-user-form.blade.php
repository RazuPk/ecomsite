<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
        data-bs-target="#myModal">{{ __('Delete Account') }}</button>
    <!-- The Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mt-6">
                            <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                            <x-text-input id="password" name="password" type="password" class="form-control"
                                placeholder="{{ __('Password') }}" />

                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="mt-6 flex justify-end">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">{{ __('Cancel') }}</button>
                            <button type="submit"
                                class="btn btn-danger"id="submitbtn">{{ __('Delete Account') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
