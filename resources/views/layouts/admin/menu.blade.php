<!-- Sidebar Menu -->
@if (auth()->user()->roles_id == 1)
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="/super/dashboard/" class="nav-link text-white">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/" class="nav-link text-white">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Home
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-user"></i>
          <p>
            User
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/super/user/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/super/user/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Tambah Data User</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Pilar
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/super/pilar/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Pilar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/super/pilar/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Tambah Data pilar</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Indikator
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/super/indikator/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Indikator</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/super/indikator/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Tambah Data Indikator</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Sub-Indikator
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/super/subindikator/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Sub-Indikator</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/super/subindikator/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p><small>Tambah Data Sub-Indikator</small></p>
            </a>
          </li>
        </ul>
      </li>
      {{-- <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-chart-line"></i>
          <p>
            Aktivitas
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/super/aktivitas/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Aktivitas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/super/aktivitas/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p><small>Tambah Data Aktivitas</small></p>
            </a>
          </li>
        </ul>
      </li> --}}
      <li class="nav-item">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
            @csrf
        </form>
        <a href="#" class="nav-link text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-sign-out"></i>
          <p>
            Logout
          </p>
        </a>
      </li>
    </ul>
  </nav>
@elseif (auth()->user()->roles_id == 2)
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="/admin/dashboard/" class="nav-link text-white">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/" class="nav-link text-white">
          <i class="nav-icon fas fa-home"></i>
          <p>
            Home
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-user"></i>
          <p>
            User
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/admin/user/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/user/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Tambah Data User</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-columns"></i>
          <p>
            Pilar
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/admin/pilar/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Pilar</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Indikator
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/admin/indikator/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Indikator</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Sub-Indikator
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/admin/subindikator/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Sub-Indikator</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/subindikator/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p><small>Tambah Data Sub-Indikator</small></p>
            </a>
          </li>
        </ul>
      </li>
      {{-- <li class="nav-item">
        <a href="#" class="nav-link text-white">
          <i class="nav-icon fas fa-chart-line"></i>
          <p>
            Aktivitas
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="/admin/aktivitas/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Aktivitas</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/aktivitas/create/" class="nav-link text-white">
              <i class="far fa-circle nav-icon"></i>
              <p><small>Tambah Data Aktivitas</small></p>
            </a>
          </li>
        </ul>
      </li> --}}
      <li class="nav-item">
        <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
            @csrf
        </form>
        <a href="#" class="nav-link text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-sign-out"></i>
          <p>
            Logout
          </p>
        </a>
      </li>
    </ul>
  </nav>
@endif

  <!-- /.sidebar-menu -->
