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
        <div class="hearo-area hero-static slideshow-bg overlay overlay-black overlay-60 fix">
            <div class="container">
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
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <div class="excerpt">
                            {!! $data['profil']->profile !!}
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
                        <p>lulusan sekolah</p>
                    </div>
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-user-suited"></i>
                        <h1 class="counter">{{ $data['guru']->count() }}</h1>
                        <p>jumlah guru</p>
                    </div>
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-history"></i>
                        <h1 class="counter">11</h1>
                        <p>jumlah pendaftaran</p>
                    </div>
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-users-social"></i>
                        <h1 class="counter plus">550</h1>
                        <p>jumlah siswa</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="course-area" class="course-area bg-gray pt-90 pb-60">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <h3 class="heading">Visi</h3>
                        <div class="excerpt">
                            {!! $data['profil']->visi !!}
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="section-title col-12 mb-45">
                        <h3 class="heading">misi</h3>
                        <div class="excerpt">
                            {!! $data['profil']->misi !!}
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
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


        @include('home.layout.footer')
