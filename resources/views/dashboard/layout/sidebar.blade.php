<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{ asset('dashboard') }}/assets/images/user/avatar-1.jpg" alt="user-image"
                                class="user-avtar wid-45 rounded-circle"></div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{ Auth::user()->name }}</h6><small>{{ Auth::user()->role }}</small>
                        </div><a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse"
                            href="#pc_sidebar_userlink"><svg class="pc-icon">
                                <use xlink:href="#custom-sort-outline"></use>
                            </svg></a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="#!"><i class="ti ti-settings"></i> <span>Settings</span> </a>
                            <a href="{{ route('logout') }}"><i class="ti ti-power"></i> <span>Logout</span></a></div>
                    </div>
                </div>
            </div>
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Navigation</label></li>
                <li class="pc-item">
                    <a href="{{ route('dashboard.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/dashboard.png" >
                        </span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/data-collection.png" >
                        </span>
                        <span class="pc-mtext">Master</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ route('guru.index') }}">Guru</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('kelas.index') }}">Kelas</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('namapelajaran.index') }}">Nama Pelajaran</a></li>
                    </ul>

                </li>
                <li class="pc-item pc-caption"><label>Fitures</label></li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/education.png" >
                        </span>
                        <span class="pc-mtext">Akademik</span>
                        <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
                    </a>
                    <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="{{ route('jadwalpembelajaran.index') }}">Jadwal Pembelajaran</a></li>
                        <li class="pc-item"><a class="pc-link" href="{{ route('materipembelajaran.index') }}">Materi Pembelajaran</a></li>
                    </ul>

                </li>
                <li class="pc-item">
                    <a href="{{ route('ppdb.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/register.png" >
                        </span>
                        <span class="pc-mtext">PPDB</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('galeri.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/image-galery.png" >
                        </span>
                        <span class="pc-mtext">Galeri</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('profil.index') }}" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/programmer.png" >
                        </span>
                        <span class="pc-mtext">Profile</span>
                    </a>
                </li>
                <li class="pc-item pc-caption"><label>Configuration</label></li>
                @if (Auth::user()->role == 'Operator')
                    <li class="pc-item">
                        <a href="{{ route('users.index') }}" class="pc-link">
                            <span class="pc-micon">
                                <img src="{{ asset('dashboard') }}/assets/images/widget/team.png" >
                            </span>
                            <span class="pc-mtext">Users</span>
                        </a>
                    </li>
                @endif
                <li class="pc-item">
                    <a href="#" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/gear.png" >
                        </span>
                        <span class="pc-mtext">Pengaturan</span>
                    </a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('logout') }}" class="pc-link">
                        <span class="pc-micon">
                            <img src="{{ asset('dashboard') }}/assets/images/widget/check-out.png" >
                        </span>
                        <span class="pc-mtext">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
