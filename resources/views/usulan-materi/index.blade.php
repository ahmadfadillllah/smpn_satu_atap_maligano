@include('dashboard.layout.head', ['title' => 'Usulan Materi'])
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
                            <h2 class="mb-0">Usulan Materi</h2>
                        </div>
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
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No WhatsApp</th>
                                        <th>Materi yang diusulkan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usulan as $us)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $us->name }}</td>
                                            <td>{{ $us->email }}</td>
                                            <td>{{ $us->no_wa }}</td>
                                            <td>{{ $us->materi }}</td>
                                            <td>
                                                <button type="button" class="btn btn-danger d-inline-flex" data-bs-toggle="modal" data-bs-target="#deleteUsulan{{ $us->uuid }}">
                                                    <i class="ti ti-alert-triangle me-1"></i>  Hapus
                                                </button>
                                            </td>
                                        </tr>
                                        @include('usulan-materi.modal.delete')
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No WhatsApp</th>
                                        <th>Materi yang diusulkan</th>
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
