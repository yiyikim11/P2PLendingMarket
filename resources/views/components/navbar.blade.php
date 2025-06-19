<!-- Header -->
<header class="bg-white shadow-sm">
    <div class="max-w-4xl mx-auto px-8">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-green-600">DIVA</div>
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="#" class="text-gray-600 hover:text-green-600 py-2">Home</a>
                <a href="#about" class="text-gray-600 hover:text-green-600 py-2">About</a>
                <a href="#contact" class="text-gray-600 hover:text-green-600 py-2">Contact</a>
                @auth
                <a href="{{auth()->user()->role==="borrower" ? route('dashboard.borrower') : route('dashboard.lender')}}" class="nav-btn">My Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="nav-btn">My Dashboard</a>
                @endauth
            </nav>
        </div>
    </div>
</header>