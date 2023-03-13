<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="" class="img-fluid">
        </div>
        <div class="sidebar-brand-text mx-3">
            EBook
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::segment(2) == 'dashboard' ? 'active' : '' }} ">
        <a class="nav-link" href="{{ url('/admin/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <li class="nav-item {{ Request::segment(2) == 'master' ? 'active' : '' }} ">
        <a class="nav-link {{ Request::segment(2) == 'master' ? '' : 'collapsed' }}" href="#"
            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-bars"></i>
            <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse {{ Request::segment(2) == 'master' ? 'show' : '' }} "
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::segment(3) == 'jurusan' ? 'active' : '' }}"
                    href="{{ url('/admin/dashbaord/master/jurusan/v_index') }}">
                    Jurusan
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'katalog_buku' ? 'active' : '' }}"
                    href="{{ url('/admin/dashbaord/master/katalog_buku/v_index') }}">
                    Katalog
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'buku' ? 'active' : '' }}"
                    href="{{ url('/admin/dashbaord/master/buku/v_index') }}">
                    Buku
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'mading' ? 'active' : '' }}"
                    href="{{ url('/admin/dashbaord/master/mading/v_index') }}">
                    Mading
                </a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::segment(2) == 'web' ? 'active' : '' }}">
        <a class="nav-link {{ Request::segment(2) == 'web' ? '' : 'collapsed' }}" href="#" data-toggle="collapse"
            data-target="#collapseWeb" aria-expanded="true" aria-controls="collapseWeb">
            <i class="bi bi-laptop"></i>
            <span>Tampilan Web</span>
        </a>
        <div id="collapseWeb" class="collapse {{ Request::segment(2) == 'web' ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::segment(3) == 'carousel' ? 'active' : '' }}"
                    href="{{ url('/admin/web/carousel') }}">
                    Carousel
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'artikel' ? 'active' : '' }}"
                    href="{{ url('/admin/web/artikel') }}">
                    Artikel
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'pesan' ? 'active' : '' }}"
                    href="{{ url('/admin/web/pesan') }}">
                    Pesan
                </a>
            </div>
        </div>
    </li>

    <li class="nav-item {{ Request::segment(2) == 'pengaturan' ? 'active' : '' }}">
        <a class="nav-link {{ Request::segment(2) == 'pengaturan' ? '' : 'collapsed' }}" href="#"
            data-toggle="collapse" data-target="#collapsePengaturan" aria-expanded="true"
            aria-controls="collapsePengaturan">
           <i class="fas fa-fw fa-gavel"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapsePengaturan" class="collapse {{ Request::segment(2) == 'pengaturan' ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::segment(3) == 'profil_perusahaan' ? 'active' : '' }}"
                    href="{{ url('/admin/pengaturan/profil_perusahaan') }}">
                    Profil Sekolah
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'syarat_ketentuan' ? 'active' : '' }}"
                    href="{{ url('/admin/pengaturan/syarat_ketentuan') }}">
                    Syarat Ketentuan
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'setting_voting' ? 'active' : '' }} "
                    href="{{ url('/admin/pengaturan/setting_voting') }}">
                    Setting Voting
                </a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ Request::segment(2) == 'laporan' ? 'active' : '' }} ">
        <a class="nav-link {{ Request::segment(2) == 'laporan' ? '' : 'collapsed' }}" href="#"
            data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="true" aria-controls="collapseLaporan">
            <i class="fas fa-fw fa-book"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseLaporan" class="collapse {{ Request::segment(2) == 'laporan' ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::segment(3) == 'v_anggota' ? 'active' : '' }}"
                    href="{{ url('/admin/dashboard/laporan/v_anggota') }}">
                    Anggota
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'transaksi' ? 'active' : '' }}"
                    href="">
                    Ebook
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'laporan_mading' ? 'active' : '' }} "
                    href="{{ url('/admin/dashboard/laporan/laporan_mading') }}">
                    Mading
                </a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Akun
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::segment(2) == 'users' ? 'active' : '' }}">
        <a class="nav-link {{ Request::segment(2) == 'users' ? '' : 'collapsed' }}" href="#"
            data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapsePages" class="collapse {{ Request::segment(2) == 'users' ? 'show' : '' }}"
            aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::segment(3) == 'index' ? 'active' : '' }}"
                    href="{{ url('/admin/dashboard/users/index') }}">
                    Petugas
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'index' ? 'active' : '' }} "
                    href="{{ url('/admin/dashboard/users/anggota/index') }}">
                    Anggota
                </a>
                <a class="collapse-item {{ Request::segment(3) == 'v_index' ? 'active' : '' }} "
                    href="{{ url ('/admin/dashboard/users/profil_saya/v_index') }}">
                    Profil Saya
                </a>
            </div>
        </div>
    </li>
</ul>
