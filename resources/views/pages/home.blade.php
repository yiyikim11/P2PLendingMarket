@extends('layouts.app')

@section('content')
<div class="min-h-screen">
    @include('components.navbar')

    <main>
        <!-- Hero Section -->
        <section class="relative h-screen overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="https://images.ctfassets.net/j0p9a6ql0rn7/TgpUhEQyOb4469hYKcFhZ/6ce5fd6aa1fed4391458b9b5eb062f2d/V5_homepage_hero.png?w=1620&h=860&fit=fill&f=faces&fm=webp&q=65" alt="Hero Background" class="w-full h-full object-cover">
            </div>

            <!-- Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-r from-green-600 via-green-600/50 to-transparent"></div>

            <!-- Content -->
            <div class="relative z-10 max-w-4xl mx-auto px-8 h-full flex items-center">
                <div class="max-w-2xl text-white">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Real people,<br>
                        Real solution
                    </h1>
                    <p class="text-xl mb-8">Lend as little as $20 to create a more equitable world</p>
                    @auth
                    <a href="{{auth()->user()->role==="borrower" ? route('dashboard.borrower') : route('dashboard.lender')}}" class="inline-block border-2 border-white rounded-lg text-white px-8 py-3 text-lg hover:bg-white hover:text-green-600 transition-colors duration-300">
                        Get started today
                    </a>
                    @else
                    <a href="{{ route('register') }}" class="nav-btn">My Dashboard</a>
                    @endauth
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-20 bg-white">
            <div class="max-w-4xl mx-auto px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 flex items-center justify-center mb-6">
                            <img class="w-full h-full rounded-lg" src="{{ asset('images/mission1.png') }}" alt="Convenience Icon" class="w-8 h-8">
                        </div>
                        <h3 class="text-xl font-bold mb-4">CONVENIENCE</h3>
                        <p class="text-gray-600">
                            The easiest method to get a loan by providing direct access to funding without traditional banking
                            intermediaries
                        </p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mb-6">
                            <img class="w-full h-full rounded-lg" src="{{ asset('images/mission2.png') }}" alt="Fast Money Icon" class="w-8 h-8">
                        </div>
                        <h3 class="text-xl font-bold mb-4">FAST MONEY</h3>
                        <p class="text-gray-600">
                            Get to choose your own package loan with low interest rate without having middleman costs
                        </p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16  flex items-center justify-center mb-6">
                            <img class="w-full h-full rounded-lg" src="{{ asset('images/mission3.png') }}" alt="Paycheck Icon" class="w-8 h-8">
                        </div>
                        <h3 class="text-xl font-bold mb-4">PAYCHECK</h3>
                        <p class="text-gray-600">
                            Secure loans with flexible terms, helping bridge financial gaps before their next paycheck arrives
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section class="bg-green-600 py-20 text-white overflow-hidden relative">
            <div class="max-w-4xl mx-auto px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 min-h-[500px]"> <!-- Added min-height -->
                    <div class="flex items-center justify-center lg:justify-end">
                        <img src="{{ asset('images/woman.png') }}"
                            alt="Woman with money"
                            class=" w-full max-w-[600px] h-auto">
                    </div>
                    <div class="flex flex-col justify-center"> <!-- Center the text content vertically -->
                        <h2 class="text-5xl font-bold mb-12">HOW IT WORKS</h2>

                        <div class="space-y-8">
                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mr-6 flex-shrink-0">
                                    <span class="text-2xl font-bold text-green-600">1</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Apply Online</h3>
                                    <p class="text-green-100">
                                        Complete our simple online application in just a few minutes with basic information.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mr-6 flex-shrink-0">
                                    <span class="text-2xl font-bold text-green-600">2</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Request Loan</h3>
                                    <p class="text-green-100">Choose loan package that best for you then request loan</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="w-16 h-16 bg-white rounded-lg flex items-center justify-center mr-6 flex-shrink-0">
                                    <span class="text-2xl font-bold text-green-600">3</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold mb-2">Get your funds</h3>
                                    <p class="text-green-100">Funds are exchanged privately between the lending parties</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section -->
        <section class="py-20 bg-white" id="about">
            <div class="max-w-4xl mx-auto px-8">
                <h2 class="text-4xl font-bold text-center mb-16">About Us</h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start mb-6">
                            <img src="{{ asset('images/headshot.png') }}" alt="Yiyi Kim" class="rounded-full mr-4" style="width: 80px; height: 80px; object-fit: cover;">
                            <div>
                                <h4 class="text-xl font-bold">Yiyi Kim</h4>
                                <p class="text-gray-600">Web Developer</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            With over 20 years of experience in the industry, I lead our team with passion and dedication.
                        </p>
                    </div>

                    <div class="text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start mb-6">
                            <img src="{{ asset('images/riri.png') }}" alt="Rothrina Kong" class="rounded-full mr-4" style="width: 80px; height: 80px; object-fit: cover;">
                            <div>
                                <h4 class="text-xl font-bold">Rothrina Kong</h4>
                                <p class="text-gray-600">Web Developer</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            With over 20 years of experience in the industry, I lead our team with passion and dedication.
                        </p>
                    </div>

                    <div class="text-center md:text-left">
                        <div class="flex items-center justify-center md:justify-start mb-6">
                            <img src="{{ asset('images/panha.png') }}" alt="Panha Hout" class="rounded-full mr-4" style="width: 80px; height: 80px; object-fit: cover;">
                            <div>
                                <h4 class="text-xl font-bold">Panha Hout</h4>
                                <p class="text-gray-600">Web Developer</p>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            With over 20 years of experience in the industry, I lead our team with passion and dedication.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Mission Section -->
        <section class="bg-green-600 py-20 text-white" id="our-mission">
            <div class="max-w-4xl mx-auto px-8">
                <h2 class="text-4xl font-bold text-center mb-4">Our Mission</h2>
                <p class="text-center text-green-100 mb-16">
                    To transform ideas into reality and deliver quality services.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                    <div class="flex items-start">
                        <div class="mr-6 flex-shrink-0">
                            <div class="bg-white p-3 rounded-md inline-block">
                                <img src="https://cdn-icons-png.flaticon.com/512/1288/1288830.png" alt="Innovation Icon" width="60" height="60">
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Innovation</h3>
                            <p class="text-green-100">We believe in the power of innovation to solve problems.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="mr-6 flex-shrink-0">
                            <div class="bg-white p-3 rounded-md inline-block">
                                <img src="https://cdn-icons-png.flaticon.com/512/1027/1027825.png" alt="Quality Icon" width="60" height="60">
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Quality</h3>
                            <p class="text-green-100">Our commitment to quality ensures that we meet the highest standards.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="mr-6 flex-shrink-0">
                            <div class="bg-white p-3 rounded-md inline-block">
                                <img src="https://cdn-icons-png.flaticon.com/512/1288/1288830.png" alt="Sustainability Icon" width="60" height="60">
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3">Sustainability</h3>
                            <p class="text-green-100">We are focused on sustainable solutions for a better future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-12 bg-white" id="contact">
            <div class="max-w-4xl mx-auto px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="flex justify-center lg:justify-start">
                        <img src="{{ asset('images/telephone.png') }}" alt="Vintage telephone" class="w-auto h-18">
                    </div>

                    <div>
                        <h2 class="text-4xl font-bold mb-4">Get In Touch</h2>
                        <p class="text-gray-600 mb-8">Send us a message and we'll respond as soon as possible.</p>

                        <form method="POST" class="space-y-6">
                            @csrf
                            <div class="relative">
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-600 placeholder-transparent"
                                    placeholder="Name"
                                    required>
                                <label
                                    for="name"
                                    class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-green-600">
                                    Name
                                </label>
                            </div>

                            <div class="relative">
                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-600 placeholder-transparent"
                                    placeholder="Email"
                                    required>
                                <label
                                    for="email"
                                    class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-green-600">
                                    Email
                                </label>
                            </div>

                            <div class="relative">
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="4"
                                    class="peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-green-600 placeholder-transparent resize-none"
                                    placeholder="Message"
                                    required></textarea>
                                <label
                                    for="message"
                                    class="absolute left-4 -top-2.5 bg-white px-2 text-sm text-gray-600 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-2.5 peer-focus:text-sm peer-focus:text-green-600">
                                    Message
                                </label>
                            </div>

                            <button
                                type="submit"
                                class="w-full bg-green-600 text-white py-3 px-6 rounded-lg hover:bg-green-700 transition-colors duration-300 flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i>
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-12">
        <div class="max-w-4xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-xl font-bold mb-2">FOLLOW</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-green-600 hover:bg-gray-100 transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <div class="text-center md:text-right">
                    <div class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-8 mb-4">
                        <a href="#home" class="hover:text-green-200 transition-colors">HOME</a>
                        <a href="#about" class="hover:text-green-200 transition-colors">ABOUT</a>
                        <a href="#contact" class="hover:text-green-200 transition-colors">CONTACT</a>
                    </div>
                    <div class="text-sm text-green-200">
                        <p>DEVELOPED BY A GROUP OF STUDENTS AT PARAGON.U</p>
                        <p>© {{ date('Y') }} All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

@section('styles')
<style>
    /* Custom styles for floating labels */
    .peer:not(:placeholder-shown)+label,
    .peer:focus+label {
        transform: translateY(-1rem) scale(0.75);
        color: #16a34a;
        /* green-600 */
    }

    .peer::placeholder {
        color: transparent;
    }

    .nav-btn {
        --btn-border: #166534;
        --btn-color: #166534;
        --btn-bg: transparent;
        --btn-hover-bg: #166534;
        --btn-hover-color: white;

        border: 2px solid var(--btn-border) !important;
        color: var(--btn-color) !important;
        background: var(--btn-bg) !important;
        padding: 8px 16px !important;
        border-radius: 8px !important;
        text-decoration: none !important;
        transition: all 0.3s !important;
        display: inline-block !important;
    }

    .nav-btn:hover {
        background: var(--btn-hover-bg) !important;
        color: var(--btn-hover-color) !important;
    }
</style>
@endsection

@section('scripts')
<script>
    // Any additional JavaScript can go here
</script>
@endsection