@include('home.layout.head', ['title' =>'Materi Pembelajaran'])

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
                        <h1>materi pembelajaran</h1>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><span>materi pembelajaran</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="gallery-area" class="gallery-area bg-gray pt-90 pb-90">
            <div class="container">
                <div class="container text-center">
                    <div class="row">
                        @foreach ($materi as $mt)
                        <div class="col-sm-3">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    @if ($mt->format == 'xlsx') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-xls.svg" style="width: 70px;" class="img-fluid">@endif
                                @if ($mt->format == 'pdf') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-pdf.svg" style="width: 70px;" class="img-fluid">@endif
                                @if ($mt->format == 'xls') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-xls.svg" style="width: 70px;" class="img-fluid">@endif
                                @if ($mt->format == 'doc') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-doc.svg" style="width: 70px;" class="img-fluid">@endif
                                @if ($mt->format == 'rar') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-rar.svg" style="width: 70px;" class="img-fluid">@endif
                                @if ($mt->format == 'ppt') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-ppt.svg" style="width: 70px;" class="img-fluid">@endif
                                @if ($mt->format == 'pptx') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-ppt.svg" style="width: 70px;" class="img-fluid">@endif
                                @if ($mt->format == 'txt') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-txt.svg" style="width: 70px;" class="img-fluid">@endif
                                  <h5 class="card-title">{{ $mt->judul }}</h5>
                                  <table class="table">
                                    <tbody style="text-align:left">
                                      <tr>
                                        <th scope="row">Kelas</th>
                                        <td>{{ $mt->kelas }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Penerbit</th>
                                        <td>{{ $mt->penerbit }}</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">Tahun</th>
                                        <td>{{ $mt->tahun_terbit }}</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <a href="{{ asset('storage') }}/{{ $mt->path }}" class="btn btn-primary" target="_blank">Download</a>
                                </div>
                              </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @include('home.layout.footer')
