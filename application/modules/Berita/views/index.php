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
          <div class="col-xs-12 col-lg-3" style="width: 100%; min-height: 400px;">
            <div class="blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2">
              <div class="position-relative">
                <a href="<?= base_url('landing/detail_berita/').$val->link ?>">
                  <div class="item-thumbnail background-dark"><img style="max-height: 300px;" src="<?= base_url('resources/Berita/') ?><?= $val->author.'/'.$val->thumbnail != null ? $val->thumbnail : 'opening.jpg' ?>"></div>
                </a>
              </div>
              <a href="<?= base_url('landing/detail_berita/').$val->link ?>" class="text-extra-large margin-tb-20px d-block padding-lr-30px"><?= $val->title ?></a>
              <hr>
              <center><a class="btn btn-warning border-radius-30" href="<?= base_url('landing/detail_berita/').$val->link ?>">Read More</a></center>
              <br>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
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