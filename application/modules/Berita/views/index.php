<!-- <img src="<?= base_url('assets/img/') ?>list.png" width="200%"> -->
    


  <!-- page output -->
  <div class="padding-tb-40px background-light-grey">
    <div class="container">
            <h1 class="widget-title clearfix"><b>BERITA & MEDIA </b></h1>
            <hr style="background-color: #f7a91e;width: 20%;height: 4px;" border="0" align="left">
      <div class="row">
        <div class="col-12 row">
          <div class="col-3">
            Forum diskusi dan berbagi berita dari dalam maupun luar negeri. Mulai dari ideologi, politik, ekonomi, sosial dan budaya. <b style="color: #f7a91e;">Subforum</b>: berita-dunia-hiburan.
          </div>
        </div>
      <div class="col-12" style="margin-top: 3vh">
        <div class="row">
          <?php foreach($data as $key => $val): ?>      
        <div class="col-lg-3">
          <div class="blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2">
            <div class="position-relative">
              <div class="date z-index-10 border-radius-15 width-50px padding-10px background-main-color text-white text-center position-absolute top-20px left-20px">
                <?= date('d/m Y', strtotime($val->last_update)) ?>
              </div>
              <a href="<?= base_url('landing/detail_berita/').$val->link ?>">
                <div class="item-thumbnail background-dark"><img src="<?= site_url('resources/Berita/') ?><?= $val->thumbnail != null ? $val->thumbnail : 'opening.jpg' ?>" alt=""></div>
              </a>
            </div>
            <a href="<?= base_url('landing/detail_berita/').$val->link ?>" class="text-extra-large margin-tb-20px d-block padding-lr-30px"><?= $val->title ?></a>
            <hr>
            <p class="padding-lr-30px opacity-6"><?= $val->sub ?></p>
            <hr>
            <hr class="margin-bottom-0px border-white">
          </div>
        </div>
          <?php endforeach; ?>

      </div>


        <br>
      <p>
    <div class="row">
        <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $paginate; ?>
        </div>
    </div>
    </p>


      </div>
    </div>


      </div>
    </div>
  </div>
  <!-- //  page output -->
  
  <style>
    .no-border {
      border-color: transparent;
    }

    .no-bg {
      background-color: transparent;
    }
    .section-bg2{
      background-color: #efebe8;
    }
    
      .kontak-heading {
        border-bottom: 4px solid #ddaa37;
        width: max-content;
      }
      .text-primary{
        color: #795839 !important;
      }
    </style>