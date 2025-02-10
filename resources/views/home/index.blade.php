@include('home.layout.head', ['title' =>'Home'])

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
                        <a href="{{ route('home.materipembelajaran') }}" class="btn transparent wow fadeInRight" data-wow-duration=".9s"
                            data-wow-delay="2s">materi pembelajaran</a>
                        <a href="{{ route('home.contact') }}" class="btn color wow fadeInRight" data-wow-duration=".9s"
                            data-wow-delay="2.4s">hubungi kami</a>
                    </div>
                </div>
                {{-- <div class="find-course-form float-right text-left wow fadeInUp" data-wow-duration=".9s"
                    data-wow-delay="3s">
                    @include('home.layout.course')
                </div> --}}
            </div>
        </div>
        <div id="feature-area" class="feature-area bg-gray pt-90 pb-90">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-justify col-12 mb-45">
                        <h3 class="heading">profil</h3>
                        <div class="excerpt">
                            <p style="font-family:Arial, Helvetica, sans-serif">
                                UPTD SMP Negeri Satu Atap 1 Maligano merupakan salah satu sekolah jenjang SMP berstatus negeri yang berada di Desa Langkoroni, Kec. Maligano, Kab. Muna, Sulawesi Tenggara. Kepala sekolah UPTD SMP Negeri Satu Atap 1 Maligano saat ini adalah Mustarim, S.Pd. Operator yang bertanggung jawab adalah Rinto Gunadi. Dengan adanya keberadaan UPTD SMP Negeri Satu Atap 1 Maligano, diharapkan dapat memberikan kontribusi dalam mencerdaskan anak bangsa di Desa Langkoroni, Kec Maligano, Kab. Muna.
                            </p>
                        </div>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                            <h5 >NSPN</h5>
                            <p>{{ $data['profil']->nspn }}</p>
                        </div>
                        <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                            <h5 >SK Pendirian</h5>
                            <p>{{ $data['profil']->sk_pendirian }}</p>
                        </div>
                        <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                            <h5 >SK Izin Operasional</h5>
                            <p>{{ $data['profil']->sk_izin }}</p>
                        </div>
                        <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                            <h5 >Bentuk Pendidikan</h5>
                            <p>{{ $data['profil']->bentuk_pendidikan }}</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                            <h5 >Tanggal SK Pendirian</h5>
                            <p>{{ $data['profil']->tanggal_sk_pendirian }}</p>
                        </div>
                        <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                            <h5 >Tanggal SK Izin Operasional</h5>
                            <p>{{ $data['profil']->tanggal_sk_izin }}</p>
                        </div>
                        <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                            <h5 >Status Kepemilikan</h5>
                            <p>{{ $data['profil']->status_kepemilikan }}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="section-title text-justify col-12 mb-45">
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
                    {{-- <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-hat-alt"></i>
                        <h1 class="counter plus">6500</h1>
                        <p>lulusan sekolah</p>
                    </div> --}}
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-user-suited"></i>
                        <h1 class="counter">13</h1>
                        <p>jumlah guru</p>
                    </div>
                    {{-- <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-history"></i>
                        <h1 class="counter">11</h1>
                        <p>jumlah pendaftaran</p>
                    </div> --}}
                    <div class="single-facts text-center col-md-3 col-sm-6 col-12 mb-30">
                        <i class="icofont icofont-users-social"></i>
                        <h1 class="counter plus">23</h1>
                        <p>jumlah siswa</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="course-area" class="course-area bg-gray pt-90 pb-60">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-justify col-12 mb-45">
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

        {{-- <div id="testimonial-area" class="testimonial-area overlay overlay-white overlay-80 text-center pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">

                        <!-- Testimonial Image Slider -->
                        <div class="ti-slider mb-40">
                            @foreach ($data['rating'] as $rt)
                                <div class="single-slide">
                                    <div class="image fix"><img src="{{ asset('storage') }}/{{ $rt->path }}" alt="" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Testimonial Content Slider -->
                        <div class="tc-slider">
                            @foreach ($data['rating'] as $rt)
                                <div class="single-slide">
                                    <p>{{ $rt->deskripsi }}</p>
                                    <h5>{{ $rt->nama }}</h5>
                                    <span>{{ $rt->pekerjaan }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ratingInsert">
                Berikan rating untuk kami
              </button>

              <!-- Modal -->


            <!-- Slider Arrows -->
            <button class="ts-arrows ts-prev"><i class="icofont icofont-caret-left"></i></button>
            <button class="ts-arrows ts-next"><i class="icofont icofont-caret-right"></i></button>
        </div> --}}

        @include('home.rating')
        @include('home.layout.footer')
