<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">

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

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
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
            </li>
            
          </ul>

        </div> 
      </div>

    </div>

</nav>