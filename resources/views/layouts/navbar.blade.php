<nav class="navbar fixed-top d-flex flex-row p-0">
  {{-- Logo Section --}}
  <div class="navbar-brand-wrapper d-flex justify-content-center">
    <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('assets/images/download.svg') }}" alt="logo" />
      </a>
      <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="typcn typcn-th-menu"></span>
      </button>
    </div>
  </div>

  {{-- Profile Section --}}
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-bs-toggle="dropdown" id="profileDropdown">
            <span class="nav-profile-name">{{ auth()->user()->username }}</span>
          <img src="{{ asset('assets/images/samples/300x300/11.jpg') }}" alt="profile" class="profile-pic" />
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="#">
            <i class="typcn typcn-cog-outline text-primary"></i> Settings
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>
</nav>
