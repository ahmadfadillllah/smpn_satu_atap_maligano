@include('dashboard.layout.head', ['title' => 'Kehadiran Guru'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<section class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h2 class="mb-0">Kehadiran Guru</h2>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('kehadiran.insert') }}" class="btn btn-primary d-inline-flex">
                            <i data-feather="plus-circle"></i> Absensi Harian
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- DOM/Jquery table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="d-flex align-items-center mb-3" style="gap: 10px;">
                                <div style="max-width: 250px;">
                                    <label class="form-label">Tanggal Absen</label>
                                    <input type="date" class="form-control" name="date" id="tanggalAbsen" required>
                                </div>
                                <button type="submit" class="btn btn-success">Cari</button>
                            </div>
                        </form>



                        <div class="table-responsive dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>NIP</th>
                                        <th>Nama Guru</th>
                                        <th>Kelas</th>
                                        <th>Status Keaktifan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absensi as $ab)
                                        <tr>
                                            <td>{{ $ab->nip }}</td>
                                            <td>{{ $ab->guru }}</td>
                                            <td>{{ $ab->kelas }}</td>
                                            <td>{{ $ab->status }}</td>
                                            <td>
                                                @if (Auth::user()->role == 'Operator')
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#editKehadiran{{ $ab->uuid }}"><i class="ti ti-edit f-20"></i> </a>
                                                @endif
                                            </td>
                                        </tr>
                                        @include('kehadiran.modal.edit')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('dashboard.layout.footer')
<script>
    // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
    const today = new Date().toISOString().split('T')[0];

    // Mendapatkan parameter 'date' dari URL (query string)
    const urlParams = new URLSearchParams(window.location.search);
    const dateFromUrl = urlParams.get('date'); // Mengambil nilai 'date' dari URL

    // Mengatur nilai input tanggal, jika ada 'date' di URL gunakan itu, jika tidak gunakan tanggal hari ini
    document.getElementById('tanggalAbsen').value = dateFromUrl || today;
</script>

