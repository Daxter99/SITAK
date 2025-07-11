<ul class="menu">
    <li class="sidebar-title">Menu Superadmin</li>
    <li class="sidebar-item">
        <a href="{{ url('/dashboard') }}" class='sidebar-link'>
            <i class="bi bi-speedometer"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ url('/admin/persyaratan') }}" class='sidebar-link'>
            <i class="bi bi-database-fill-add"></i>
            <span>Persyaratan</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a href="{{ url('/admin/mahasiswa') }}" class='sidebar-link'>
            <i class="bi bi-people"></i>
            <span>Mahasiswa</span>
        </a>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-calendar3"></i>
            <span>Cetak Jadwal</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item">
                <a href="{{url('/admin/jadwal-seminar')}}" class="submenu-link">Jawal Seminar</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/admin/jadwal-sidang')}}" class="submenu-link">Jawal Sidang</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-gear"></i>
            <span>Lainya</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item">
                <a href="{{url('/admin/setting')}}" class="submenu-link">Setting</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/admin/dokumen')}}" class="submenu-link">Dokumen</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-title">Menu Mahasiswa</li>
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-people"></i>
            <span>Mahasiswas</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item">
                <a href="{{url('/mhs/pendaftaran')}}" class="submenu-link">Pendaftaran</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/mhs/pembimbing')}}" class="submenu-link">Pembimbing</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/mhs/berkas')}}" class="submenu-link">Seminar & Ujian</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/mhs/berkasakhir')}}" class="submenu-link">Berkas Akhir</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-title">Menu Fakultas</li>
    <li class="sidebar-item has-sub">
        <a href="#" class='sidebar-link'>
            <i class="bi bi-person-rolodex"></i>
            <span>Fakultas</span>
        </a>
        <ul class="submenu ">
            <li class="submenu-item">
                <a href="{{url('/fakultas/persyaratan')}}" class="submenu-link">Persayaratan</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/fakultas/mahasiswa')}}" class="submenu-link">Mahasiswa</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/fakultas/jadwal-seminar')}}" class="submenu-link">Jadwal Seminar</a>
            </li>
            <li class="submenu-item">
                <a href="{{url('/fakultas/jadwal-sidang')}}" class="submenu-link">Jadwal Ujian</a>
            </li>
        </ul>
    </li>

    <li class="sidebar-title">Menu Dosen</li>
    <li class="sidebar-item">
        <a href="{{ url('/dosen/mhs') }}" class='sidebar-link'>
            <i class="bi bi-person-lines-fill"></i>
            <span>Mahasiswaa</span>
        </a>
    </li>


    <li class="sidebar-title">Log</li>
    <li class="sidebar-item">
        <a href="{{ url('/activity') }}" class='sidebar-link'>
            <i class="bi bi-clock-history"></i>
            <span>User Activities</span>
        </a>
    </li>


    
</ul>