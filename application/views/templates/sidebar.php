 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>admin/dashboard" class="brand-link">
      <img src="<?php echo base_url() ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIAKAD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url() ?>assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block">Ade Setiawan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo base_url(); ?>mahasiswa" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Mahasiswa
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo base_url(); ?>dosen" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Dosen
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo base_url(); ?>jadwal" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Jadwal Kuliah
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="<?php echo base_url(); ?>jurusan" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Jurusan
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Absensi
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> -->
          <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>