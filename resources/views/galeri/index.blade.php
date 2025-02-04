@include('dashboard.layout.head', ['title' => 'Galeri'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<div class="pc-container">
    <div class="pc-content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Galeri</h5>
                            <div><a href="#" data-bs-toggle="modal" data-bs-target="#insertGaleri" class="btn btn-primary">Tambah Galeri</a></div>
                            @include('galeri.modal.insert')
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($galeri as $gl)
                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                    <div class="card border">
                                        <div class="card-body p-2">
                                            <div class="position-relative">
                                                @if ($gl->kategori == 'Foto')
                                                    <img src="{{ asset('storage/') }}/{{ $gl->path }}" alt="img" class="img-fluid w-100">
                                                @else
                                                    <video class="img-fluid w-100" controls autoplay>
                                                        <source src="{{ asset('storage/' . $gl->path) }}" type="video/{{ pathinfo($gl->path, PATHINFO_EXTENSION) }}">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                @endif

                                            </div>
                                            <ul class="list-group list-group-flush my-2">
                                                <li class="list-group-item px-0 py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 me-2">
                                                            <h6 class="mb-1">{{ $gl->judul }}</h6>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#editGaleri{{ $gl->uuid }}"><i class="material-icons-two-tone">edit</i></a>
                                                            <a href="#" class="avtar avtar-xs btn-link-secondary" data-bs-toggle="modal" data-bs-target="#deleteGaleri{{ $gl->uuid }}"><i class="material-icons-two-tone">delete_outline</i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0 py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 me-2">
                                                            <p class="mb-0">Kategori</p>
                                                        </div>
                                                        <div class="flex-shrink-0">
                                                            <p class="text-muted mb-0">{{ $gl->kategori }}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <div class="flex-shrink-0">
                                                    <p class="text-muted mb-0">{{ $gl->keterangan }}</p>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @include('galeri.modal.edit')
                                @include('galeri.modal.delete')
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
