{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Password</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
    <section>
        <header>
            <h2 class="text-lg fw-bold">
                {{ __('Update Password') }}
            </h2>

            <p class="mt-1 text-muted">
                {{ __('Ensure your account is using a long, random password to stay secure.') }}
            </p>
        </header>

        <form method="post" action="{{ route('password.update') }}" class="mt-4">
            @csrf
            @method('put')

            <!-- Current Password -->
            <div class="mb-3">
                <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                <input type="password" class="form-control" id="update_password_current_password" name="current_password" autocomplete="current-password">
                @if($errors->updatePassword->get('current_password'))
                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('current_password') }}</div>
                @endif
            </div>

            <!-- New Password -->
            <div class="mb-3">
                <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                <input type="password" class="form-control" id="update_password_password" name="password" autocomplete="new-password">
                @if($errors->updatePassword->get('password'))
                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('password') }}</div>
                @endif
            </div>

            <!-- Confirm New Password -->
            <div class="mb-3">
                <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input type="password" class="form-control" id="update_password_password_confirmation" name="password_confirmation" autocomplete="new-password">
                @if($errors->updatePassword->get('password_confirmation'))
                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('password_confirmation') }}</div>
                @endif
            </div>

            <!-- Save Button and Status -->
            <div class="d-flex align-items-center gap-4">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

                @if (session('status') === 'password-updated')
                    <p class="text-success mb-0" id="password-updated">
                        {{ __('Saved.') }}
                    </p>
                @endif
            </div>
        </form>
    </section>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<script>
    // Optional: Handle the fading out of the "Saved" message
    document.addEventListener('DOMContentLoaded', function() {
        const savedMessage = document.getElementById('password-updated');
        if (savedMessage) {
            setTimeout(() => savedMessage.style.display = 'none', 2000);
        }
    });
</script>
</body>
</html>
