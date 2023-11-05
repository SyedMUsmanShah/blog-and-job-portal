@extends('frontend.layouts.main')
@section('main-section')
@push('title')
    <title>Blog | PeopleConnect</title>
@endpush
    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>Blog</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> Blog </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-5 blog-container">
        <!-- new-blogs  -->

        <h1 class="mt-5 page-title">{{ $blog->name }}</h1>

        <div class="col-12 p-5 blog-detail-img">
            <img src="{{ $blog->image }}" alt="Blog Image" srcset="" class="w-100">
        </div>

        <div class="blog-detail col-12">
            <p>{!! $blog->detail !!}</p>
        </div>


    </div>

@endsection
