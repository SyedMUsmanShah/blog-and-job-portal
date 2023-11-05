<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('title')
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/font-awesome.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/owl-carousel.min.css') }}">
    <!-- style -->
    <link rel="stylesheet" href="{{ url('frontend/assets/css/style.css') }}">
</head>

<body>
    <!-- Top Bar start -->
    <section class="top-bar-area">
        <div class="cotainer">
            <div class="row m-0 p-0">
                <div class="col-6 col-xl-6">
                    <div class="top-bar-info">
                        <a href="mailto:hr@peopleconnectstaffing.ca"><i class="fa-solid fa-envelope"></i>
                            hr@peopleconnectstaffing.ca</a>
                        <a href="tel+15197661333"><i class="fa-solid fa-phone"></i> +15197661333</a>
                    </div>
                </div>
                <div class="col-6 col-xl-6 d-flex justify-content-end">
                    <div class="top-bar-social">
                        <a href="https://www.facebook.com/profile.php?id=100091671414068&mibextid=LQQJ4d"
                            target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/PeopleCStaffing" target="_blank"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a href="" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/peopleconnect_staffing/" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                        <button id="darkModeToggle" class="btn p-0">
                            <i id="darkModeIcon" class="fa"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Top Bar End -->

    <!-- Header Area start -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('frontend.index') }}"><img
                                src="{{ url('frontend/assets/img/logo/logo3-removebg-preview.png') }}" alt="Logo"
                                srcset="" class="w-100"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                            <ul class="navbar-nav groundnet-menu ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.index') }}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="{{ route('frontend.about') }}">About Us</a>
                                        <a class="dropdown-item" href="{{ route('frontend.client-Faq') }}">Client
                                            FAQ</a>
                                        <a class="dropdown-item" href="{{ route('frontend.employee-Faq') }}">Employee
                                            FAQ</a>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.services') }}">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.blog') }}">Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.vacancy') }}">Jobs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('frontend.contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Header Area end -->
