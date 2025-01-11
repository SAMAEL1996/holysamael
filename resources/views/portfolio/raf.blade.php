@extends('portfolio.layouts.app')

@section('title', 'Contact')

@section('content')
<section class="wrapper bg-dark">
    <div class="swiper-thumbs-container image-wrapper swiper-fullscreen bg-image bg-overlay" data-margin="0"
        data-image-src="{{ asset('img/portfolio/blue-bg.jpg') }}">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-lg-8 mx-auto mt-n10 text-center">
                    <h1
                        class="fs-19 text-uppercase ls-xl text-white mb-3 animate__animated animate__zoomIn animate__delay-1s">
                        Rafaelito Ortilano
                    </h1>
                    <h2
                        class="display-1 fs-60 text-white mb-0 animate__animated animate__zoomIn animate__delay-2s w-100">
                        Web Developer
                    </h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <!-- /.swiper-static -->
    </div>
    <!-- /.swiper-container -->
</section>



<section class="wrapper image-wrapper bg-image bg-overlay text-white d-none"
    data-image-src="{{ asset('img/portfolio/blue-bg.jpg') }}">
    <div class="container py-14 py-md-17 text-center">
        <div class="row">
            <div class="col-xl-10 col-xxl-8 mx-auto text-center">
                <h1 class="display-1 text-white mt-2 mb-7">Rafaelito Ortilano</h1>
                <p class="lead fs-24 px-md-10 px-lg-0 mx-lg-n10 mx-xl-0 mb-8 text-uppercase text-white">Web
                    Developer</p>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<section class="section-frame mx-xxl-11 overflow-hidden mt-5">
    <div class="wrapper image-wrapper bg-image bg-cover bg-overlay bg-overlay-light-500 d-none"
        data-image-src="https://ik.imagekit.io/wow2navhj/HolySamael/blue-bg.jpg?updatedAt=1736479743369">
        <div class="container py-16 py-md-18 text-center position-relative">
            <div class="row">
                <div class="col-lg-9 col-xxl-8 mx-auto">
                    <h1 class="display-1 fs-70 px-md-10 px-lg-0 px-xl-8 mb-5 text-white">Rafaelito Ortilano</h1>
                    <p class="lead fs-24 px-md-10 px-lg-0 mx-lg-n10 mx-xl-0 mb-8 text-uppercase text-white">Web
                        Developer</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.wrapper -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-16 py-md-18">
        <div class="row d-flex align-items-start gy-10 mb-18 mb-md-20">
            <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
                <h3 class="display-2 mb-5">The service I offer is specifically designed to meet your needs.</h3>
                <p class="mb-7">My service is carefully designed to cater to your unique requirements and ensure your
                    satisfaction.</p>
                <a href="#" class="btn btn-lg btn-primary btn-icon btn-icon-end d-none">More Details <i
                        class="uil uil-arrow-up-right"></i></a>
            </div>
            <!-- /column -->
            <div class="col-lg-6 ms-auto">
                <div class="card bg-soft-fuchsia mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/search.svg"
                                class="svg-inject icon-svg icon-svg-md text-fuchsia me-5" alt="" />
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="fs-21">Front-End Development</h3>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-aqua mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/web.svg"
                                class="svg-inject icon-svg icon-svg-md text-aqua me-5" alt="" />
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="fs-21">Back-End Development</h3>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-yellow mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/workflow.svg"
                                class="svg-inject icon-svg icon-svg-md text-yellow me-5" alt="" />
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="fs-21">MVC Framework</h3>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-leaf mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/tools.svg"
                                class="svg-inject icon-svg icon-svg-md text-leaf me-5" alt="" />
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="fs-21">API Integration</h3>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card bg-soft-orange mb-6">
                    <div class="card-body d-flex flex-row">
                        <div>
                            <img src="./assets/img/icons/lineal/team.svg"
                                class="svg-inject icon-svg icon-svg-md text-orange me-5" alt="" />
                        </div>
                        <div class="d-flex align-items-center">
                            <h3 class="fs-21">Database Design</h3>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="row align-items-center mb-10">
            <div class="col-md-8 col-lg-9 col-xl-8 col-xxl-7">
                <h2 class="display-2 mb-0">Check out some of my latest projects with creative ideas.</h2>
            </div>
            <!--/column -->
            <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
                <a href="#" class="btn btn-lg btn-primary btn-icon btn-icon-end mb-0 d-none">See All Projects <i
                        class="uil uil-arrow-up-right"></i></a>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
        <div class="card bg-soft-violet mb-10">
            <div class="card-body p-12 pb-0">
                <div class="row">
                    <div class="col-lg-4 pb-12 align-self-center">
                        <div class="post-category fs-15 mb-3 text-violet">Member Management System</div>
                        <h3 class="h1 post-title mb-3">Mindspace Coworking Hub</h3>
                        <p>The admin panel enables staffs to monitor and manage the check-in and check-out times of
                            guests and members, while also tracking the cost associated with the time spent within the
                            facility.</p>
                        <a href="{{ Filament\Facades\Filament::getUrl() }}"
                            class="btn btn-sm btn-violet btn-icon btn-icon-end mb-0">Try Demo <i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7 offset-lg-1 align-self-end">
                        <figure><img class="img-fluid" src="./assets/img/photos/f1.png"
                                srcset="./assets/img/photos/f1@2x.png 2x" alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="card bg-soft-blue mb-10">
            <div class="card-body p-12">
                <div class="row gy-10 align-items-center">
                    <div class="col-lg-4 order-lg-2 offset-lg-1">
                        <div class="post-category fs-15 mb-3 text-blue">Web Design</div>
                        <h3 class="h1 post-title mb-3">Front-End Template</h3>
                        <p>A template available for creating a website, which simplifies the design and development
                            process.</p>
                        <a href="#" class="btn btn-sm btn-blue btn-icon btn-icon-end mb-0 d-none">See Project <i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7">
                        <figure><img class="img-fluid" src="./assets/img/photos/f1.png"
                                srcset="./assets/img/photos/f1@2x.png 2x" alt="" /></figure>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!--/.card-body -->
        </div>
        <!--/.card -->
        <div class="row gx-md-8 gx-xl-10 d-none">
            <div class="col-lg-6">
                <div class="card bg-soft-leaf mb-10">
                    <div class="card-body p-12 pb-0">
                        <div class="post-category fs-15 mb-3 text-leaf">Web Design</div>
                        <h3 class="h1 post-title mb-3">Missio Theme</h3>
                        <p>Maecenas faucibus mollis interdum sed posuere porta consectetur cursus porta lobortis.
                            Scelerisque id ligula felis.</p>
                        <a href="#" class="btn btn-sm btn-leaf btn-icon btn-icon-end mb-10">See Project <i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                    <!--/.card-body -->
                    <img class="card-img-bottom" src="./assets/img/photos/f3.png"
                        srcset="./assets/img/photos/f3@2x.png 2x" alt="" />
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="card bg-soft-pink">
                    <div class="card-body p-12 pb-0">
                        <div class="post-category fs-15 mb-3 text-pink">Mobile Design</div>
                        <h3 class="h1 post-title mb-3">Storage App</h3>
                        <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis. Scelerisque id
                            ligula porta felis.</p>
                        <a href="#" class="btn btn-sm btn-pink btn-icon btn-icon-end mb-10">See Project <i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                    <!--/.card-body -->
                    <img class="card-img-bottom" src="./assets/img/photos/f4.png"
                        srcset="./assets/img/photos/f4@2x.png 2x" alt="" />
                </div>
                <!--/.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

<section class="wrapper bg-light">
    <div class="container pb-16 pb-md-18">
        <div class="row gx-md-8 gx-xl-12 gy-10 align-items-center mb-16 mb-md-18">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="img-mask mask-2 px-xxl-5">
                    <img src="https://ik.imagekit.io/wow2navhj/HolySamael/271145987_4836987119692620_1709683117539141029_n.jpg?updatedAt=1736484781276"
                        alt="" />
                </div>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-2 mb-3">More about me</h2>
                <p class="lead fs-24">Hello! I'm Raf, a web developer based in Philippines.</p>
                <p>I'm a Laravel developer with a strong focus on building robust and scalable applications. My
                    expertise lies in backend development, where I excel at creating efficient, secure, and maintainable
                    systems. I specialize in crafting intuitive and powerful admin panels that enable seamless
                    management of application data and processes. My approach emphasizes clean code and efficient
                    workflows, ensuring that the backend infrastructure is not only functional but also optimized for
                    performance.</p>
                <p>On the front-end, I prioritize streamlined solutions that enhance user experience without adding
                    unnecessary complexity. I prefer straightforward, effective methods to implement features, ensuring
                    a balance between functionality and simplicity. By focusing on clarity and efficiency, I aim to
                    deliver applications that are both user-friendly and developer-friendly, providing a solid
                    foundation for future growth and adaptability.</p>
                <a href="#" class="btn btn-primary btn-icon btn-icon-end mt-2 disabled">Download Resume <i
                        class="uil uil-arrow-up-right"></i></a>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gx-xl-12 gy-10">
            <div class="col-lg-5 mx-auto">
                <h2 class="display-2 mb-3">My experiences</h2>
                <p class="lead fs-24 pe-xxl-8"></p>
            </div>
            <!--/column -->
            <div class="col-lg-7">
                <ul class="timeline">
                    <li class="timeline-item">
                        <div class="timeline-info meta fs-14">August 2024</div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">IT Head at Mindspace Coworking Hub</h3>
                            <p>The website is designed to efficiently manage guest and member check-ins and check-outs,
                                with automatic cost calculation based on the time spent, ensuring a smooth operation. It
                                also tracks staff attendance and monitors their sales performance, providing valuable
                                insights to enhance operational efficiency and productivity.</p>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info meta fs-14">September 2023</div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Full-Stack Developer at OFiber Communications Inc.</h3>
                            <p>Developed and maintained a comprehensive billing system backend using the Laravel
                                framework, ensuring seamless integration with front-end functionalities.
                                Optimized system performance and implemented secure, scalable solutions for efficient
                                customer billing and management.</p>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info meta fs-14">December 2022</div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Junior Web Developer at The Great Discovery</h3>
                            <p>Collaborated with senior developers to troubleshoot issues, implement new features, and
                                optimize website performance.</p>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info meta fs-14">February 2022</div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Junior Web Developer at Axend Solutions</h3>
                            <p>Assisted in the development and maintenance of responsive websites using HTML, CSS, and
                                JavaScript, ensuring cross-browser compatibility and seamless user experiences.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
@endsection