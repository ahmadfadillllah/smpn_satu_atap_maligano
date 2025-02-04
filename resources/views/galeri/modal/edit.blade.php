<div id="editGaleri{{ $gl->uuid }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Edit Galeri</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('galeri.update', $gl->uuid ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" value="{{ $gl->judul }}" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select class="form-control" name="kategori" required>
                            <option selected value="{{ $gl->kategori }}">{{ $gl->kategori }}</option>
                            <option value="Video">Video</option>
                            <option value="Foto">Foto</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <input type="text" class="form-control" value="{{ $gl->keterangan }}" name="keterangan" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label">File</label>
                        <input type="file" class="form-control" placeholder="Masukkan file" name="galeri" required>
                    </div> --}}
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
