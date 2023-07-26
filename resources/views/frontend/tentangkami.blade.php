@extends('frontend.component.index2')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs mt-5">
        <div class="breadcrumb-hero">
            <div class="container">
                <div class="breadcrumb-hero">
                    <h2>Tentang Kami</h2>
                    {{-- <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas
                        sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p> --}}
                </div>
            </div>
        </div>
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Tentang Kami</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 py-3 content">
                    <h3>
                        Endemic Florasia
                    </h3>
                    <p>
                        Endemic Florasia adalah sebuah inovasi untuk menjelajahi dan mempelajari tanaman endemik yang
                        khas dari benua Asia. Dengan akses ke berbagai informasi tentang tanaman endemik Asia, aplikasi
                        ini menawarkan wawasan mendalam tentang keajaiban alam dan keanekaragaman hayati yang luar biasa
                        di wilayah tersebut.
                    </p>
                    <h3>
                        Fitur-fitur
                    </h3>
                    <ul>
                        <li><i class="bx bx-check"></i>Database Keanekaragaman Tanaman: Aplikasi ini memiliki database
                            yang kaya akan informasi tentang tanaman endemik Asia.</li>
                        <li><i class="bx bx-check"></i>Edukasi dan Keterlibatan Masyarakat: Aplikasi ini berfungsi
                            sebagai sumber pembelajaran yang interaktif dan mengedukasi pengguna tentang pentingnya
                            pelestarian tanaman endemik.</li>
                        <li><i class="bx bx-check"></i>Koneksi dengan Ahli dan Peneliti: Aplikasi ini memfasilitasi
                            kolaborasi antara pengguna dan para ahli di bidang botani dan konservasi.</li>
                    </ul>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Work Process Section ======= -->
    {{-- <section id="work-process" class="work-process">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Work Process</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row content">
                <div class="col-md-5" data-aos="fade-right">
                    <img src="assets/img/work-process-1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4" data-aos="fade-left">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    </ul>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/work-process-2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5" data-aos="fade-right">
                    <img src="assets/img/work-process-3.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5" data-aos="fade-left">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut
                        quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                    </ul>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/work-process-4.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Work Process Section -->

    <!-- ======= Our Skills Section ======= -->
    {{-- <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Our Skills</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/skills-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>

                    <div class="skills-content">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section> --}}
    <!-- End Our Skills Section -->

    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="section-title">
                <h2>Tim C23-M4034</h2>
                <p>Anggota Tim</p>
            </div>

            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-1.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Gusde Biyan Ambarista</h3>
                            <h4>Politeknik Negeri Jember</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-2.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Galuh Apriliano</h3>
                            <h4>Politeknik Negeri Jember</h4>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-3.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Dzaki Ahmad Fajrianto</h3>
                            <h4>Politeknik Negeri Banyuwangi</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('frontend/assets/img/testimonials/testimonials-4.jpg') }}"
                                class="testimonial-img" alt="">
                            <h3>Amalia Pratiwi</h3>
                            <h4>Universitas Mercu Buana</h4>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <!-- ======= Our Clients Section ======= -->
    {{-- <section id="clients" class="clients">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Our Clients</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                            alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section> --}}
    <!-- End Our Clients Section -->
@endsection
