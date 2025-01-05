<div id="insertMateri" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Tambah Materi Pembelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('materipembelajaran.insert') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" placeholder="Masukkan judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas_id" required>
                            <option selected disabled>Pilih kelas</option>
                            @foreach ($data['kelas'] as $kls)
                                <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerbit</label>
                        <input type="text" class="form-control" placeholder="Masukkan penerbit" name="penerbit" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun terbit</label>
                        <input type="text" class="form-control" placeholder="Masukkan tahun terbit" name="tahun_terbit" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Unggah file</label>
                        <input type="file" name="files" class="form-control" required></div>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
