<x-guest-layout>
    <div>
        <div class="flex items-center">
            <div class="flex-1 h-2 bg-gray-200 rounded">
                <div id="progress-bar" class="h-2 bg-green-700 rounded transition-all duration-300" style="width:50%;">
                </div>
            </div>
            <p id="step-indicator" class="ml-3 text-gray-600 text-sm ">step 1 of 2</p>
        </div>
    </div>
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mt-2 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form method="POST" action="{{route('borrower-profile.store')}}" id="multi-step-form" enctype="multipart/form-data">
        @csrf
        <!-- STEP 1: Basic Information -->
        <div id="step-1" class="step-content">
            {{-- occupation--}}
            <div class="mb-4">
                <label for="occupation" class="block text-sm font-medium text-gray-700 mb-1">
                    Occupation<span class="text-red-500">*</span>
                </label>
                <x-text-input id="occupation" name="occupation" class="block mt-1 w-full" type="text" required />
                <x-input-error :messages="$errors->get('occupation')" class="mt-2" />
            </div>
            {{-- salary--}}
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
            {{-- address--}}
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

            <div class="flex items-center  justify-center">
                <x-primary-button type="button" onclick="nextStep()">
                    Next Step
                </x-primary-button>
            </div>

        </div>

        <!-- STEP 2: Documents & Social -->
        <div id="step-2" class="step-content hidden">
            {{-- id upload--}}
            <div class="mb-4">
                <label for="id-upload" class="block text-sm font-medium text-gray-700 mb-2">
                    ID Card or Passport<span class="text-red-500">*</span>
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-md p-3 text-center">
                    <input type="file" id="id-upload" name="id_document" accept="image/*,.pdf" class="hidden"
                        onchange="handleFileUpload(this, 'id-preview')">
                    <x-primary-button type="button" onclick="document.getElementById('id-upload').click()">
                        Upload
                    </x-primary-button>
                    <p id="id-preview" class="text-sm text-gray-500 mt-2">No file selected</p>
                </div>
            </div>
            {{--bank statement--}}
            <div class="mb-4">
                <label for="bank-upload" class="block text-sm font-medium text-gray-700 mb-2">
                    Bank Statement<span class="text-red-500">*</span>
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-md p-3 text-center">
                    <input type="file" id="bank-upload" name="bank_statement" accept="image/*,.pdf" class="hidden"
                        onchange="handleFileUpload(this, 'bank-preview')">

                    <x-primary-button type="button" onclick="document.getElementById('bank-upload').click()">
                        Upload
                    </x-primary-button>
                    <p id="bank-preview" class="text-sm text-gray-500 mt-2">No file selected</p>
                </div>
            </div>
            {{-- profilepic--}}
            <div class="mb-4">
                <label for="profile_pic" class="block text-sm font-medium text-gray-700 mb-2">
                    Profile Picture
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-md p-3 text-center">
                    <input type="file" id="profile_pic" name="profile_picture" accept="image/*" class="hidden"
                        onchange="handleFileUpload(this, 'profile-preview')">
                    <x-primary-button type="button" onclick="document.getElementById('profile_pic').click()">
                        Upload
                    </x-primary-button>
                    <p id="profile-preview" class="text-sm text-gray-500 mt-2">No file selected</p>
                </div>
            </div>
            {{-- facebook--}}
            <div class="mb-4">
                <label for="facebook" class="block text-sm font-medium text-gray-700 mb-1">
                    Facebook<span class="text-red-500">*</span>
                </label>
                <input type="url" id="facebook" name="facebook" placeholder="Type here"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                    required>
            </div>

            {{-- telegram--}}
            <div class="mb-6">
                <label for="telegram" class="block text-sm font-medium text-gray-700 mb-1">
                    Telegram<span class="text-red-500">*</span>
                </label>
                <input type="text" id="telegram" name="telegram" placeholder="Type here"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                    required>
            </div>

            <div class="flex space-x-3  justify-center">
                <x-secondary-button type="button" onclick="prevStep()">
                    Previous
                </x-secondary-button>

                <x-primary-button type="submit">
                    Complete
                </x-primary-button>


            </div>
        </div>
    </form>

    <script>
        let currentStep = 1;
        const totalSteps = 2;

        function nextStep() {
            // Validate current step
            if (!validateStep(currentStep)) {
                return;
            }

            // Hide current step
            document.getElementById(`step-${currentStep}`).classList.add('hidden');

            // Show next step
            currentStep++;
            document.getElementById(`step-${currentStep}`).classList.remove('hidden');

            // Update progress
            updateProgress();
        }

        function prevStep() {
            // Hide current step
            document.getElementById(`step-${currentStep}`).classList.add('hidden');

            // Show previous step
            currentStep--;
            document.getElementById(`step-${currentStep}`).classList.remove('hidden');

            // Update progress
            updateProgress();
        }

        function updateProgress() {
            const progressBar = document.getElementById('progress-bar');
            const stepIndicator = document.getElementById('step-indicator');

            const progressPercent = (currentStep / totalSteps) * 100;
            progressBar.style.width = progressPercent + '%';
            stepIndicator.textContent = `Step ${currentStep} of ${totalSteps}`;
        }

        function validateStep(step) {
            const stepElement = document.getElementById(`step-${step}`);
            const requiredFields = stepElement.querySelectorAll('[required]');

            for (let field of requiredFields) {
                if (!field.value.trim()) {
                    field.focus();
                    alert(`Please fill in the ${field.name || field.id} field.`);
                    return false;
                }
            }
            return true;
        }

        function handleFileUpload(input, previewId) {
            const preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                preview.textContent = input.files[0].name;
                preview.classList.remove('text-gray-500');
                preview.classList.add('text-green-600');
            }
        }

        function submitForm() {
            // Validate final step
            if (!validateStep(currentStep)) {
                return;
            }

            // Collect all form data
            const formData = new FormData(document.getElementById('multi-step-form'));
            const data = Object.fromEntries(formData);

            console.log('Form submitted with data:', data);
            alert('Form submitted successfully!\nCheck console for form data.');

            // Here you would normally send data to your backend
            // fetch('/submit-borrower-info', { method: 'POST', body: formData })
        }
    </script>
</x-guest-layout>