<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- text -->
        <div class=" justify-center items-center text-lg flex flex-col pb-2">
            <h1>Create a new account Below</h1>

        </div>

        <!-- firstname -->
        <div>
            <x-input-label for="firstname" :value="__('First name')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- lastname -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Last name')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- role selector -->
        <div class="mt-4">
            <label class="block text-sm text-green-700 font-medium mb-2">Choose your role</label>
            <select name="role" class="block w-[30%] px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-white">
                <option value="borrower" {{ old('role') == 'borrower' ? 'selected' : '' }}>Borrower</option>
                <option value="lender" {{ old('role') == 'lender' ? 'selected' : '' }}>Lender</option>
            </select>

        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>