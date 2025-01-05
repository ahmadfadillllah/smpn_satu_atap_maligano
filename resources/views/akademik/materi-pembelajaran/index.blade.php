@include('dashboard.layout.head', ['title' => 'Materi Pembelajaran'])
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
                            <h2 class="mb-0">Materi Pembelajaran</h2>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#insertMateri">
                            <i data-feather="plus-circle"></i> Tambah Materi
                        </button>
                        @include('akademik.materi-pembelajaran.modal.insert')
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- DOM/Jquery table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Judul</th>
                                        <th>Kelas</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Berkas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['materi'] as $mt)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $mt->uuid }}</td>
                                            <td>{{ $mt->judul }}</td>
                                            <td>{{ $mt->kelas }}</td>
                                            <td>{{ $mt->penerbit }}</td>
                                            <td>{{ $mt->tahun_terbit }}</td>
                                            <td>
                                                <a href="{{ asset('storage') }}/{{ $mt->path }}" target="_blank">
                                                    @if ($mt->format == 'xlsx') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-xls.svg" alt="img" class="img-fluid">@endif
                                                    @if ($mt->format == 'pdf') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-pdf.svg" alt="img" class="img-fluid">@endif
                                                    @if ($mt->format == 'xls') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-xls.svg" alt="img" class="img-fluid">@endif
                                                    @if ($mt->format == 'doc') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-doc.svg" alt="img" class="img-fluid">@endif
                                                    @if ($mt->format == 'rar') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-rar.svg" alt="img" class="img-fluid">@endif
                                                    @if ($mt->format == 'ppt') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-ppt.svg" alt="img" class="img-fluid">@endif
                                                    @if ($mt->format == 'pptx') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-ppt.svg" alt="img" class="img-fluid">@endif
                                                    @if ($mt->format == 'txt') <img src="{{ asset('dashboard') }}/assets/images/application/img-file-txt.svg" alt="img" class="img-fluid">@endif
                                                    {{-- {{ $mt->files }} --}}
                                                </a>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger d-inline-flex" data-bs-toggle="modal" data-bs-target="#deleteMateri{{ $mt->uuid }}">
                                                    <i class="ti ti-alert-triangle me-1"></i>  Hapus
                                                </button>
                                            </td>
                                        </tr>
                                        @include('akademik.materi-pembelajaran.modal.delete')
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Judul</th>
                                        <th>Kelas</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Berkas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('dashboard.layout.footer')
