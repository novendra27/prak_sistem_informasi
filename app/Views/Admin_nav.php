  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="<?= base_url("assets") ?>/img/logo_uin_malang.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Informatika UIN Malang</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="<?= site_url('Home/viewmhs');  ?>" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              Home
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="<?= site_url('Home/forminputmhs');  ?>" class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Input Data Mahasiswa
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="pages/gallery.html" class="nav-link">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Manajemen Mahasiswa
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->

      </div>
      <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">