<h5><span>berikan usulan materi</span><i class="icofont icofont-police-car"></i></h5>
<form action="{{ route('home.usulanMateri') }}" method="POST">
    @csrf
    <div class="course-input"><i class="icofont icofont-user-alt-3"></i> <input type="text" placeholder="Nama" name="name" />
    </div>
    <div class="course-input"><i class="icofont icofont-envelope"></i> <input type="email" placeholder="Email" name="email" />
    </div>
    <div class="course-input"><i class="icofont icofont-phone"></i> <input type="text" placeholder="No WhatsApp" name="no_wa" /></div>
    <div class="course-input"><i class="icofont icofont-copy-alt"></i> <input type="text" placeholder="Materi yang diusulkan" name="materi" /></div>
    <div class="course-submit"><input type="submit" value="kirim" /></div>
</form>
