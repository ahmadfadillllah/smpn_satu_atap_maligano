@include('home.layout.head', ['title' =>'PPDB'])

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
        <div class="page-banner-area overlay overlay-black overlay-70">
            <div class="container">
                <div class="row">
                    <div class="page-banner text-center col-12">
                        <h1>PPDB</h1>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><span>PPDB</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="instructor-area" class="instructor-area bg-gray pt-90 pb-60">
            <div class="container">
                <!-- Section Title -->
                <div class="row">
                    <div class="section-title text-center col-12 mb-45">
                        <h3 class="heading">{!! $ppdb->pengumuman_pendaftaran !!}</h3>
                        <i class="icofont icofont-traffic-light"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        <!-- Instructor Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="instructor-1">
                                <div class="row">
                                    <div class="instructor-details text-left col-lg-7 col-12">
                                        {!! $ppdb->syarat_pendaftaran !!}
                                        <a href="#" class="btn black">Daftar Sekarang</a>
                                    </div>
                                    <div class="instructor-image col-lg-5 col-md-6 col-12">
                                        <img src="{{ asset('storage') }}/{{ $ppdb->path }}" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('home.layout.footer')
