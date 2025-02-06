@include('home.layout.head', ['title' =>'Galeri'])

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
        <div class="video-area overlay overlay-black overlay-70">
            <div class="container">
                <div class="row">
                    <div class="page-banner text-center col-12">
                        <h1>Galeri</h1>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><span>Galeri</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="gallery-area" class="gallery-area bg-gray pt-90 pb-90">
            <div class="container">
                <!-- Gallery Filter -->
                <div class="gallery-filter text-center">
                    <button class="active" data-filter="*">all</button>
                    <button data-filter=".Foto">foto</button>
                    <button data-filter=".Video">video</button>
                </div>
                <!-- Gallery Grid -->
                <div class="gallery-grid row mb-20">
                    @foreach ($galeri as $gl)
                    <div class="gallery-item {{ $gl->kategori }} col-lg-3 col-md-4 col-12">
                        @if ($gl->kategori == 'Foto')
                            <a href="{{ asset('storage/') }}/{{ $gl->path }}" class="gallery-image image-popup">
                                <img src="{{ asset('storage/') }}/{{ $gl->path }}" alt="img" class="img-fluid w-100">
                                <div class="content">
                                    <i class="icofont icofont-search"></i>
                                    <h4>Class Test</h4>
                                </div>
                            </a>
                            @else
                            <a href="{{ asset('storage/' . $gl->path) }}" type="video/{{ pathinfo($gl->path, PATHINFO_EXTENSION) }}" class="gallery-image image-popup">
                                <video class="img-fluid w-100" controls autoplay>
                                    <source src="{{ asset('storage/' . $gl->path) }}" type="video/{{ pathinfo($gl->path, PATHINFO_EXTENSION) }}">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="content">
                                    <i class="icofont icofont-search"></i>
                                    <h4>Class Test</h4>
                                </div>
                            </a>
                            @endif

                    </div>
                    @endforeach

                </div>
                <div class="pagination text-center">
                    <ul>
                        <li><a href="#"><i class="icofont icofont-simple-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icofont icofont-simple-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @include('home.layout.footer')
