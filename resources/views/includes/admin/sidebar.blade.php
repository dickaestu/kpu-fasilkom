<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15 {{ Request::is('kpu-admin') ? 'text-warning' : null }}">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3 ">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link {{ Request::is('kpu-admin') ? 'text-warning' : null }}" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link {{ Request::is('kpu-admin/verifikasi') ? 'text-warning' : null }}" href="{{ route('verifikasi') }}">
          <i class="fas fa-fw fa-user-check"></i>
          <span>Verifikasi Akun 
          @if (App\User::where('status_verifikasi',false)->count() > 0)
            <span class="badge badge-warning ">{{ App\User::where('status_verifikasi',false)->count() }}</span>
          @endif  
          </span></a>
      </li>

        <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('kpu-admin/laporan-suara-dpm','kpu-admin/laporan-suara-bem','kpu-admin/laporan-suara-himti','kpu-admin/laporan-suara-himsisfo') ? 'text-warning' : null }}" href="{{ route('laporan-suara-dpm') }} " data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
               <i class="fas fa-fw fa-poll"></i>
      <span>Laporan Suara</span></a>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ Request::is('kpu-admin/laporan-suara-dpm') ? 'text-warning' : null }}" href="{{ route('laporan-suara-dpm') }}">DPM</a>
            <a class="collapse-item {{ Request::is('kpu-admin/laporan-suara-bem') ? 'text-warning' : null }}" href="{{ route('laporan-suara-bem') }}">BEM</a>
            <a class="collapse-item {{ Request::is('kpu-admin/laporan-suara-himti') ? 'text-warning' : null }}" href="{{ route('laporan-suara-himti') }}">HIMTI</a>
            <a class="collapse-item {{ Request::is('kpu-admin/laporan-suara-himsisfo') ? 'text-warning' : null }}" href="{{ route('laporan-suara-himsisfo') }}">HIMSISFO</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item ">
        <a class="nav-link {{ Request::is('kpu-admin/kandidat') ? 'text-warning' : null }}" href="{{ route('kandidat.index') }}">
          <i class="fas fa-fw fa-users"></i>
          <span>Kandidat</span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link {{ Request::is('kpu-admin/data-pemilih') ? 'text-warning' : null }}" href="{{ route('data-pemilih') }}">
          <i class="fas fa-fw fa-user-graduate"></i>
          <span>Pemilih</span></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link {{ Request::is('kpu-admin/komentar') ? 'text-warning' : null }}" href="{{ route('data-komentar') }}">
          <i class="fas fa-fw fa-comments"></i>
          <span>Komentar</span></a>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->