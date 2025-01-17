@include('dashboard.layout.head', ['title' => 'Dashboard'])
@include('dashboard.layout.sidebar')
@include('dashboard.layout.header')
<div class="pc-container">
    <div class="pc-content">
        <div class="row">
            <div class="col-12">
                <div class="card welcome-banner bg-blue-800">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="p-4">
                                    <h2 class="text-white" id="clock"></h2>
                                    <p class="text-white">Selamat datang, {{ Auth::user()->name }}!</p><a
                                        href="{{ route('ppdb.index') }}" class="btn btn-outline-light">Lihat PPDB</a>
                                </div>
                            </div>
                            <div class="col-sm-6 text-center">
                                <div class="img-welcome-banner"><img
                                        src="{{ asset('dashboard') }}/assets/images/widget/welcome-banner.png" alt="img"
                                        class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
    function updateClock() {
    const now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();
    let day = now.getDay();
    let date = now.getDate();
    let month = now.getMonth();
    let year = now.getFullYear();

    const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    const months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    const timeString = hours + ':' + minutes + ':' + seconds;
    const dateString = days[day] + ', ' + date + ' ' + months[month] + ', ' + year;

    document.getElementById("clock").textContent = timeString + ' | ' + dateString;
    }

    setInterval(updateClock, 1000);

</script>
<script src="{{ asset('dashboard') }}/assets/js/plugins/apexcharts.min.js"></script>
@include('dashboard.layout.footer')
