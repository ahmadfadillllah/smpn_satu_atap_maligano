@include('dashboard.layout.head', ['title' => 'Input Absensi'])
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
                            <h2 class="mb-0">Input Absensi</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <!-- DOM/Jquery table start -->
            <div class="col-sm-12">
                <div class="card">
                    <form action="{{ route('kehadiran.post') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3" style="max-width: 250px;">
                                <label class="form-label">Tanggal Absen</label>
                                <input type="date" class="form-control" name="date" required>
                            </div>

                            <div class="table-responsive dt-responsive">
                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>NIP</th>
                                            <th>Nama Guru</th>
                                            <th>Status Keaktifan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($guru as $gr)
                                        <tr>
                                            <!-- Input NIP -->
                                            <th>
                                                <input type="hidden" name="data[{{ $gr->id }}][guru_id]" value="{{ $gr->id }}">
                                                {{ $gr->nip }}
                                            </th>

                                            <th>{{ $gr->guru }}</th>

                                            <!-- Radio Button Hadir / Tidak Hadir -->
                                            <th>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="data[{{ $gr->id }}][status]" value="Hadir" id="hadir_{{ $gr->id }}" checked>
                                                    <label class="form-check-label" for="hadir_{{ $gr->id }}">Hadir</label>
                                                </div>
                                                <div class="form-check mb-2">
                                                    <input class="form-check-input" type="radio" name="data[{{ $gr->id }}][status]" value="Tidak Hadir" id="tidak_hadir_{{ $gr->id }}">
                                                    <label class="form-check-label" for="tidak_hadir_{{ $gr->id }}">Tidak Hadir</label>
                                                </div>
                                            </th>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary d-inline-flex">
                                     Simpan
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@include('dashboard.layout.footer')
<script>
   $(document).ready(function () {
        var table = $('#dom-jqry').DataTable();
        table.page.len(25).draw(); // Set default ke 25 entry per halaman
    });

</script>
