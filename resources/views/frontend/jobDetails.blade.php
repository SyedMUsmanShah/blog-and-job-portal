@extends('frontend.layouts.main')
@section('main-section')
@push('title')
    <title>Jobs | PeopleConnect</title>
@endpush
    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>Apply</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> Apply </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Jobs intro section  -->

    <div class="container mt-5">
        <h1 class="Job-title px-md-5">{{ $apply->name }}</h1>
        <div class="row m-0 p-0 job-container mb-5">
            <div class="col-6 p-sm-0 p-md-5">
                <h3>Job Discription</h3>
                <p class="">{{ $apply->job_description }}</p>
            </div>
            <div class="col-6 p-sm-0 p-md-5 text-center">
                <h3>Salary</h3>
                <p class="text-center">{{ $apply->salary }}</p>
            </div>
        </div>

        <div class="job-description-container py-5">
            <h4 class="px-5 job-description-heading">Details</h4>
            <div class="row m-0 py-0 px-sm-0 px-md-5 my-5">
                <div class="col-4 p-1 h5 about-content">Requirements</div>
                <div class="col-8 p-1">
                    <ul>
                        {!! $apply->requirements !!}
                    </ul>
                </div>
                <div class="col-4 p-1 h5 about-content">Responsibilities</div>
                <div class="col-8 p-1">
                    <ul>
                        {!! $apply->responsibilities !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- apply-section  -->

    <div class="container mt-5 px-5 apply-container">
        <h1 class="my-5">Apply Now</h1>
        <form action="{{ route('frontend.apply-Job', ['position'=>$apply->name]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5">
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control border-0 bg-blue-200 rounded-pill px-3 py-3" name="fname" placeholder="First Name" required>
                      {{-- <label for=""></label>
                      <input type="text"
                        class="form-control" name="" id="" aria-describedby="helpId" placeholder=""> --}}
                      <small id="helpId" class="form-text text-danger">
                        @error('fname')
                            {{ $message }}
                        @enderror
                      </small>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control border-0 bg-blue-200 rounded-pill px-3 py-3" name="lname" placeholder="Last Name" required>
                    <small id="helpId" class="form-text text-danger">
                        @error('lname')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <input type="email" class="form-control border-0 bg-blue-200 rounded-pill px-3 py-3" name="email" placeholder="Email Address" required>
                    <small id="helpId" class="form-text text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <input type="text" class="form-control border-0 bg-blue-200 rounded-pill px-3 py-3" name="number" placeholder="Mobile Number" required>
                    <small id="helpId" class="form-text text-danger">
                        @error('number')
                            {{ $message }}
                        @enderror
                    </small>
                </div>
            </div>
            <div class="col-12 mb-3">
                <textarea class="form-control border-0 bg-blue-200 b-6 px-3" placeholder="Why do you think you are good fit for this Position?" id="floatingTextarea2" name="message" style="height: 140px; resize: none" spellcheck="false" required></textarea>
                <small id="helpId" class="form-text text-danger">
                    @error('message')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-12 mb-3">
                <label for="pdf">Upload PDF Resume</label>
                <input type="file" name="pdf" id="pdf" class="form-control border-0 bg-blue-200 rounded-pill px-3 py-3" required>
                <small id="helpId" class="form-text text-danger">
                    @error('pdf')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-12 mb-3">
                <label for="cover">Upload PDF Cover Letter</label>
                <input type="file" name="cover" id="cover" class="form-control border-0 bg-blue-200 rounded-pill px-3 py-3" required>
                <small id="helpId" class="form-text text-danger">
                    @error('cover')
                        {{ $message }}
                    @enderror
                </small>
            </div>
            <div class="col-12 py-3 mb-3">
                <button id="applyFormSubmitBtn" type="submit" class="btn box-btn rounded-pill bg-brand-primay px-2 py-1">Submit</button>
            </div>
        </form>
    </div>

@endsection
