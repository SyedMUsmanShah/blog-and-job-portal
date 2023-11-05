@extends('frontend.layouts.main')
@section('main-section')
@push('title')
    <title>Client FAQ | PeopleConnect</title>
@endpush
    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>Client FAQ</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> FAQ </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container faq-container mt-5">
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/1.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>I need to get in contact with you, but I am unable to do so during hours of operations. What can I do?</h1>
                    <p class="text-muted mt-2">If you would like to reach us, please feel free to leave us an email or voicemail.</p>
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>What types of business do you staff?</h1>
                    <p class="text-muted mt-2">Industrial Support, Admin Support, Skill Trades, General Labour, Machine Operators and Drivers.</p>
                </div>
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/2.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/3.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Can you fill an A.S.A.P. orders?</h1>
                    <p class="text-muted mt-2">Yes, we will out A.S.A.P. orders.</p>
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Can you fill an large orders?</h1>
                    <p class="text-muted mt-2">Yes, we fill out large orders.</p>
                </div>
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/4.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/5.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Are you able to serve multiple locations?</h1>
                    <p class="text-muted mt-2">Yes we are able to serve multiple locations.</p>
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>How often will I be billed?</h1>
                    <p class="text-muted mt-2">Clients will be billed on a weekly basis.</p>
                </div>
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/6.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/19.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>What process are involved if I decide to work with PeopleConnect?</h1>
                    <p class="text-muted mt-2">A quote and service agreement must be signed before moving forward</p>
                </div>
            </div>
        </div>
    </section>

@endsection
