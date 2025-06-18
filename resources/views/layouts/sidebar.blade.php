<nav class="sidebar sidebar-offcanvas fixed-sidebar" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('dashboard') }}">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    {{-- ADMIN --}}
    @if(Auth::user()->role === 'admin')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('user') }}">
          <i class="typcn typcn-user-outline menu-icon"></i>
          <span class="menu-title">Manajemen Pengguna</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('anggota') }}">
          <i class="typcn typcn-group menu-icon"></i>
          <span class="menu-title">Manajemen Anggota</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('divisi') }}">
          <i class="typcn typcn-briefcase menu-icon"></i>
          <span class="menu-title">Manajemen Divisi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('kegiatan') }}">
          <i class="typcn typcn-calendar-outline menu-icon"></i>
          <span class="menu-title">Manajemen Kegiatan</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('AnggotaKegiatan') }}">
          <i class="typcn typcn-calendar-outline menu-icon"></i>
          <span class="menu-title">Anggota Kegiatan</span>
        </a>
      </li>
    @endif

    {{-- KETUA DIVISI --}}
    @if(Auth::user()->role === 'ketua')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('anggota') }}">
          <i class="typcn typcn-group menu-icon"></i>
          <span class="menu-title">Anggota</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('kegiatan') }}">
          <i class="typcn typcn-calendar-outline menu-icon"></i>
          <span class="menu-title">Daftar Kegiatan</span>
        </a>
      </li>
    @endif

    {{-- ANGGOTA --}}
    @if(Auth::user()->role === 'anggota')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('profile.show',['id'=>Auth::user()->id]) }}">
          <i class="typcn typcn-user menu-icon"></i>
          <span class="menu-title">Data Saya</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('kegiatan.kegiatanku') }}">
          <i class="typcn typcn-calendar-outline menu-icon"></i>
          <span class="menu-title">Kegiatanku</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('kegiatan') }}">
          <i class="typcn typcn-calendar-outline menu-icon"></i>
          <span class="menu-title">Daftar Kegiatan</span>
        </a>
      </li>
    @endif

    {{-- UMUM - LOGOUT --}}
    <li class="nav-item">
    <form action="/logout" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin logout?')">
        @csrf
        @method("POST")
            <button type="submit" class="nav-link d-flex align-items-center" style="background: none; border: none; padding-left: 0,97rem; width: 100%; text-align: left;">
            <i class="typcn typcn-power-outline menu-icon me-2"></i>
            <span class="menu-title">Logout</span>
            </button>
        </form>
    </li>


    {{-- ROLE INFO --}}
    <div style="position: absolute; bottom: 0;">
        <li class="nav-item mt-auto" style="padding: 1rem; font-size: 0.9rem; color: #6c757d;">
            <i class="nav-link">
                <span>login sebagai {{ ucfirst(Auth::user()->role) }}</span>
            </i>
        </li>
    </div>

  </ul>
</nav>
