<div id="editKehadiran{{ $ab->uuid }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Edit Kehadiran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('kehadiran.update', $ab->uuid) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">NIP</label>
                        <input type="text" class="form-control" value="{{ $ab->nip }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Guru</label>
                        <input type="text" class="form-control" value="{{ $ab->guru }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Hadir" id="statusHadir"
                                   {{ $ab->status == 'Hadir' ? 'checked' : '' }}>
                            <label class="form-check-label" for="statusHadir">
                                Hadir
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="Tidak Hadir" id="statusTidakHadir"
                                   {{ $ab->status == 'Tidak Hadir' ? 'checked' : '' }}>
                            <label class="form-check-label" for="statusTidakHadir">
                                Tidak Hadir
                            </label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer"><button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
