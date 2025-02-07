@include('dashboard.layout.head', ['title' => 'Keaktifan Guru'])
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
                            <h2 class="mb-0">Keaktifan Guru</h2>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a href="#" class="btn btn-success d-inline-flex" data-bs-toggle="modal" data-bs-target="#downloadReport">
                            Download Report
                        </a>
                    </div>
                    @include('keaktifan.modal.insert')
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
                                        <th style="text-align: left">NIP</th>
                                        <th style="text-align: left">Nama Guru</th>
                                        <th style="text-align: left">Kelas</th>
                                        <th style="text-align: left">Status Keaktifan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($guru as $g)
                                        <tr>
                                            <td style="text-align: left">{{ $g->nip }}</td>
                                            <td style="text-align: left">{{ $g->guru }}</td>
                                            <td style="text-align: left">{{ $g->kelas }}</td>
                                            <td>
                                                <p>Hari: {{ $g->hari }}</p>
                                                <p>Hadir: {{ $g->hadir }}</p>
                                                <p>Tidak Hadir: {{ $g->tidakHadir }}</p>
                                            </td>
                                            {{-- <td>{{ $g['status_keaktifan'] }}</td> --}}
                                        </tr>
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
