<div class="footer-area overlay overlay-black overlay-70 pt-90">
    <div class="container">
        <div class="footer-bottom text-center col-12">
            <p class="copyright">Copyright &copy; <a href="#">SMPN Satu Atap 1 Maligano</a> ALL Right Reserved</p>
        </div>
    </div>
</div>

</div>
<!-- Body main wrapper end -->

<!--style-customizer start -->
<div class="style-customizer closed">
<div class="buy-button">
    <a href="index.html" class="customizer-logo"><img src="{{ asset('home') }}/img/logo/color-1.png" alt="Theme Logo"></a>
    <a class="opener" href="#"><i class="icofont icofont-gear"></i></a>
</div>
<div class="clearfix content-chooser">
    <h3>Layout Options</h3>
    <p>Which layout option you want to use?</p>
    <ul class="layoutstyle clearfix">
        <li class="wide-layout selected" data-style="wide" title="wide"> Wide </li>
        <li class="boxed-layout" data-style="boxed" title="boxed"> Boxed </li>
    </ul>
    <h3>Color Schemes</h3>
    <p>Which theme color you want to use? Select from here.</p>
    <ul class="styleChange clearfix">
        <li class="color-1 selected" title="color-1" data-style="color-1"></li>
        <li class="color-2" title="color-2" data-style="color-2"></li>
        <li class="color-3" title="color-3" data-style="color-3"></li>
        <li class="color-4" title="color-4" data-style="color-4"></li>
        <li class="color-5" title="color-5" data-style="color-5"></li>
        <li class="color-6" title="color-6" data-style="color-6"></li>
        <li class="color-7" title="color-7" data-style="color-7"></li>
        <li class="color-8" title="color-8" data-style="color-8"></li>
    </ul>
    <h3>Background Patterns</h3>
    <p>Which background pattern you want to use?</p>
    <ul class="patternChange clearfix">
        <li class="pattern-1" data-style="pattern-1" title="pattern-1"></li>
        <li class="pattern-2" data-style="pattern-2" title="pattern-2"></li>
        <li class="pattern-3" data-style="pattern-3" title="pattern-3"></li>
        <li class="pattern-4" data-style="pattern-4" title="pattern-4"></li>
        <li class="pattern-5" data-style="pattern-5" title="pattern-5"></li>
        <li class="pattern-6" data-style="pattern-6" title="pattern-6"></li>
        <li class="pattern-7" data-style="pattern-7" title="pattern-7"></li>
        <li class="pattern-8" data-style="pattern-8" title="pattern-8"></li>
    </ul>
    <h3>Background Images</h3>
    <p>Which background image you want to use?</p>
    <ul class="patternChange main-bg-change clearfix">
        <li class="main-bg-1" data-style="main-bg-1" title="Background 1"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/01.jpg" alt=""></li>
        <li class="main-bg-2" data-style="main-bg-2" title="Background 2"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/02.jpg" alt=""></li>
        <li class="main-bg-3" data-style="main-bg-3" title="Background 3"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/03.jpg" alt=""></li>
        <li class="main-bg-4" data-style="main-bg-4" title="Background 4"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/04.jpg" alt=""></li>
        <li class="main-bg-5" data-style="main-bg-5" title="Background 5"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/05.jpg" alt=""></li>
        <li class="main-bg-6" data-style="main-bg-6" title="Background 6"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/06.jpg" alt=""></li>
        <li class="main-bg-7" data-style="main-bg-7" title="Background 7"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/07.jpg" alt=""></li>
        <li class="main-bg-8" data-style="main-bg-8" title="Background 8"> <img
                src="{{ asset('home') }}/images/customizer/bodybg/08.jpg" alt=""></li>
    </ul>
    <ul class="resetAll">
        <li><a class="button button-border button-reset" href="#">Reset All</a></li>
    </ul>
</div>
</div>


<!-- jQuery JS
============================================ -->
<script src="{{ asset('home') }}/js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="{{ asset('home') }}/js/bootstrap.bundle.min.js"></script>
<!-- Plugins JS
============================================ -->
<script src="{{ asset('home') }}/js/plugins.js"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="{{ asset('home') }}/js/ajax-mail.js"></script>
<!-- WOW JS
============================================ -->
<script src="{{ asset('home') }}/js/wow.min.js"></script>
<!-- Style Customizer JS
============================================ -->
<script src="{{ asset('home') }}/js/style-customizer.js"></script>
<!-- Main JS
============================================ -->
<script src="{{ asset('home') }}/js/main.js"></script>

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

</body>
</html>
