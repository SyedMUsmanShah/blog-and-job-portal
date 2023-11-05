@extends('frontend.layouts.main')
@section('main-section')
@push('title')
    <title>Employee FAQ | PeopleConnect</title>
@endpush
    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>Employee FAQ</h4>
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
                    <img src="{{ url('frontend/assets/img/FAQ/9.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Do you Accept Work Permits?</h1>
                    <p class="text-muted mt-2">Yes, at PeopleConnect we accept work permit.</p>
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Do you pay in cash?</h1>
                    <p class="text-muted mt-2">No, at PeopleConnect we do not pay our employees in cash.</p>
                </div>
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/10.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/12.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>When are employees paid?</h1>
                    <p class="text-muted mt-2">PeopleConnect pays employees directly on a bi-weekly basis.</p>
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Do you only offer temporary positions?</h1>
                    <p class="text-muted mt-2">At PeopleConnect we offer temporary to permanent and permanent positions.</p>
                </div>
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/13.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/15.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>What kind of jobs do you offer?</h1>
                    <p class="text-muted mt-2">Industrial Support, Admin Support, Skill Trades, General Labour, Machine Operators and Drivers.</p>
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Do you pay Overtime?</h1>
                    <p class="text-muted mt-2">Yes, at PeopleConnect we offer overtime after 44 hours.</p>
                </div>
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/16.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/hello.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>Do I need safety boots to work at the PeopleConnect?</h1>
                    <p class="text-muted mt-2">Safety boots are requried only on certain sites. Applicants will be notified for which postions needs safety boots.</p>
                </div>
            </div>
            <div class="row m-0 p-0 my-5">
                <div class="col-12 col-md-6 text-container m-auto">
                    <h1>If I don't have a car, can I still get a job?</h1>
                    <p class="text-muted mt-2">Yes, at PeopleConnect you can still get hired without a car.</p>
                </div>
                <div class="col-12 col-md-6 img-container position-relative">
                    <div class="overlay-img--cubeSm p-lu position-absolute b-6"></div>
                    <img src="{{ url('frontend/assets/img/FAQ/18.png') }}" alt="" srcset="" class="w-100 p-2">
                </div>
            </div>
        </div>
    </section>

@endsection
