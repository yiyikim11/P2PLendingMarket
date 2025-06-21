<x-dashboard-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Borrower Dashboard</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Your Loans</h2>
            @if($loans->isEmpty())
            <p class="text-gray-600">You have no loans at the moment.</p>
            @else
            <ul class="space-y-4">
                @foreach($loans as $loan)
                <li class="border-b pb-4">
                    <h3 class="text-lg font-medium">{{ $loan->title }}</h3>
                    <p class="text-gray-600">Amount: {{ $loan->amount }}</p>
                    <p class="text-gray-600">Status: {{ $loan->status }}</p>
                </li>
                @endforeach
            </ul>
            @endif
        </div>

        <div class="mt-6 bg-white shadow-md rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Request a New Loan</h2>
            <form action="{{ route('dashboard.borrower.requestLoan') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Loan Title</label>
                    <input type="text" id="title" name="title" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
                    <input type="number" id="amount" name="amount" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <button type="submit" class="btn btn-primary">Request Loan</button>
            </form>
        </div>
    </div>
</x-dashboard-layout>