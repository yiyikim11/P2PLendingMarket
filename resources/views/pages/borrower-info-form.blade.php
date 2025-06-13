<x-guest-layout>
    <style>
        /* Hide number input arrows */
        .no-arrows::-webkit-outer-spin-button,
        .no-arrows::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
    <form onsubmit="return false;">
        @csrf
        <div class="flex justify-center mb-3 text-lg pb-2">
            <h1>Lender information request</h1>
        </div>

        <!-- occupation -->
        <div class="mb-4">
            <x-input-label for="occupation" :value="_('occupation')" />
            <x-text-input id="" class="block mt-1 w-full" type="text" />
            <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
        </div>

        <!-- salary -->
        <div class="mb-4">
            <x-input-label for="salary" :value="_('Salary')" />
            <x-text-input id="" class="block mt-1 w-full" type="text" />
            <x-input-error :messages="$errors->get('salary')" class="mt-2" />
        </div>

        <!-- address -->
        <div class="mb-4">
            <x-input-label for="address" :value="_('Address')" />
            <x-text-input id="" class="block mt-1 w-full" type="text" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- phone number -->
        <div class="mb-4">
            <x-input-label for="phonenb" :value="_('Phone number')" />
            <x-text-input id="" class="block mt-1 w-full no-arrows" type="number" />
            <x-input-error :messages="$errors->get('phonenb')" class="mt-2" />
        </div>

        <!-- passport or ID -->
        <div class="mb-4">
            <x-input-label for="Passportid" :value="_('Passport or ID card')" />
            <x-secondary-button class="block mt-1">
                <p>Upload</p>
            </x-secondary-button>
        </div>

        <div class="flex items-center justify-center  mt-4">
            <x-primary-button>
                <p>Complete</p>
            </x-primary-button>
        </div>


    </form>
</x-guest-layout>