<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('dashboard') }}">
        <i class="typcn typcn-device-desktop menu-icon"></i>
        <span class="menu-title">Dashboard</span>
        <div class="badge badge-danger">new</div>
      </a>
    </li>

    {{-- ADMIN --}}
    @if(Auth::user()->role === 'admin')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('user') }}">
          <i class="typcn typcn-user-outline menu-icon"></i>
          <span>Pengguna</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('anggota') }}">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span>Anggota</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('divisi') }}">
          <i class="typcn typcn-film menu-icon"></i>
          <span>Divisi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('kegiatan') }}">
          <i class="typcn typcn-chart-pie-outline menu-icon"></i>
          <span class="menu-title">Kegiatan</span>
        </a>
      </li>

      {{-- <li class="nav-item">
        <a class="nav-link" href="{{ url('AnggotaKegiatan') }}">
          <i class="typcn typcn-th-small-outline menu-icon"></i>
          <span class="menu-title">Anggota Kegiatan</span>
        </a>
      </li> --}}
    @endif

    {{-- KETUA --}}
    @if(Auth::user()->role === 'ketua')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('anggota') }}">
          <i class="typcn typcn-document-text menu-icon"></i>
          <span>Anggota Divisi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('divisi') }}">
          <i class="typcn typcn-film menu-icon"></i>
          <span>Divisi Saya</span>
        </a>
      </li>
    @endif

    {{-- ANGGOTA --}}
    @if(Auth::user()->role === 'anggota')
      <li class="nav-item">
        <a class="nav-link" href="{{ url('divisi') }}">
          <i class="typcn typcn-film menu-icon"></i>
          <span>Divisi</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ url('kegiatan') }}">
          <i class="typcn typcn-chart-pie-outline menu-icon"></i>
          <span class="menu-title">Kegiatan</span>
        </a>
      </li>
    @endif

    {{-- Logout --}}
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/login') }}">
        <i class="typcn typcn-mortar-board menu-icon"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
  </ul>
</nav>
