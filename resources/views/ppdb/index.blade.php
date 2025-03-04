@include('dashboard.layout.head', ['title' => 'PPDB'])
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
                            <h2 class="mb-0">PPDB</h2>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="{{ route('ppdb.insert') }}" class="btn btn-primary d-inline-flex">
                            <i data-feather="plus-circle"></i> Tambah Pendaftaran
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
                        <div class="table-responsive dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Pengumuman</th>
                                        <th>Kuota</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['ppdb'] as $ppdb)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ strip_tags($ppdb->pengumuman_pendaftaran) }}</td>
                                            <td>{{ $ppdb->kuota }}</td>
                                            <td>{{ $ppdb->status }}</td>
                                            <td>
                                                @if (Auth::user()->role == 'Operator')
                                                <a href="{{ route('ppdb.edit', $ppdb->uuid) }}" class="avtar avtar-xs btn-link-secondary" ><i class="ti ti-edit f-20"></i> </a>
                                                @endif
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#deletePPDB{{ $ppdb->uuid }}"><i class="ti ti-trash f-20"></i></a>
                                            </td>
                                        </tr>
                                        @include('ppdb.modal.delete')
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Pengumuman</th>
                                        <th>Kuota</th>
                                        <th>Status</th>
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
