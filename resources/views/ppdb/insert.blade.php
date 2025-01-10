@include('dashboard.layout.head', ['title' => 'Profil Sekolah'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<section class="pc-container">
    <div class="pc-content">

        <div class="row">
            <!-- [ Classic-editor ] start -->
            <form action="{{ route('ppdb.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div id="cke5-inline-demo">
                                <h5>Pengumuman Pendaftaran</h5>
                                <div>
                                    <textarea name="pengumuman_pendaftaran" id="pengumuman_pendaftaran"></textarea>
                                </div>
                                <h5>Syarat Pendaftaran</h5>
                                <div>
                                    <textarea name="syarat_pendaftaran" id="syarat_pendaftaran"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Kuota</label>
                                <input type="number" class="form-control" name="kuota" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status" required>
                                    <option selected disabled>Pilih status</option>
                                    <option value="Tersedia">Tersedia</option>
                                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary d-inline-flex" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@include('dashboard.layout.footer')
<script src="{{ asset('dashboard') }}/assets/js/plugins/ckeditor/classic/ckeditor.js"></script>
<script>
    (function () {
        ClassicEditor.create(document.querySelector('#syarat_pendaftaran')).catch((error) => {
            console.error(error);
        });
    })();
    (function () {
        ClassicEditor.create(document.querySelector('#pengumuman_pendaftaran')).catch((error) => {
            console.error(error);
        });
    })();

</script>


