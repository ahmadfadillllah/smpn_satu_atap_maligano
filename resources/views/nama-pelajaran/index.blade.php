@include('dashboard.layout.head', ['title' => 'Nama Pelajaran'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->

        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-12">
                <div class="card table-card">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h5 class="mb-3 mb-sm-0">List Pelajaran</h5>
                            <button type="button" class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#insertPelajaran">
                                <i data-feather="plus-circle"></i> Tambah Pelajaran
                            </button>
                            @include('nama-pelajaran.modal.insert')
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelajaran as $pr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pr->pelajaran }}</td>
                                            <td>
                                                @if (Auth::user()->role == 'Operator')
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#editPelajaran{{ $pr->uuid }}"><i class="ti ti-edit f-20"></i> </a>
                                                @endif
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#deletePelajaran{{ $pr->uuid }}"><i class="ti ti-trash f-20"></i></a>
                                            </td>
                                        </tr>
                                        @include('nama-pelajaran.modal.edit')
                                        @include('nama-pelajaran.modal.delete')
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- [ Main Content ] end -->
    </div>
</div>
@include('dashboard.layout.footer')
