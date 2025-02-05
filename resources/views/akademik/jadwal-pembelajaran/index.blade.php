@include('dashboard.layout.head', ['title' => 'Jadwal Pembelajaran'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<div class="pc-container">
    <div class="pc-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <form action="" method="get">
                            <div class="row">
                                <!-- Filter Kelas -->
                                <div class="col-md-2 mb-3">
                                    <select class="form-control" name="search_kelas" required>
                                        <option selected disabled>Cari kelas</option>
                                        @foreach ($data['kelas'] as $kls)
                                            <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Filter Nama Pelajaran -->
                                <div class="col-md-2 mb-3">
                                    <select class="form-control" name="search_hari" required>
                                        <option selected disabled>Cari hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                    </select>
                                </div>

                                <!-- Tombol Tambah Jadwal -->
                                <div class="col-md-1 mb-3 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Cari
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Jadwal Pembelajaran</h5>
                            <div><a href="#" data-bs-toggle="modal" data-bs-target="#insertJadwal"
                                    class="btn btn-primary">Tambah Jadwal</a></div>
                            @include('akademik.jadwal-pembelajaran.modal.insert')
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Loop untuk setiap kelompok hari -->
                            @foreach($data['pelajaran'] as $hari => $jadwal)
                            <div class="col-sm-6 col-lg-6 col-xxl-6">
                                <div class="card border">
                                    <div class="card-body p-2">
                                        <ul class="list-group list-group-flush my-2">
                                            <li class="list-group-item px-0 py-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 me-2">
                                                        <h4 class="mb-1">{{ $hari }}</h4>
                                                        <!-- Menampilkan Kelas di bawah Hari -->
                                                        {{-- <p><strong>Kelas:</strong> {{ $jadwal->first()->kelas }}
                                                        </p> --}}
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kelas</th>
                                                            <th>Semester</th>
                                                            <th>Guru</th>
                                                            <th>Pelajaran</th>
                                                            <th>Jam</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Loop untuk setiap jadwal yang ada dalam hari tersebut -->
                                                        @foreach($jadwal as $ch)
                                                        <tr style="font-size: 8pt">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $ch->kelas }}</td>
                                                            <td>{{ $ch->semester }}</td>
                                                            <td>{{ $ch->guru }}</td>
                                                            <td>{{ $ch->pelajaran }}</td>
                                                            <td>{{ \Carbon\Carbon::parse($ch->jam_masuk)->format('H:i') }} s/d {{ \Carbon\Carbon::parse($ch->jam_selesai)->format('H:i') }}</td>
                                                            <td>
                                                                @if (Auth::user()->role == 'Operator')
                                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#editJadwal{{ $ch->uuid }}"><i class="material-icons-two-tone">edit</i></a>
                                                                @endif
                                                                <a href="#" class="avtar avtar-xs btn-link-secondary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteJadwal{{ $ch->uuid }}"><i
                                                                        class="material-icons-two-tone">delete_outline</i></a>
                                                            </td>
                                                        </tr>
                                                        @include('akademik.jadwal-pembelajaran.modal.edit')
                                                        @include('akademik.jadwal-pembelajaran.modal.delete')
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
