<ul class="navbar-nav bg-purple sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="<?= base_url("/img/logos/logo.png") ?>" width="55" class="d-inline-block align-top" alt="Logo SMK As-Saabiq">
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Admin
  </div>
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser">
      <i class="fas fa-fw fa-user"></i>
      <span>Data User</span>
    </a>
    <div id="collapseUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Master User</h6>
        <a class="collapse-item" href="<?= base_url('admin/users/main'); ?>">Daftar User</a>
        <a class="collapse-item" href="<?= base_url('admin/users/roles'); ?>">Daftar User Role</a>
      </div>
    </div>
  </li>

  <!-- Nav Item Jurusan -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/jurusan'); ?>">
      <i class="fas fa-fw fa-graduation-cap"></i>
      <span>Data Jurusan</span></a>
  </li>

  <!-- Nav Item Jalur Registrasi -->
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('admin/jalur'); ?>">
      <i class="fas fa-fw fa-graduation-cap"></i>
      <span>Jalur Registrasi</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Siswa
  </div>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="index.html">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Nav Item - Tables -->
  <li class="nav-item">
    <a class="nav-link" href="#">
      <i class="fas fa-fw fa-user"></i>
      <span>Data Diri</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>