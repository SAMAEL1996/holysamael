@extends('portfolio.layouts.app')

@section('title', 'Contact')

@section('content')
<section class="wrapper bg-dark">
    <div class="swiper-thumbs-container image-wrapper swiper-fullscreen bg-image bg-overlay" data-margin="0"
        data-image-src="{{ asset('img/portfolio/blue-bg.jpg') }}">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-lg-8 mx-auto mt-n10 text-center">
                    <div class="img-mask"><img src="{{ asset('img/portfolio/logo/logo-circle-white.png') }}"
                            srcset="{{ asset('img/portfolio/logo/logo-circle-white.png') }} 2x" alt="" /></div>
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
                        <a href="{{ Filament\Facades\Filament::getUrl() }}" target="_blank"
                            class="btn btn-sm btn-violet btn-icon btn-icon-end mb-0">Try Demo <i
                                class="uil uil-arrow-up-right"></i></a>
                    </div>
                    <!-- /column -->
                    <div class="col-lg-7 offset-lg-1 align-self-end">
                        <figure><img class="img-fluid"
                                src="https://ik.imagekit.io/wow2navhj/HolySamael/mindspace-display.png?updatedAt=1736589002258"
                                srcset="https://ik.imagekit.io/wow2navhj/HolySamael/mindspace-display.png?updatedAt=1736589002258 2x"
                                alt="" /></figure>
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

<section class="wrapper bg-gradient-reverse-primary">
    <div class="container pb-10 pb-md-13">
        <div class="row mb-8 text-center">
            <div class="col-lg-8 col-xl-7 mx-auto">
                <h2 class="fs-15 ls-xl text-uppercase text-muted d-none">Inner Pages</h2>
                <h2 class="display-3 mt-3 mb-3 mb-0">Skills.</h2>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="grid grid-view projects-masonry">
            <div class="isotope-filter filter mb-10 text-start text-md-center">
                <ul>
                    <li><a class="filter-item active" data-filter="*">All</a></li>
                    <li><a class="filter-item" data-filter=".frontend">Frontend</a></li>
                    <li><a class="filter-item" data-filter=".backend">Backend</a></li>
                    <li><a class="filter-item" data-filter=".tools">Tools</a></li>
                </ul>
            </div>
            <div data-cue="fadeIn" data-group="features-3">
                <div
                    class="row row-cols-2 row-cols-md-4 row-cols-lg-6 gx-md-8 gy-10 isotope text-center justify-content-center">
                    <div class="project item col backend">
                        <img class="mb-4" src="{{ asset('icons/backend/filament.png') }}"
                            srcset="{{ asset('icons/backend/filament.png') }} 2x" width="60" />
                        <h4>Filament</h4>
                    </div>
                    <div class="project item col frontend">
                        <img class="mb-4" src="{{ asset('icons/frontend/bootstrap.png') }}"
                            srcset="{{ asset('icons/frontend/bootstrap.png') }} 2x" width="60" />
                        <h4>Bootstrap</h4>
                    </div>
                    <div class="project item col backend">
                        <img class="mb-4" src="{{ asset('icons/backend/laravel.png') }}"
                            srcset="{{ asset('icons/backend/laravel.png') }} 2x" width="60" />
                        <h4>Laravel</h4>
                    </div>
                    <div class="project item col tools">
                        <img class="mb-4" src="{{ asset('icons/tools/sourcetree.png') }}"
                            srcset="{{ asset('icons/tools/sourcetree.png') }} 2x" width="60" />
                        <h4>Sourcetree</h4>
                    </div>
                    <div class="project item col tools">
                        <img class="mb-4" src="{{ asset('icons/tools/github.png') }}"
                            srcset="{{ asset('icons/tools/github.png') }} 2x" width="60" />
                        <h4>GitHub</h4>
                    </div>
                    <div class="project item col frontend">
                        <img class="mb-4" src="{{ asset('icons/frontend/js.png') }}"
                            srcset="{{ asset('icons/frontend/js.png') }} 2x" width="60" />
                        <h4>JS</h4>
                    </div>
                    <div class="project item col backend">
                        <img class="mb-4" src="{{ asset('icons/backend/mysql.png') }}"
                            srcset="{{ asset('icons/backend/mysql.png') }} 2x" width="60" />
                        <h4>MySQL</h4>
                    </div>
                    <div class="project item col tools">
                        <img class="mb-4" src="{{ asset('icons/tools/git.png') }}"
                            srcset="{{ asset('icons/tools/git.png') }} 2x" width="60" />
                        <h4>Git</h4>
                    </div>
                    <div class="project item col frontend">
                        <img class="mb-4" src="{{ asset('icons/frontend/jQuery.png') }}"
                            srcset="{{ asset('icons/frontend/jQuery.png') }} 2x" width="60" />
                        <h4>jQuery</h4>
                    </div>
                    <div class="project item col frontend">
                        <img class="mb-4" src="{{ asset('icons/frontend/html.png') }}"
                            srcset="{{ asset('icons/frontend/html.png') }} 2x" width="60" />
                        <h4>HTML</h4>
                    </div>
                    <div class="project item col backend">
                        <img class="mb-4" src="{{ asset('icons/backend/nodejs.png') }}"
                            srcset="{{ asset('icons/backend/nodejs.png') }} 2x" width="60" />
                        <h4>Node.js</h4>
                    </div>
                    <div class="project item col frontend">
                        <img class="mb-4" src="{{ asset('icons/frontend/css.png') }}"
                            srcset="{{ asset('icons/frontend/css.png') }} 2x" width="60" />
                        <h4>CSS</h4>
                    </div>
                    <div class="project item col tools">
                        <img class="mb-4" src="{{ asset('icons/tools/vs-code.png') }}"
                            srcset="{{ asset('icons/tools/vs-code.png') }} 2x" width="60" />
                        <h4>VS Code</h4>
                    </div>
                    <div class="project item col tools">
                        <img class="mb-4" src="{{ asset('icons/tools/phpstorm.png') }}"
                            srcset="{{ asset('icons/tools/phpstorm.png') }} 2x" width="60" />
                        <h4>PhpStorm</h4>
                    </div>
                    <div class="project item col backend">
                        <img class="mb-4" src="{{ asset('icons/backend/php.png') }}"
                            srcset="{{ asset('icons/backend/php.png') }} 2x" width="60" />
                        <h4>PHP</h4>
                    </div>
                    <div class="project item col frontend">
                        <img class="mb-4" src="{{ asset('icons/frontend/tailwind-css.png') }}"
                            srcset="{{ asset('icons/frontend/tailwind-css.png') }} 2x" width="60" />
                        <h4>Tailwind <br>CSS</h4>
                    </div>
                    <div class="project item col backend">
                        <img class="mb-4" src="{{ asset('icons/backend/livewire.png') }}"
                            srcset="{{ asset('icons/backend/livewire.png') }} 2x" width="60" />
                        <h4>Livewire</h4>
                    </div>
                    <div class="project item col tools">
                        <img class="mb-4" src="{{ asset('icons/tools/postman.png') }}"
                            srcset="{{ asset('icons/tools/postman.png') }} 2x" width="60" />
                        <h4>Postman</h4>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /div -->
        </div>
        <!-- /.grid -->
        <div class="mb-15"></div>
    </div>
    <!-- /.container -->
    <div class="overflow-hidden">
        <div class="divider text-light mx-n2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100">
                <path fill="currentColor"
                    d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z" />
            </svg>
        </div>
    </div>
    <!-- /.overflow-hidden -->
</section>

<section class="wrapper bg-light">
    <div class="container pb-10 pb-md-12">
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
                <a href="{{ route('portfolio.raf.download-cv') }}" class="btn btn-primary btn-icon btn-icon-end mt-2">Download Resume <i
                        class="uil uil-arrow-up-right"></i></a>
            </div>
            <!--/column -->
        </div>
        <!-- /.row -->
        <div class="row gx-md-8 gx-xl-12 gy-10">
            <div class="col-lg-5 mx-auto">
                <h2 class="display-2 mb-3">My experiences</h2>
                <p class="lead fs-24 pe-xxl-8">As a Web Developer, I have designed and implemented robust, scalable web
                    applications using Laravel, Filament, Livewire, Bootstrap, and JavaScript, while integrating
                    advanced features
                    such as custom widgets, data tables, and third-party APIs.</p>
            </div>
            <!--/column -->
            <div class="col-lg-7">
                <ul class="timeline">
                    <li class="timeline-item">
                        <div class="timeline-info meta fs-14">August 2024</div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">IT Head at Mindspace Coworking Hub</h3>
                            <p>Designed and developed a website to streamline the entire process of managing guest and
                                member check-ins and check-outs. With this system, I’ve ensured that calculating costs
                                based on the time spent is automatic and seamless, making operations smoother for both
                                the staff and the guests. Additionally, I incorporated features to track staff
                                attendance and monitor their sales performance. These insights are invaluable for
                                improving operational efficiency and boosting productivity, giving the management the
                                tools they need to make informed decisions.</p>
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
                            <h3 class="timeline-title">Junior Full-Stack Developer at The Great Discovery</h3>
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