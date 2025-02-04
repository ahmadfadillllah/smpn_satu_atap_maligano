<div id="editJadwal{{ $ch->uuid }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Tambah Jadwal Pembelajaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('jadwalpembelajaran.update', $ch->uuid) }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Hari</label>
                        <select class="form-control" name="hari" required>
                            <option selected value="{{ $ch->hari }}">{{ $ch->hari }}</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" name="kelas_id" required>
                            <option selected value="{{ $ch->kelas_id }}">{{ $ch->kelas }}</option>
                            @foreach ($data['kelas'] as $kls)
                                <option value="{{ $kls->id }}">{{ $kls->kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Semester</label>
                        <select class="form-control" name="semester" required>
                            <option selected value="{{ $ch->semester }}">{{ $ch->semester }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Pelajaran</label>
                        <select class="form-control" name="pelajaran_id" required>
                            <option selected value="{{ $ch->pelajaran_id }}">{{$ch->pelajaran }}</option>
                            @foreach ($data['nama_pelajaran'] as $pj)
                                <option value="{{ $pj->id }}">{{ $pj->pelajaran }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Masuk</label>
                        <input type="time" class="form-control" value="{{ $ch->jam_masuk }}" name="jam_masuk" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jam Selesai</label>
                        <input type="time" class="form-control" value="{{ $ch->jam_selesai }}" name="jam_selesai" required>
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
