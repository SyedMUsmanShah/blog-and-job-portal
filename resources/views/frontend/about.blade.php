@extends('frontend.layouts.main')
@section('main-section')
@push('title')
    <title>About Us | People Connect Staffing</title>
@endpush

    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>about us</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> about us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bread area end -->

    <!-- About Us Section Start -->
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center section-title">
                <div class="col-6 col-xxl-6 text-end">
                    <h4><span>who we are</span>about us</h4>
                </div>
                <div class="col-6 col-xxl-6">
                    <p class="about-section-title-p">We are a team of experienced staffing professionals who are dedicated to helping businesses find the best talent for their organizations.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5">
                    <div class="about-content">
                        <h4 class="page-title">welcome to People Connect Staffing</h4>
                        <p>Integrity: At our core, we uphold unwavering integrity, ensuring that every interaction and decision is grounded in honesty and transparency. We believe in fostering trust with both clients and candidates, building relationships that stand the test of time.</p>
                        <p>Excellence: Our commitment to excellence drives us to relentlessly pursue top-tier candidates who not only meet but exceed your expectations. With a focus on delivering exceptional results, we provide skilled professionals who contribute to your business's growth and success.</p>
                        <p>Diversity and Inclusion: Embracing diversity is essential to us, as we recognize the transformative power of varied perspectives. We're dedicated to providing a diverse pool of candidates, fostering an inclusive environment that promotes innovation and creativity in all sectors.</p>
                        <p>Customer-Centric Approach: Your needs are our priority. We take the time to thoroughly understand your unique requirements, ensuring that the candidates we present are not only highly qualified but also aligned with your company's culture and values.</p>
                        <p>Adaptability: In a rapidly changing job market, our agility sets us apart. We're equipped to navigate shifts and challenges, providing flexible workforce solutions that align with the evolving needs of your industry.</p>
                        <p>Relationship Building: Beyond mere transactions, we focus on building lasting relationships. Our dedication to open communication, consistent reliability, and a personalized approach ensures that we're not just a staffing agency, but a trusted partner invested in your success.</p>
                        {{-- <a href="{{ route('frontend.about') }}" class="box-btn">read more</a> --}}
                    </div>
                </div>
                <div class="col-xl-6 ms-auto">
                    <div class="single-about d-flex align-items-center mb-3">
                        <div class="about-icon me-3">
                            <i class="fa-solid fa-laptop"></i>
                        </div>
                        <div class="single-about-content">
                            <h4 class="page-title">our mission</h4>
                            <p>At People Connect Staffing, our mission is to be the catalyst for career growth and business success. By connecting exceptional talent with companies that value their expertise, we drive innovation and progress in diverse industries. Our journey of growth has been fueled by our relentless dedication to understanding the unique needs of both our clients and candidates. Through strategic partnerships, personalized approaches, and a commitment to integrity, we've built a reputation as a trusted bridge between talent and opportunity. Our foundation is built on the principles of collaboration, empathy, and continuous improvement, propelling us to forge ahead in shaping a brighter future for the workforce.</p>
                        </div>
                    </div>
                    <div class="single-about d-flex align-items-center mb-3">
                        <div class="about-icon me-3">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="single-about-content">
                            <h4 class="page-title">our vision</h4>
                            <p>At People Connect Staffing, our vision is to redefine the landscape of talent acquisition by fostering meaningful connections that drive professional advancement and organizational success. We aim to be the forefront of innovative staffing solutions, leveraging advanced technology and data-driven insights to match the right talent with the right opportunities. By maintaining a keen focus on building enduring partnerships, fostering a culture of continuous learning, and staying adaptable in a rapidly changing job market, we're committed to achieving our vision. Through these strategic pillars, we are poised to revolutionize the staffing industry and create a future where every individual's potential is maximized and every company's growth is accelerated.</p>
                        </div>
                    </div>
                    <div class="single-about d-flex align-items-center">
                        <div class="about-icon me-3">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                        <div class="single-about-content">
                            <h4 class="page-title">our history</h4>
                            <p>At People Connect Staffing, we have a history of excellence in linking top-tier talent with outstanding opportunities. Beginning with a vision to bridge this gap, we've methodically built a network of professionals, fine-tuned our recruitment strategies, and embraced technology to evolve from a startup into a prominent staffing firm. Our journey reflects our commitment to nurturing relationships, propelling careers, and empowering businesses to succeed, all while laying the foundation for an innovative future in staffing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section End -->

@endsection
