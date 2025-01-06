@include('dashboard.layout.head', ['title' => 'Users'])
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
                            <h2 class="mb-0">Users</h2>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <button type="button" class="btn btn-primary d-inline-flex" data-bs-toggle="modal" data-bs-target="#insertUsers">
                            <i data-feather="plus-circle"></i> Tambah User
                        </button>
                        @include('users.modal.insert')
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- DOM/Jquery table start -->
            <div class="col-sm-12">
                @include('notification.alert')
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nikname</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Akun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $us)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $us->nikname }}</td>
                                            <td>{{ $us->name }}</td>
                                            <td>{{ $us->email }}</td>
                                            <td>{{ $us->role }}</td>
                                            <td>
                                                @if ($us->statusenabled == true)
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-warning">Tidak Aktif</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('users.status', $us->id) }}">
                                                    @if ($us->statusenabled == true)
                                                        <span class="badge text-bg-danger">Disabled</span>
                                                    @else
                                                        <span class="badge text-bg-success">Enabled</span>
                                                    @endif
                                                </a>
                                                <a href="{{ route('users.resetPassword', $us->id) }}"><span class="badge text-bg-warning">Reset Password</span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Nikname</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Akun</th>
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
