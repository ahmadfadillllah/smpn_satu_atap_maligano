@include('home.layout.head', ['title' =>'Jadwal Pembelajaran'])

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
                        <h1>jadwal pembelajaran</h1>
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><span>jadwal pembelajaran</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="gallery-area" class="gallery-area bg-gray pt-40 pb-90">
            <div class="container">
                <form action="" method="get">
                <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-control" name="kelas_id" required>
                                <option selected disabled>Pilih kelas</option>
                                @foreach ($kelas as $kls)
                                    <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="tahunPelajaran" class="form-label">Nama Pelajaran</label>
                            <select class="form-control" name="pelajaran_id" required>
                                <option selected disabled>Pilih pelajaran</option>
                                @foreach ($pelajaran as $pl)
                                    <option value="{{ $pl->id }}">{{ $pl->pelajaran }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="semester" class="form-label">Semester</label>
                            <select class="form-control" name="semester" required>
                                <option selected disabled>Pilih semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3 d-flex align-items-end">
                            <button class="btn btn-black w-80" type="submit">Cari</button>
                        </div>
                    </div>
                </form>

                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode MP</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Hari</th>
                        <th scope="col">Jam</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $jd)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $jd->kelas_id }}</td>
                                <td>{{ $jd->semester }}</td>
                                <td>{{ $jd->pelajaran }}</td>
                                <td>{{ $jd->hari }}</td>
                                <td>{{ $jd->jam_masuk }} s/d {{ $jd->jam_selesai }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        @include('home.layout.footer')
