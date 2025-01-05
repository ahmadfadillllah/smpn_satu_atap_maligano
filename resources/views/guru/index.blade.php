@include('dashboard.layout.head', ['title' => 'Guru'])
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
                            <h5 class="mb-3 mb-sm-0">List Guru</h5>
                            <button type="button" class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#insertGuru">
                                <i data-feather="plus-circle"></i> Tambah Guru
                            </button>
                            @include('guru.modal.insert')
                        </div>
                    </div>
                    <div class="card-body pt-3">
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guru as $gr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0"><img
                                                            src="{{ asset('users') }}/default.png" alt="user image"
                                                            class="img-radius wid-40"></div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h6 class="mb-0">{{ $gr->guru }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $gr->jabatan }}</td>
                                            @if ($gr->statusenabled == true)
                                                <td class="text-success"><i class="fas fa-circle f-10 m-r-10"></i> Aktif</td>
                                            @else
                                                <td class="text-secondary"><i class="fas fa-circle f-10 m-r-10"></i> Non Aktif</td>
                                            @endif
                                            <td>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#editGuru{{ $gr->uuid }}"><i class="ti ti-edit f-20"></i> </a>
                                                <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#deleteGuru{{ $gr->uuid }}"><i class="ti ti-trash f-20"></i></a>
                                            </td>
                                        </tr>
                                        @include('guru.modal.edit')
                                        @include('guru.modal.delete')
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
