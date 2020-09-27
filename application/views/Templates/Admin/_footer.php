<!-- Footer -->
<footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; <?= date('Y'); ?> <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">KJKPI Team</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <!-- <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li> -->
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!-- Core -->
  <script src="<?= base_url('assets/new_template/') ?>vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/js-cookie/js.cookie.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/lavalamp/js/jquery.lavalamp.min.js"></script>

  <!-- Optional JS -->
  <script src="<?= base_url('assets/new_template/') ?>vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/chart.js/dist/Chart.extension.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?= base_url('assets/new_template/') ?>vendor/datatables.net-select/js/dataTables.select.min.js"></script>

  <!-- Argon JS -->
  <script src="<?= base_url('assets/new_template/') ?>js/argon.min-v=1.0.0.js"></script>

  <!-- Demo JS - remove this in your project -->
  <script src="<?= base_url('assets/new_template/') ?>js/demo.min.js"></script>

  <!-- JS CUSTOM UNTUK DATATABLE -->
  <script src="<?= base_url('assets/js/') ?>app.js"></script>


  <script>

    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
</body>

</html>