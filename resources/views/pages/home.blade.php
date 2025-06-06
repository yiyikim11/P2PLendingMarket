@extends('layouts.app')

@section('content')


<style>
    .gradient-overlay {
        background: linear-gradient(to right, #198754 0%, #198754 10%, rgba(25, 135, 84, 0.8) 30%, rgba(25, 135, 84, 0.4) 40%, transparent 100%);
    }

    .custom-hover-btn:hover {
        background-color: white !important;
        color: green !important;
        border-color: black;
    }
</style>

<!-- Hero Section -->
<section id="hero-section" class="position-relative vh-100 text-white overflow-hidden">
    <!-- Half-green overlay behind text -->
    <div class="position-absolute top-0 start-0 w-100 h-100 gradient-overlay z-1"></div>

    <!-- Text Content -->
    <div class="container position-relative z-2 h-100 d-flex align-items-center">
        <div class="row">
            <div class="col-lg-8">
                <h1 class=" fw-bold">Real people,<br>Real solution</h1>
                <p class="fs-4">Lend as little as $20 to create a more equitable world</p>
                <a href="#" class="btn btn-lg mt-3 custom-hover-btn" style="background-color: transparent; color:rgb(255, 255, 255); border: 2px solid white;">Get started today</a>
            </div>
        </div>
    </div>

    <!-- Background Image -->
    <div class="position-absolute top-0 start-0 w-100 h-100 z-0">
        <img src="https://images.ctfassets.net/j0p9a6ql0rn7/TgpUhEQyOb4469hYKcFhZ/6ce5fd6aa1fed4391458b9b5eb062f2d/V5_homepage_hero.png?w=1620&h=860&fit=fill&f=faces&fm=webp&q=65"
            class="w-100 h-100 object-fit-cover" alt="Hero Background">
    </div>
</section>




<!-- Features Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5">
        <div class="row g-4 g-lg-5 text-center">
            <div class="col-md-4">
                <div class="p-4 p-lg-5 h-100 align-items-center feature-card ">
                    <div class="feature-icon mb-3">
                        <img class="img-fluid" style="max-width: 40px; max-height: 40px" src="https://cdn-icons-png.flaticon.com/512/1288/1288830.png" alt="icon">
                    </div>
                    <h5 class="fw-bold mb-2">CONVENIENCE</h5>
                    <p class="text-muted">
                        The easiest method to get a loan by providing direct access to funding without traditional banking intermediaries
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 p-lg-5 h-100 align-items-center feature-card">
                    <div class="feature-icon mb-3">
                        <img class="img-fluid" style="max-width: 40px; max-height: 40px" src="https://cdn-icons-png.flaticon.com/512/1027/1027825.png" alt="icon">
                    </div>
                    <h5 class="fw-bold mb-2">FAST MONEY</h5>
                    <p class="text-muted">
                        Get to choose your own package loan with low interest rate without having middleman costs
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 p-lg-5 h-100 align-items-center fefature-card">
                    <div class="feature-icon mb-3">
                        <img class="img-fluid" style="max-width: 40px; max-height: 40px" src="https://cdn-icons-png.flaticon.com/512/1027/1027825.png" alt="icon">
                    </div>
                    <h5 class="fw-bold mb-2">PAYCHECK</h5>
                    <p class="text-muted">
                        Secure loans with flexible terms, helping bridge financial gaps before their next paycheck arrives
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- How It Works Section -->
<section class="how-it-works bg-success py-5 text-white  position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="/img/home/woman.png" alt="Woman with money" class="position-absolute bottom-0 w-50 ">
            </div>
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold mb-4">HOW IT WORKS</h2>
                <div class="d-flex align-items-start mb-4">
                    <div class="step-number me-3">
                        <img style="width: 60px; height: 60px;" src=" /img/home/one.png" alt="point1">
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Apply Online</h5>
                        <p>Complete our simple online application in just a few minutes with basic information.</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="step-number me-3">
                        <img style="width: 60px; height: 60px;" src=" /img/home/two.png" alt="point2">
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Request Loan</h5>
                        <p>Choose loan package that best for you then request loan</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="step-number me-3">
                        <img style="width: 60px; height: 60px;" src=" /img/home/three.png" alt="point1">
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Get your funds</h5>
                        <p>Funds are exchanged privately between the lending parties</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class=" py-5" id="about">
    <h2 class="text-center mb-5">About Us</h2>

    <div class="container px-4 px-lg-5">
        <div class="row g-4 g-lg-5 text-start">
            <!-- Team Member 1 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/home/headshot.png') }}" alt="Yiyi Kim" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                    <div>
                        <h4 class="mb-0">Yiyi Kim</h4>
                        <p class="text-muted mb-0">Web Developer</p>
                    </div>
                </div>
                <p>With over 20 years of experience in the industry, I lead our team with passion and dedication.</p>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/home/riri.png') }}" alt="Rothrina Kong" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                    <div>
                        <h4 class="mb-0">Rothrina Kong</h4>
                        <p class="text-muted mb-0">Web Developer</p>
                    </div>
                </div>
                <p>With over 20 years of experience in the industry, I lead our team with passion and dedication.</p>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-4 mb-4 ">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/team/panha-hout.jpg') }}" alt="Panha Hout" class="rounded-circle me-3" style="width: 80px; height: 80px; object-fit: cover;">
                    <div>
                        <h4 class="mb-0">Panha Hout</h4>
                        <p class="text-muted mb-0">Web Developer</p>
                    </div>
                </div>
                <p>With over 20 years of experience in the industry, I lead our team with passion and dedication.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Mission Section -->
<section class="py-5 bg-success text-white" id="our-mission">
    <div class="container">
        <h2 class="text-center mb-4">Our Mission</h2>
        <p class="text-center mb-5">To transform ideas into reality and deliver quality services.</p>
        <section>
            <div class="row">
                <!-- Innovation -->
                <div class="col-md-4 mb-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <div class="bg-white rounded p-3 d-inline-block">
                                <img src="{{ asset('img/home/mission1.png') }}" alt="Innovation Icon" width="60" height="60">
                            </div>
                        </div>
                        <div>
                            <h4>Innovation</h4>
                            <p>We believe in the power of innovation to solve problems.</p>
                        </div>
                    </div>
                </div>

                <!-- Quality -->
                <div class="col-md-4 mb-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <div class="bg-white rounded p-3 d-inline-block">
                                <img src="{{ asset('img/home/mission2.png') }}" alt="Quality Icon" width="60" height="60">
                            </div>
                        </div>
                        <div>
                            <h4>Quality</h4>
                            <p>Our commitment to quality ensures that we meet the highest standards.</p>
                        </div>
                    </div>
                </div>

                <!-- Sustainability -->
                <div class="col-md-4 mb-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <div class="bg-white rounded p-3 d-inline-block">
                                <img src="{{ asset('img/home/mission3.png') }}" alt="Sustainability Icon" width="60" height="60">
                            </div>
                        </div>
                        <div>
                            <h4>Sustainability</h4>
                            <p>We are focused on sustainable solutions for a better future.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

<!-- Contact us Section -->
<section class="contact-us pt-5  position-relative" id="contact">
    <div class="container">
        <div class="row ">
            <!-- telephone image -->
            <div class="col-md-6">
                <img src="/img/home/telephone.png" alt="telephoen" class="img-fluid" style="max-width: 500px; height: auto;">
            </div>
            <!-- form -->
            <div class="col-md-6">
                <div class="form-section">
                    <h3 class="form-title">Get In Touch</h3>
                    <p class="form-subtitle">Send us a message and we'll respond as soon as possible.</p>

                    <form id="contactForm " class="d-flex flex-column gap-4">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            <label for="name">Name</label>
                        </div>

                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" placeholder="your@email.com" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" id="message" placeholder="Your message here..." style="height: 120px;" required></textarea>
                            <label for="message">Message</label>
                        </div>

                        <button type="submit" class="btn btn-send btn-success">
                            <i class="fas fa-paper-plane me-2"></i>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>
    </div>
</section>

@endsection