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
                                        <th>Nama Guru</th>
                                        <th>Kelas</th>
                                        <th>Status Keaktifan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($guru as $g)
                                        <tr>
                                            <td>{{ $g['guru'] }}</td>
                                            <td>{{ $g['kelas'] }}</td>
                                            <td>
                                                @if ($g['status_keaktifan'] == 'Aktif')
                                                    <span class="badge bg-success">Aktif</span>
                                                @else
                                                    <span class="badge bg-warning">Tidak Aktif</span>
                                                @endif
                                            </td>
                                            {{-- <td>{{ $g['status_keaktifan'] }}</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nama Guru</th>
                                        <th>Kelas</th>
                                        <th>Status Keaktifan</th>
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
