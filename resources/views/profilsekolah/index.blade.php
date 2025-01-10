@include('dashboard.layout.head', ['title' => 'Profil Sekolah'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<section class="pc-container">
    <div class="pc-content">

        <div class="row">
            <!-- [ Classic-editor ] start -->
            <form action="{{ route('profil.update') }}" method="POST">
                @csrf
                <input type="text" class="form-control" value="{{ $profil->uuid }}" name="uuid" readonly hidden>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="cke5-inline-demo">
                                <h5>Profil Sekolah</h5>
                                <div class="ck-profile">
                                    <textarea name="profile" id="profile">{!! $profil->profile !!}</textarea>
                                </div>
                                <div class="row">
                                    <!-- Kolom untuk Visi -->
                                    <div class="col-md-6 mb-4">
                                        <h5>Visi</h5>
                                        <div class="ck-visi">
                                            <textarea name="visi" id="visi">{!! $profil->visi !!}</textarea>
                                        </div>
                                    </div>

                                    <!-- Kolom untuk Misi -->
                                    <div class="col-md-6 mb-4">
                                        <h5>Misi</h5>
                                        <div class="ck-misi">
                                            <textarea name="misi" id="misi">{!! $profil->misi !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">NSPN</label>
                                    <input type="text" class="form-control" value="{{ $profil->nspn }}" name="nspn" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">SK Pendirian</label>
                                    <input type="text" class="form-control" value="{{ $profil->sk_pendirian }}" name="sk_pendirian" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">SK Izin Operasional</label>
                                    <input type="text" class="form-control" value="{{ $profil->sk_izin }}" name="sk_izin" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Bentuk Pendidikan</label>
                                    <input type="text" class="form-control" value="{{ $profil->bentuk_pendidikan }}" name="bentuk_pendidikan" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Tanggal SK Pendirian</label>
                                    <input type="date" class="form-control" value="{{ $profil->tanggal_sk_pendirian }}" name="tanggal_sk_pendirian" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Tanggal SK Izin Operasional</label>
                                    <input type="date" class="form-control" value="{{ $profil->tanggal_sk_izin }}" name="tanggal_sk_izin" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Status Kepemilikan</label>
                                    <input type="text" class="form-control" value="{{ $profil->status_kepemilikan }}" name="status_kepemilikan" required>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary d-inline-flex" > Update Profil </button>
                </div>
            </form>
        </div>
    </div>
</section>
@include('dashboard.layout.footer')
<script src="{{ asset('dashboard') }}/assets/js/plugins/ckeditor/classic/ckeditor.js"></script>
<script>
    (function () {
        ClassicEditor.create(document.querySelector('#profile')).catch((error) => {
            console.error(error);
        });
    })();
    (function () {
        ClassicEditor.create(document.querySelector('#visi')).catch((error) => {
            console.error(error);
        });
    })();
    (function () {
        ClassicEditor.create(document.querySelector('#misi')).catch((error) => {
            console.error(error);
        });
    })();

</script>
