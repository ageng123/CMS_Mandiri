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


  <script>

    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js" integrity="sha512-Izh34nqeeR7/nwthfeE0SI3c8uhFSnqxV0sI9TvTcXiFJkMd6fB644O64BRq2P/LA/+7eRvCw4GmLsXksyTHBg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/locale/id.min.js" integrity="sha512-he8U4ic6kf3kustvJfiERUpojM8barHoz0WYpAUDWQVn61efpm3aVAD8RWL8OloaDDzMZ1gZiubF9OSdYBqHfQ==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous"></script>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css' type='text/css' rel='stylesheet'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/trumbowyg.min.js" integrity="sha512-l6MMck8/SpFCgbJnIEfVsWQ8MaNK/n2ppTiELW3I2BFY5pAm/WjkNHSt+2OD7+CZtygs+jr+dAgzNdjNuCU7kw==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/langs/id.min.js" integrity="sha512-/PIPqv1zRLefHrC80MyrIn1AzLHfmoHY/g4OSIpaWVytX+DmWnX/tBuupyABlPLHzqxztUKpiUWegtKO4cKKZg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/plugins/cleanpaste/trumbowyg.cleanpaste.min.js" integrity="sha512-cDDBhQvC08atXuhAhYPJjzgGUDH8oKtgatdpN7tl6mxBwS+cY9VwOItZVsp4gjptZmUasVXzfYYuhtrLS3Lafg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/plugins/pasteimage/trumbowyg.pasteimage.min.js" integrity="sha512-OQx/CQBZBho4b9cGlA/FnrMeXWj4GPlXfpeWyih9xrogS9hkDg91lGXhoff6LZc8RfSYm1EaMB5dUPeR72Hkvg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/plugins/allowtagsfrompaste/trumbowyg.allowtagsfrompaste.min.js" integrity="sha512-Zuq+wA/YLqIGzMTTwdEx7amSDq7QKEcygLO4S8w1MeUytDQAGGZza/kZxCfwp0QiPdGHQHxl/bYGxmoy1MwdDA==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/plugins/upload/trumbowyg.upload.min.js" integrity="sha512-g5wjYAiDs8BUjvYsS72hTfj1N255lOfulYWK/c+SM5JyldgDD9E5cpUSsCqighP7PiSqX+6FlTW48RI85BDqKw==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="<?= base_url('assets/js/') ?>app.js"></script>

</body>

</html>