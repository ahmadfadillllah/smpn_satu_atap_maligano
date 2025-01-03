@include('home.layout.head')

<body>
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
    <div class="wrapper fix">
        @include('home.layout.header')
        <div id="hero-area" class="hero-slider-area">
            <div id="hero-slider" class="nivoSlider slider-image">
                <img src="{{ asset('home') }}/img/slider/1.jpg" alt="main slider" title="#htmlcaption1" />
                <img src="{{ asset('home') }}/img/slider/4.jpg" alt="main slider" title="#htmlcaption2" />
                <img src="{{ asset('home') }}/img/slider/3.jpg" alt="main slider" title="#htmlcaption3" />
            </div>
            <div id="htmlcaption1" class="nivo-html-caption">
                <div class="slide-table container">
                    <div class="table-cell">
                        <div class="hero-slide-content float-right text-right">
                            <h3 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">selamat datang di
                            </h3>
                            <h1 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.2s"><span>smpn satu atap 1 maligano</span></h1>
                            <div class="button-group">
                                <a href="#" class="btn transparent wow fadeInLeft" data-wow-duration=".9s"
                                    data-wow-delay="2.4s">materi pembelajaran</a>
                                <a href="#" class="btn color wow fadeInLeft" data-wow-duration=".9s"
                                    data-wow-delay="2s">baca selanjutnya</a>
                            </div>
                        </div>
                        <div class="find-course-form float-left text-left wow fadeInUp" data-wow-duration=".9s"
                            data-wow-delay="3s">
                            @include('home.layout.course')
                        </div>
                    </div>
                </div>
            </div>
            <div id="htmlcaption2" class="nivo-html-caption">
                <div class="slide-table container">
                    <div class="table-cell">
                        <div class="hero-slide-content float-left text-left">
                            <h3 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">selamat datang di
                            </h3>
                            <h1 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.2s"><span>smpn satu atap 1 maligano</span></h1>
                            <div class="button-group">
                                <a href="#" class="btn transparent wow fadeInRight" data-wow-duration=".9s"
                                    data-wow-delay="2s">materi pembelajaran</a>
                                <a href="#" class="btn color wow fadeInRight" data-wow-duration=".9s"
                                    data-wow-delay="2.4s">baca selanjutnya</a>
                            </div>
                        </div>
                        <div class="find-course-form float-right text-left wow fadeInUp" data-wow-duration=".9s"
                            data-wow-delay="3s">
                            @include('home.layout.course')
                        </div>
                    </div>
                </div>
            </div>
            <div id="htmlcaption3" class="nivo-html-caption">
                <div class="slide-table container">
                    <div class="table-cell">
                        <div class="hero-slide-content text-center">
                            <h3 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="0.8s">selamat datang di
                            </h3>
                            <h1 class="wow fadeInUp" data-wow-duration=".9s" data-wow-delay="1.2s"><span>smpn satu atap 1 maligano</span></h1>
                            <div class="button-group">
                                <a href="#" class="btn transparent wow fadeInLeft" data-wow-duration=".9s"
                                    data-wow-delay="2s">materi pembelajaran</a>
                                <a href="#" class="btn color wow fadeInRight" data-wow-duration=".9s"
                                    data-wow-delay="2s">baca selanjutnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="feature-area" class="feature-area bg-gray pt-90 pb-90">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <h3 class="heading">profil</h3>
                        <div class="excerpt">
                            <p>UPTD SMP NEGERI SATU ATAP 1 MALIGANO merupakan salah satu sekolah jenjang SMP berstatus Negeri yang berada di wilayah Kec. Maligano, Kab. Muna, Sulawesi Tenggara. UPTD SMP NEGERI SATU ATAP 1 MALIGANO didirikan pada tanggal 1 Januari 1970 dengan Nomor SK Pendirian yang berada dalam naungan Kementerian Pendidikan dan Kebudayaan. Kepala Sekolah UPTD SMP NEGERI SATU ATAP 1 MALIGANO saat ini adalah Mustarim. Operator yang bertanggung jawab adalah Zaiba, S. Pd. , M. Pd. .

                                Dengan adanya keberadaan UPTD SMP NEGERI SATU ATAP 1 MALIGANO, diharapkan dapat memberikan kontribusi dalam mencerdaskan anak bangsa di wilayah Kec. Maligano, Kab. Muna.</p>
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="funfact-area overlay overlay-white overlay-80 pt-90 pb-60">
            <div class="container">
                <div class="row">
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-hat-alt"></i>
                        <h1 class="counter plus">6500</h1>
                        <p>graduted from here</p>
                    </div>
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-user-suited"></i>
                        <h1 class="counter">56</h1>
                        <p>teachers number</p>
                    </div>
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-history"></i>
                        <h1 class="counter">11</h1>
                        <p>years on market</p>
                    </div>
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-users-social"></i>
                        <h1 class="counter plus">550</h1>
                        <p>present students</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="course-area" class="course-area bg-gray pt-90 pb-60">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <h3 class="heading">course category</h3>
                        <div class="excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>
                <!-- Course Wrapper -->
                <div class="course-wrapper row">
                    <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                        <div class="course-item text-center">
                            <i class="icofont icofont-car-alt-4"></i>
                            <h4>normal driving</h4>
                            <p>There are many variations of items passag LoIpsum available the majority ratomised </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                        <div class="course-item text-center">
                            <i class="icofont icofont-ambulance-cross"></i>
                            <h4>defensive</h4>
                            <p>There are many variations of items passag LoIpsum available the majority ratomised </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                        <div class="course-item text-center">
                            <i class="icofont icofont-fast-delivery"></i>
                            <h4>power booster</h4>
                            <p>There are many variations of items passag LoIpsum available the majority ratomised </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-30 fix">
                        <div class="course-item text-center">
                            <i class="icofont icofont-rocket-alt-2"></i>
                            <h4>crash level</h4>
                            <p>There are many variations of items passag LoIpsum available the majority ratomised </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-area overlay overlay-black overlay-50">
            <div class="container">
                <div class="row">
                    <div class="video-content text-center col-12">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=ngaeb1jARAY"><i
                                class="icofont icofont-play-alt-2"></i></a>
                        <h3>our teaching process</h3>
                    </div>
                </div>
            </div>
        </div>
        <div id="gallery-area" class="gallery-area bg-gray pt-90 pb-60">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <h3 class="heading">golden gallery</h3>
                        <div class="excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>
                <!-- Gallery Filter -->
                <div class="gallery-filter text-center">
                    <button class="active" data-filter="*">all</button>
                    <button data-filter=".cars">cars</button>
                    <button data-filter=".students">students</button>
                    <button data-filter=".classroom">classroom</button>
                    <button data-filter=".exam">exam</button>
                </div>
                <!-- Gallery Grid -->
                <div class="gallery-grid row">
                    <div class="gallery-item cars col-lg-3 col-md-4 col-12">
                        <a href="{{ asset('home') }}/img/gallery/1.jpg" class="gallery-image image-popup">
                            <img src="{{ asset('home') }}/img/gallery/1.jpg" alt="" />
                            <div class="content">
                                <i class="icofont icofont-search"></i>
                                <h4>Class Test</h4>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item cars exam col-lg-3 col-md-4 col-12">
                        <a href="{{ asset('home') }}/img/gallery/2.jpg" class="gallery-image image-popup">
                            <img src="{{ asset('home') }}/img/gallery/2.jpg" alt="" />
                            <div class="content">
                                <i class="icofont icofont-search"></i>
                                <h4>Class Test</h4>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item classroom col-lg-3 col-md-4 col-12">
                        <a href="{{ asset('home') }}/img/gallery/3.jpg" class="gallery-image image-popup">
                            <img src="{{ asset('home') }}/img/gallery/3.jpg" alt="" />
                            <div class="content">
                                <i class="icofont icofont-search"></i>
                                <h4>Class Test</h4>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item cars students exam col-lg-3 col-md-4 col-12">
                        <a href="{{ asset('home') }}/img/gallery/4.jpg" class="gallery-image image-popup">
                            <img src="{{ asset('home') }}/img/gallery/4.jpg" alt="" />
                            <div class="content">
                                <i class="icofont icofont-search"></i>
                                <h4>Class Test</h4>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item cars students col-lg-3 col-md-4 col-12">
                        <a href="{{ asset('home') }}/img/gallery/5.jpg" class="gallery-image image-popup">
                            <img src="{{ asset('home') }}/img/gallery/5.jpg" alt="" />
                            <div class="content">
                                <i class="icofont icofont-search"></i>
                                <h4>Class Test</h4>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item students classroom col-lg-3 col-md-4 col-12">
                        <a href="{{ asset('home') }}/img/gallery/6.jpg" class="gallery-image image-popup">
                            <img src="{{ asset('home') }}/img/gallery/6.jpg" alt="" />
                            <div class="content">
                                <i class="icofont icofont-search"></i>
                                <h4>Class Test</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="testimonial-area" class="testimonial-area overlay overlay-white overlay-80 text-center pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <!-- Testimonial Image Slider -->
                        <div class="ti-slider mb-40">
                            <div class="single-slide">
                                <div class="image fix"><img src="{{ asset('home') }}/img/testimonial/1.jpg" alt="" />
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="image fix"><img src="{{ asset('home') }}/img/testimonial/2.jpg" alt="" />
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="image fix"><img src="{{ asset('home') }}/img/testimonial/3.jpg" alt="" />
                                </div>
                            </div>
                            <div class="single-slide">
                                <div class="image fix"><img src="{{ asset('home') }}/img/testimonial/4.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Content Slider -->
                        <div class="tc-slider">
                            <div class="single-slide">
                                <p>There are many many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by hum domised words which is don't look
                                    believable.</p>
                                <h5>momen bhuiyan</h5>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="single-slide">
                                <p>There are many many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by hum domised words which is don't look
                                    believable.</p>
                                <h5>Tasnim Akter</h5>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="single-slide">
                                <p>There are many many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by hum domised words which is don't look
                                    believable.</p>
                                <h5>momen bhuiyan</h5>
                                <span>Graphic Designer</span>
                            </div>
                            <div class="single-slide">
                                <p>There are many many variations of passages of Lorem Ipsum available, but the majority
                                    have suffered alteration in some form, by hum domised words which is don't look
                                    believable.</p>
                                <h5>Tasnim Akter</h5>
                                <span>Graphic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Arrows -->
            <button class="ts-arrows ts-prev"><i class="icofont icofont-caret-left"></i></button>
            <button class="ts-arrows ts-next"><i class="icofont icofont-caret-right"></i></button>
        </div>
        <div id="faq-area" class="faq-area bg-white pt-90 pb-60">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <h3 class="heading">Frequently asked questions</h3>
                        <div class="excerpt">
                            <p>Lorem ipsum dolor sit amet, consectetur maksu rez do eiusmod tempor magna aliqua</p>
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="panel-group" id="faq">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="true"
                                            href="#faq-1">There are many variations of passages of Lorem Ipsum?</a></h4>
                                </div>
                                <div id="faq-1" class="panel-collapse collapse show" data-parent="#faq">
                                    <div class="panel-body">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readaible is an content of the page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more less normal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false"
                                            href="#faq-2">There are many variations of passages of Lorem Ipsum?</a></h4>
                                </div>
                                <div id="faq-2" class="panel-collapse collapse" data-parent="#faq">
                                    <div class="panel-body">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readaible is an content of the page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more less normal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false"
                                            href="#faq-3">There are many variations of passages of Lorem Ipsum?</a></h4>
                                </div>
                                <div id="faq-3" class="panel-collapse collapse" data-parent="#faq">
                                    <div class="panel-body">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readaible is an content of the page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more less normal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false"
                                            href="#faq-4">There are many variations of passages of Lorem Ipsum?</a></h4>
                                </div>
                                <div id="faq-4" class="panel-collapse collapse" data-parent="#faq">
                                    <div class="panel-body">
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readaible is an content of the page when looking at its layout. The point of
                                            using Lorem Ipsum is that it has a more less normal.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-image col-lg-6 col-12">
                        <img src="{{ asset('home') }}/img/faq.png" alt="" />
                    </div>
                </div>
            </div>
        </div>

        @include('home.layout.footer')
