@extends('frontend.layouts.main')
@section('main-section')
    @push('title')
        <title>People Connect Staffing</title>
    @endpush
    <!--Slider Area start  -->
    <section class="slider-area owl-carousel">
        <div class="single-slide" style="background-image: url({{ url('frontend/assets/img/slider/slide-1.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 text-center">
                        <div class="slide-content w-100 position-absolute top-50 start-50 translate-middle">
                            <h4>we are PeopleConnect INC.</h4>
                            <h1>we are a Staffing Agency</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis explicabo id nemo possimus,
                                sunt ex cumque excepturi quaerat architecto eligendi.</p>
                            <a href="{{ route('frontend.contact') }}" class="box-btn">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide" style="background-image: url({{ url('frontend/assets/img/slider/slide-2.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 text-center">
                        <div class="slide-content w-100 position-absolute top-50 start-50 translate-middle">
                            <h4>we are PeopleConnect INC.</h4>
                            <h1>we are a software architecture company</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis explicabo id nemo possimus,
                                sunt ex cumque excepturi quaerat architecto eligendi.</p>
                            <a href="{{ route('frontend.contact') }}" class="box-btn">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide" style="background-image: url({{ url('frontend/assets/img/slider/slide-3.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 text-center">
                        <div class="slide-content w-100 position-absolute top-50 start-50 translate-middle">
                            <h4>we are PeopleConnect INC.</h4>
                            <h1>we are a software architecture company</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis explicabo id nemo possimus,
                                sunt ex cumque excepturi quaerat architecto eligendi.</p>
                            <a href="{{ route('frontend.contact') }}" class="box-btn">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Area end -->

    <!-- About Us Section Start -->
    <section class="about-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center section-title">
                <div class="col-6 col-xl-6 text-end">
                    <h4><span>who we are</span>about us</h4>
                </div>
                <div class="col-6 col-xl-6">
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
                        <a href="{{ route('frontend.about') }}" class="box-btn">read more</a>
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

    <!-- FAQ start -->
    <section class="features-area pt-100 pb-100"
        style="background-image: url({{ url('frontend/assets/img/features/bg-skill.webp') }});">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h4 class="page-title">Client faq</h4>
                    <div class="faq-container">
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">I need to get in contact with you, but I am
                                    unable to do so during hours of operations. What can I do?</span><span
                                    class="arrow"></span></h2>
                            <p class="answer">If you would like to reach us, please feel free to leave us an email or
                                voicemail.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">What types of business do you
                                    staff?</span><span class="arrow"></span></h2>
                            <p class="answer">Industrial Support, Admin Support, Skill Trades, General Labour, Machine
                                Operators and Drivers.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Can you fill an A.S.A.P. orders?</span><span
                                    class="arrow"></span></h2>
                            <p class="answer">Yes, we will out A.S.A.P. orders.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Can you fill an large orders?</span><span
                                    class="arrow"></span></h2>
                            <p class="answer">Yes, we fill out large orders.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Are you able to serve multiple
                                    locations?</span><span class="arrow"></span></h2>
                            <p class="answer">Yes we are able to serve multiple locations.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">How often will I be billed?</span><span
                                    class="arrow"></span></h2>
                            <p class="answer">Clients will be billed on a weekly basis.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">What process are involved if I decide to work
                                    with PeopleConnect?</span><span class="arrow"></span></h2>
                            <p class="answer">A quote and service agreement must be signed before moving forward.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <h4 class="page-title">Employee faq</h4>
                    <div class="faq-container">
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Do you Accept Work Permits?
                                </span><span class="arrow"></span></h2>
                            <p class="answer">Yes, at PeopleConnect we accept work permit.
                            </p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Do you pay in cash? </span><span
                                    class="arrow"></span></h2>
                            <p class="answer">No, at PeopleConnect we do not pay our employees in cash.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">When are employees paid?</span><span
                                    class="arrow"></span></h2>
                            <p class="answer">PeopleConnect pays employees directly on a bi-weekly basis.

                            </p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Do you only offer temporary
                                    positions?</span><span class="arrow"></span></h2>
                            <p class="answer">At PeopleConnect we offer temporary to permanent and permanent positions.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">What kind of jobs do you offer?</span><span
                                    class="arrow"></span></h2>
                            <p class="answer">Industrial Support, Admin Support, Skill Trades, General Labour, Machine
                                Operators and Drivers.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Do you pay Overtime?</span><span
                                    class="arrow"></span></h2>
                            <p class="answer">Yes, at PeopleConnect we offer overtime after 44 hours.

                            </p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">Do I need safety boots to work at the
                                    PeopleConnect?</span><span class="arrow"></span></h2>
                            <p class="answer">Safety boots are requried only on certain sites. Applicants will be notified
                                for which postions needs safety boots.</p>
                        </div>
                        <div class="faq-item">
                            <h2 class="question"><span class="question-text">If I don't have a car, can I still get a
                                    job?</span><span class="arrow"></span></h2>
                            <p class="answer">Yes, at PeopleConnect you can still get hired without a car.

                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12">
                    <h4 class="page-title">our skills</h4>
                    <div class="single-progress mb-3">
                        <h5>Data Entry Automation</h5>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="78"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 78%">78%</div>
                        </div>
                    </div>
                    <div class="single-progress mb-3">
                        <h5>ChatBot Systems</h5>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                    </div>
                    <div class="single-progress mb-3">
                        <h5>Natural Language Processing</h5>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                    </div>
                    <div class="single-progress mb-3">
                        <h5>Document Generation and Management</h5>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                    </div>
                    <div class="single-progress mb-3">
                        <h5>Reporting and Analytics</h5>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                    </div>
                    <div class="single-progress mb-3">
                        <h5>Quality Assurance and Testing</h5>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%">25%</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- FAQ end -->

    <!-- Services Area start-->
    <section class="services-area pt-100">
        <div class="container">
            <div class="row align-items-center section-title">
                <div class="col-6 col-xl-6 text-end">
                    <h4><span>who we are</span>our services</h4>
                </div>
                <div class="col-6 col-xl-6">
                    <p class="services-section-title-p">Welcome to our staffing agency, your trusted partner in providing top-tier professionals across diverse industries. From healthcare and industrial to administrative and warehouse roles, we specialize in connecting your business with skilled individuals tailored to your specific needs.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="owl-carousel owl-theme">
                            <!-- For each service card -->
                            <div class="item mx-3">
                                <div class="card border-0 w-100 single-service-card single-service">
                                    <div class="card-body">
                                        <div class="text-center p-3"><i class="fa-solid fa-helmet-safety"></i></div>
                                        <h4 class="card-title m-2 text-center">Industrial</h4>
                                        <div class="card-text my-5 mx-2">
                                            <p class="border-bottom py-2">Food processors</p>
                                            <p class="border-bottom py-2">CNC operators</p>
                                            <p class="border-bottom py-2">Extrusion operator</p>
                                            <p class="border-bottom py-2">Technician</p>
                                            <p class="border-bottom py-2">Machine operator</p>
                                            <p class="border-bottom py-2">Welders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item mx-3">
                                <div class="card border-0 w-100 single-service-card single-service">
                                    <div class="card-body">
                                        <div class="text-center p-3"><i class="fa-solid fa-warehouse"></i></div>
                                        <h4 class="card-title m-2 text-center">Warehouse</h4>
                                        <div class="card-text my-5 mx-2">
                                            <p class="border-bottom py-2">Packing</p>
                                            <p class="border-bottom py-2">Shipping/Receiving</p>
                                            <p class="border-bottom py-2">Assembler</p>
                                            <p class="border-bottom py-2">Food Production</p>
                                            <p class="border-bottom py-2">Bakers</p>
                                            <p class="border-bottom py-2">Forklift/Reach Operators</p>
                                            <p class="border-bottom py-2">Pickers/Cleaners</p>
                                            <p class="border-bottom py-2">Quality control clerk</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item mx-3">
                                <div class="card border-0 w-100 single-service-card single-service">
                                    <div class="card-body">
                                        <div class="text-center p-3"><i class="fa-solid fa-headset"></i></div>
                                        <h4 class="card-title m-2 text-center">Administrative</h4>
                                        <div class="card-text my-5 mx-2">
                                            <p class="border-bottom py-2">Administrative Assistants</p>
                                            <p class="border-bottom py-2">Receptionists, Office managers</p>
                                            <p class="border-bottom py-2">Data entry clerks</p>
                                            <p class="border-bottom py-2">Accounts Payable/Receivable</p>
                                            <p class="border-bottom py-2">And More</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item mx-3">
                                <div class="card border-0 w-100 single-service-card single-service">
                                    <div class="card-body">
                                        <div class="text-center p-3"><i class="fa-solid fa-user-nurse"></i></div>
                                        <h4 class="card-title m-2 text-center">Health Care</h4>
                                        <div class="card-text my-5 mx-2">
                                            <p class="border-bottom py-2">Practical Nurses</p>
                                            <p class="border-bottom py-2">Registered Nurses</p>
                                            <p class="border-bottom py-2">PSW</p>
                                            <p class="border-bottom py-2">Medical assistants</p>
                                            <p class="border-bottom py-2">And More</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

    <!-- Services Area end-->

    <!-- Counter area start  -->
    <section class="counter-area">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <div class="single-counter d-flex align-items-center justify-content-center text-center">
                        <i class="fa-solid fa-user"></i>
                        <div class="counter-content m-auto">
                            <h4><span class="counter">1327</span>Clients</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <div class="single-counter d-flex align-items-center justify-content-center  text-center">
                        <i class="fa-brands fa-uncharted"></i>
                        <div class="counter-content m-auto">
                            <h4><span class="counter">102929</span>Employers</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <div class="single-counter d-flex align-items-center justify-content-center text-center">
                        <i class="fa-solid fa-network-wired"></i>
                        <div class="counter-content m-auto">
                            <h4><span class="counter">13343</span>Organizations</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                    <div class="single-counter d-flex align-items-center justify-content-center text-center">
                        <i class="fa-solid fa-hard-drive"></i>
                        <div class="counter-content m-auto">
                            <h4><span class="counter">1327</span>Contracts</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter area end -->

    <div class="col-12">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2891.9773972126673!2d-80.28839278787247!3d43.54451305933247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b900e7783e0a9%3A0xc982001bbfd3622f!2s219%20Silvercreek%20Pkwy%20N%20unit%2015%2C%20Guelph%2C%20ON%20N1H%207K4!5e0!3m2!1sen!2sca!4v1692040756475!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
