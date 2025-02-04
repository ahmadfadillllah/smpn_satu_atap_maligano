@include('dashboard.layout.head', ['title' => 'Kelas'])
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
                            <h2 class="mb-0">Kelas</h2>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#insertKelas">
                            <i data-feather="plus-circle"></i> Tambah Kelas
                        </button>
                        @include('kelas.modal.insert')
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
                                        <th>Kelas</th>
                                        <th>Wali</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $kl)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kl->kelas }}</td>
                                            <td>{{ $kl->guru }}</td>
                                            <td>
                                                @if (Auth::user()->role == 'Operator')
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#editKelas{{ $kl->uuid }}"><i class="ti ti-edit f-20"></i> </a>
                                                @endif
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#deleteKelas{{ $kl->uuid }}"><i class="ti ti-trash f-20"></i></a>
                                            </td>
                                        </tr>
                                        @include('kelas.modal.edit')
                                        @include('kelas.modal.delete')
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Kelas</th>
                                        <th>Wali</th>
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
