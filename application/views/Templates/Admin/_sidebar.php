<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <?php 
      $location1 = $this->uri->segment(1); 
      $location2 = $this->uri->segment(2); 
    ?>

  <div class="scrollbar-inner">

    <!-- Brand -->
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="dashboard.html">
        <img src="<?= base_url('assets/new_template/') ?>img/logo.png" class="navbar-brand-img">
        <!-- <h1 style="font-weight: bold; color: #eba502;">PANEN SAHAM</h1>    -->
      </a>

      <div class="ml-auto">
        <!-- Sidenav toggler -->
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
      
    </div>

    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">

        <!-- Nav items -->
        <ul class="navbar-nav">

          <!-- MENU COLLAPSE/DI KLIK MENUNYA TURUN KE BAWAH -->
          <!-- <li class="nav-item">
              <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
              <div class="collapse" id="navbar-dashboards">

                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="dashboard.html" class="nav-link">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a href="alternative.html" class="nav-link">Alternative</a>
                  </li>
                </ul>
              </div>
            </li> -->
          <style>
            .text-template-primary{
              color: #52291C;
            }
          </style>
          <li class="nav-item">
            <a <?php if($location1 == 'admin') { echo 'class="nav-link active" style="color: white;"';} else { echo 'class="nav-link"';} ?> href="<?= base_url('admin') ?>">
              <i <?php if($location1 == 'admin') { echo 'class="ni ni-shop text-white"';} else { echo 'class="ni ni-shop" style="color: #eba502;"';} ?> style="color: #eba502;"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-archive-2 text-green"></i>
              <span class="nav-link-text">Menu A</span>
            </a>

          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-spaceship text-pink"></i>
              <span class="nav-link-text">Menu B</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="ni ni-planet text-info"></i>
              <span class="nav-link-text">Menu C</span>
            </a>
          </li> -->

          <li class="nav-item">
              <a <?php if($location1 == 'users' OR $location1 == 'roles' OR  $location1 == 'assignroles'  OR  $location1 == 'nasabah' OR  $location1 == 'statuspembayaran' OR  $location1 == 'gambarslider' OR  $location1 == 'request' OR  $location1 == 'email') { echo 'class="nav-link active" style="color: white;"';} else { echo 'class="nav-link"';} ?> href="#navbar-admin" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i <?php if($location1 == 'users' OR $location1 == 'roles' OR  $location1 == 'assignroles'  OR  $location1 == 'nasabah' OR  $location1 == 'statuspembayaran' OR  $location1 == 'gambarslider' OR  $location1 == 'request' OR  $location1 == 'email') { echo 'class="ni ni-archive-2 text-white"';} else { echo 'class="ni ni-archive-2" style="color: #eba502;"';} ?>></i>
                <span class="nav-link-text">Master Data</span>
              </a>
              <div <?php if($location1 == 'users' OR $location1 == 'roles' OR  $location1 == 'assignroles'  OR  $location1 == 'nasabah' OR  $location1 == 'statuspembayaran' OR  $location1 == 'gambarslider' OR  $location1 == 'request' OR  $location1 == 'email') { echo 'class="collapse show"';} else { echo 'class="collapse"';} ?> id="navbar-admin">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url('users') ?>" <?php if($location1 == 'users') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>User</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('roles') ?>" <?php if($location1 == 'roles') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Role</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('assignroles') ?>" <?php if( $location1 == 'assignroles') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Pengaturan User</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('nasabah') ?>" <?php if($location1 == 'nasabah') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Nasabah</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('request') ?>" <?php if($location1 == 'request') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Request List</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('statuspembayaran') ?>" <?php if($location1 == 'statuspembayaran') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Pembayaran Iuran</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('gambarslider') ?>" <?php if($location1 == 'gambarslider') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Gambar Slider</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('email') ?>" <?php if($location1 == 'email') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Daftar Email</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a <?php if($location1 == 'kategori') { echo 'class="nav-link active" style="color: white;"';} else { echo 'class="nav-link"';} ?> href="#navbar-category" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i <?php if($location1 == 'kategori') { echo 'class="ni ni-archive-2 text-white"';} else { echo 'class="ni ni-archive-2" style="color: #eba502;"';} ?>></i>
                <span class="nav-link-text">Kategori</span>
              </a>
              <div <?php if($location1 == 'kategori') { echo 'class="collapse show"';} else { echo 'class="collapse"';} ?> id="navbar-category">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url('kategori/berita') ?>" <?php if($location1 == 'kategori' AND $location2 == 'berita') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Berita</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('kategori/product') ?>" <?php if($location1 == 'kategori' AND $location2 == 'product') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Produk</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a <?php if($location1 == 'content') { echo 'class="nav-link active" style="color: white;"';} else { echo 'class="nav-link"';} ?> href="#navbar-content" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
                <i <?php if($location1 == 'content') { echo 'class="ni ni-archive-2 text-white"';} else { echo 'class="ni ni-archive-2" style="color: #eba502;"';} ?>></i>
                <span class="nav-link-text">Konten</span>
              </a>
              <div <?php if($location1 == 'content') { echo 'class="collapse show"';} else { echo 'class="collapse"';} ?> id="navbar-content">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url('content/berita') ?>" <?php if($location1 == 'content' AND $location2 == 'berita') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Berita</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('content/product') ?>" <?php if($location1 == 'content' AND $location2 == 'product') { echo 'class="nav-link active" style="color: #eba502; font-weight: bold;"';} else { echo 'class="nav-link"';} ?>>Produk</a>
                  </li>
                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a  class="nav-link" href="<?= base_url('auth/logout') ?>">
                <i class="ni ni-user-run" style="color: #eba502;"></i>
                <span class="nav-link-text">Logout</span>
              </a>
            </li>




        </ul>

      </div>
    </div>

  </div>

</nav>