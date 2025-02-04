<div id="editMateri{{ $mt->uuid }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Edit Materi Pembelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('materipembelajaran.update', $mt->uuid) }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" value="{{ $mt->judul }}" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas_id" required>
                            <option selected value="{{ $mt->kls_id }}">{{ $mt->kelas }}</option>
                            @foreach ($data['kelas'] as $kls)
                                <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" value="{{ $mt->penerbit }}" name="penerbit" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun terbit</label>
                        <input type="text" class="form-control" value="{{ $mt->tahun_terbit }}" name="tahun_terbit" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label class="form-label">Unggah file</label>
                        <input type="file" name="files" class="form-control" required></div> --}}
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
