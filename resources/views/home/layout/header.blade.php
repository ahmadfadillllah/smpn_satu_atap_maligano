<div class="header-area header-absolute header-transparent">
    <div class="header-top d-none d-md-block">
        <div class="container">
            <!-- Header Top -->
            <div class="header-top-wrapper row">
                <div class="header-top-left text-left col-md-6 col-12">
                    <p><i class="icofont icofont-envelope"></i><span>smpnsatap1maligano@gmail.com</span></p>
                    {{-- <p><i class="icofont icofont-ui-call"></i><span>+021-5725610</span></p> --}}
                </div>
                <div class="header-top-right text-right col-md-6 col-12">
                    <p id="clock"><i class="icofont icofont-clock-time"></i><span></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom sticky">
        <div class="container">
            <div class="row justify-content-between">
                <div class="navbar-header col-auto">
                    <a href="#" class="logo navbar-brand"><img id="logo_img"
                            src="{{ asset('home') }}/img/logo/color-1.png" alt="logo" /></a>
                </div>
                <div class="main-menu mean-menu col-auto">
                    <nav>
                        <ul>
                            <li class="active"><a href="{{ route('home.profile') }}">profil</a></li>
                            <li><a href="{{ route('home.ppdb') }}">ppdb</a></li>
                            <li><a href="{{ route('home.galeri') }}">galeri</a></li>
                            <li><a href="{{ route('home.jadwalpembelajaran') }}">jadwal pembelajaran</a></li>
                            <li><a href="{{ route('home.materipembelajaran') }}">materi pembelajaran</a></li>
                            {{-- <li><a href="{{ route('home.contact') }}" target="">Kontak Kami</a></li> --}}
                            <li><a href="{{ route('login') }}" target="_blank">login</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-menu col-12"></div>
            </div>
        </div>
    </div>
</div>
@include('home.notif')
