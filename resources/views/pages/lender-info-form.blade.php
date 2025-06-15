<x-guest-layout>
    <style>
    /* Hide number input arrows */
    .no-arrows::-webkit-outer-spin-button,
    .no-arrows::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    </style>
    <form method="POST" action="{{ route('lender-profile.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-center mb-3 text-lg pb-2">
            <h1>Lender information request</h1>
        </div>

        <!-- occupation -->
        <div class="mb-4">
            <label for="occupation" class="block text-sm font-medium text-gray-700 mb-1">
                Occupation<span class="text-red-500">*</span>
            </label>
            <x-text-input id="occupation" name="occupation" class="block mt-1 w-full" type="text" required />
            <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
        </div>

        <!-- salary -->
        <div class="mb-4">
            <label for="salary" class="block text-sm font-medium text-gray-700 mb-1">
                Salary range<span class="text-red-500">*</span>
            </label>
            <select id="salary" name="salary"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                required>
                <option value="">Select salary range</option>
                <option value="20000-30000">$20,000 - $30,000</option>
                <option value="30000-50000">$30,000 - $50,000</option>
                <option value="50000-75000">$50,000 - $75,000</option>
                <option value="75000-100000">$75,000 - $100,000</option>
                <option value="100000+">$100,000+</option>
            </select>
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>

        <!-- address -->
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700 mb-1">
                Address<span class="text-red-500">*</span>
            </label>
            <x-text-input id="address" name="address" class="block mt-1 w-full" type="text" required />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- phone number -->
        <div class="mb-4">
            <label for="phonenb" class="block text-sm font-medium text-gray-700 mb-1">
                Phone number<span class="text-red-500">*</span>
            </label>
            <x-text-input id="phonenb" name="phonenb" class="block mt-1 w-full no-arrows" type="tel" required />
            <x-input-error :messages="$errors->get('phonenb')" class="mt-2" />
        </div>

        <!-- passport or ID -->
        <div class="mb-4">
            <label for="id_document" class="block text-sm font-medium text-gray-700 mb-1">
                Passport or ID card<span class="text-red-500">*</span>
            </label>
            <input type="file" id="id_document" name="id_document" accept=".jpg,.jpeg,.png,.pdf" class="block w-full text-sm text-gray-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-md file:border-0
                          file:text-sm file:font-semibold
                          file:bg-blue-50 file:text-blue-700
                          hover:file:bg-blue-100" required />
            <x-input-error :messages="$errors->get('id_document')" class="mt-2" />
        </div>

{{--        profile pic--}}
        <div class="mb-4">
            <label for="id_document" class="block text-sm font-medium text-gray-700 mb-1">
                Profile picture<span class="text-red-500">*</span>
            </label>
            <input type="file" id="id_document" name="profile_pic" accept=".jpg,.jpeg,.png,.pdf" class="block w-full text-sm text-gray-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-md file:border-0
                          file:text-sm file:font-semibold
                          file:bg-blue-50 file:text-blue-700
                          hover:file:bg-blue-100" required />
            <x-input-error :messages="$errors->get('profile_pic')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button type="submit">
                Complete
            </x-primary-button>
        </div>


    </form>
</x-guest-layout>
