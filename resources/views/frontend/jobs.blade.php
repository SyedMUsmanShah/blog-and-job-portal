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
                    <h4>Jobs</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> Jobs </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Jobs intro section  -->

    <div class="container mt-5">
        <div class="row m-0 p-0 jobs-container mb-5">
            <div class="col-6 p-2">
                <p class="my-5 jobs-para">At PeopleConnect we invite individuals who are passionate and driven to join
                    our team. Together, we can work towards achieving our goals as a team.</p>
                <a href="#positions" class="box-btn btn rounded-pill mb-5 jobs-link">View Positions</a>
            </div>
            <div class="col-6 p-0 jobs-image-section position-relative">
                <div class="image-bar"></div>
                <img src="{{ url('frontend/assets/img/headerImg-Carr.png') }}" alt="" srcset="" class="Logo">
            </div>
        </div>

        <!-- open-positions  -->

        <h1 class="mt-5 page-title">See our open positions</h1>

        <div class="mb-3">
            <form action="{{ route('frontend.jobs.search') }}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search by job name">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>



        <div class="row m-0 p-0" id="positions">
            @forelse ($jobs as $job)

            <div class="col-sm-6 col-md-4 p-2">
                <div class="card bg-bluefaint-card border-0 w-100">
                    <div class="card-body">
                        <!-- job-title  -->
                        <h4 class="card-title m-2">{{ $job->name }}</h4>
                        <!-- job-type  -->
                        <p class="card-text m-2">{{ $job->location }} · {{ $job->type }}</p>
                        <!-- job-link  -->
                        <a href="{{ route('frontend.apply', ['id'=>$job->id]) }}" class="card-link m-2">Apply Now</a>
                    </div>
                </div>
            </div>

            @empty
                <h4 class="text-center">No Jobs Available</h4>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            {{ $jobs->links('pagination::bootstrap-5') }}
        </div>

    </div>

@endsection
