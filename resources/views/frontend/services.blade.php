@extends('frontend.layouts.main')
@section('main-section')
    @push('title')
        <title>Services | PeopleConnect</title>
    @endpush
    <!-- Bread area start-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 text-center">
                    <h4>our services</h4>
                    <ul>
                        <li><a href="{{ route('frontend.index') }}">home</a></li> /
                        <li> services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Bread area end -->

    <!-- Services Area start-->
    <section class="services-area pt-100">
        <div class="container">
            <div class="row align-items-center section-title">
                <div class="col-6 col-xxl-6 text-end">
                    <h4><span>who we are</span>our services</h4>
                </div>
                <div class="col-6 col-xxl-6">
                    <p class="about-section-title-p">Welcome to our staffing agency, your trusted partner in providing
                        top-tier professionals across diverse industries. From healthcare and industrial to administrative
                        and warehouse roles, we specialize in connecting your business with skilled individuals tailored to
                        your specific needs.</p>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-xxl-4 text-center">
                    <div class="single-service">
                        <i class="fa-brands fa-uncharted"></i>
                        <h4>Software Architecture Design</h4>
                        <p>This service involves creating the overall structure and design of a software system. It includes identifying the key components, their interactions, and the overall organization of the system to meet the desired functional and non-functional requirements</p>
                    </div>
                </div>
                <div class="col-xxl-4 text-center">
                    <div class="single-service">
                        <i class="fa-solid fa-hard-drive"></i>
                        <h4>System Integration</h4>
                        <p>System integration services focus on seamlessly combining different software components or subsystems to create a unified system. This involves designing interfaces, data exchange mechanisms, and communication protocols to ensure smooth interoperability between various parts of the software system</p>
                    </div>
                </div>
                <div class="col-xxl-4 text-center">
                    <div class="single-service">
                        <i class="fa-sharp fa-solid fa-bars-progress"></i>
                        <h4>Performance Optimization</h4>
                        <p>Performance optimization services aim to enhance the efficiency and speed of a software system. This involves analyzing the system's architecture and implementing optimizations such as caching, parallelization, or database tuning to improve overall performance</p>
                    </div>
                </div>
                <div class="col-xxl-4 text-center">
                    <div class="single-service">
                        <i class="fa-solid fa-clipboard"></i>
                        <h4>Scalability Planning</h4>
                        <p>Scalability planning services help in designing software architectures that can handle increased workloads or user demands without sacrificing performance. It involves considering factors such as load balancing, horizontal or vertical scaling, and distributed computing to ensure the system can grow and handle increased demands in the future</p>
                    </div>
                </div>
                <div class="col-xxl-4 text-center">
                    <div class="single-service">
                        <i class="fa-solid fa-sitemap"></i>
                        <h4>Security Architecture</h4>
                        <p>Security architecture services focus on designing and implementing robust security measures within a software system. This includes identifying potential vulnerabilities, defining access controls, encryption mechanisms, authentication protocols, and other security features to protect the system from unauthorized access, data breaches, and other security threats</p>
                    </div>
                </div>
                <div class="col-xxl-4 text-center">
                    <div class="single-service">
                        <i class="fa-solid fa-cloud"></i>
                        <h4>Cloud Architecture</h4>
                        <p> With the increasing popularity of cloud computing, cloud architecture services help in designing software systems that leverage the advantages of cloud platforms. This involves designing cloud-native applications, selecting appropriate cloud services, defining data storage and processing strategies in the cloud environment</p>
                    </div>
                </div>
            </div> --}}
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
@endsection
