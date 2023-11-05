@extends('frontend.layouts.main')
@section('main-section')
@push('title')
    <title>Our Blogs | PeopleConnect</title>
@endpush
    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>Our Blogs</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> Our Blogs </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5">
        <!-- new-blogs  -->

        <h1 class="mt-5 page-title">See our blogs</h1>

        <div class="row m-0 p-0" id="blogs">
            @forelse ($blogs as $blog)

            <div class=" col-12 col-sm-6 col-md-4 p-2">
                <div class="card bg-bluefaint-blog border-0 w-100">
                    <div class="card-body">
                        <!-- blog-title  -->
                        <h3 class="card-title m-2">{{ $blog->name }}</h3>
                        <!-- blog-image  -->
                        <img src="{{ $blog->image }}" alt="blog image" srcset="" class="w-100">
                        <h5 class="card-text m-2">{{ $blog->short_desc }}</h5>
                        <!-- blog-link  -->
                        <a href="{{ route('frontend.blog.detail' , ['id'=>$blog->id]) }}" class="card-link m-2 btn btn-block">Read More</a>
                    </div>
                </div>
            </div>

            @empty
                <h4 class="text-center">No Blogs Available</h4>
            @endforelse
        </div>

        <div class="d-flex justify-content-center">
            {{ $blogs->links('pagination::bootstrap-5') }}
        </div>
    </div>

@endsection
