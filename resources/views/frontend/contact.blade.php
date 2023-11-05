@extends('frontend.layouts.main')
@section('main-section')

@push('title')
    <title>Contact Us | People Connect Staffing</title>
@endpush
    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>contact us</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> about </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bread area end -->

    <!-- contact area start -->
    <section class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="row ">
                <div class="col-xxl-10 mx-auto">
                    <div class="row mb-5">
                        <div class="col-xxl-4 text-center">
                            <div class="single-contact">
                                <i class="fa-solid fa-location-dot"></i>
                                <h4>address <span>15-219 Silvercreek Parkway North</span></h4>
                            </div>
                        </div>
                        <div class="col-xxl-4 text-center">
                            <div class="single-contact">
                                <i class="fa-solid fa-phone"></i>
                                <h4>phone <span>+5197661333</span></h4>
                            </div>
                        </div>
                        <div class="col-xxl-4 text-center">
                            <div class="single-contact">
                                <i class="fa-solid fa-envelope"></i>
                                <h4>email <span>hr@peopleconnectstaffing.ca</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="contact-form">
                                <form action="{{ route('frontend.submitForm') }}" method="POST">
                                    @csrf
                                    <input class="form-control " name="name" type="text" placeholder="Name" required>
                                    <input class="form-control mt-3" name="email" type="email" placeholder="Email" required>
                                    <input class="form-control mt-3" name="number" type="text" placeholder="PH number" required>
                                    <textarea class="form-control mt-3" name="message" placeholder="Message" required></textarea>
                                    <input type="submit" value="send message" class="box-btn border-0 mt-3">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row m-0 p-0 mt-5">
            <div class="col-12 col-md-4 location-details p-5 shadow">
                <h1>Location</h1>
                <h4><span  class="mx-2"><img src="{{ url('frontend/assets/img/map.svg') }}" alt="" srcset="" height="20px"></span>Guelph Ontario</h4>
                <h5>15-219 Silvercreek Parkway North,</h5>
                    <h5>Guelph, Ontario N1H 7K4</h5>
                    <h5>O: 519 - 766 - 1333 / C: 647 - 546 - 6673</h5>
                    <h5>F : 519 - 836 - 5539</h5>
            </div>
            <div class="col-12 col-md-8">
                <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.9773972126673!2d-80.28839278787247!3d43.54451305933247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b900e7783e0a9%3A0xc982001bbfd3622f!2s219%20Silvercreek%20Pkwy%20N%20unit%2015%2C%20Guelph%2C%20ON%20N1H%207K4!5e0!3m2!1sen!2sca!4v1692040756475!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>


    <!-- contact area end -->

@endsection
