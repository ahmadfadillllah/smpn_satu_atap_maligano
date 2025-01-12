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
        <div id="gallery-area" class="gallery-area bg-gray pt-40 pb-90">
            <div class="container">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pengumuman</th>
                        <th scope="col">Kuota</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ppdb as $pp)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ strip_tags($pp->pengumuman_pendaftaran) }}</td>
                                <td>{{ $pp->kuota }}</td>
                                <td>{{ $pp->status }}</td>
                                <td>
                                    <a href="{{ route('home.ppdb.detail', $pp->uuid) }}" class="btn btn-xs hover-black color">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        @include('home.layout.footer')
