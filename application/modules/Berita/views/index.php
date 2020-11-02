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
                  <div class="item-thumbnail background-dark"><img style="max-height: 145px;min-height: 100px" src="<?= base_url('resources/Berita/') ?><?= $val->author.'/'.$val->thumbnail != null ? $val->thumbnail : 'opening.jpg' ?>"></div>
                </a>
              </div>
              <div class="col-12">
                  <a href="<?= base_url('landing/detail_berita/').$val->link ?>" class="text-extra-large margin-tb-20px d-block padding-lr-30px"><?= $val->title ?></a>
              </div>              <hr>
              <center><a class="btn btn-warning border-radius-30" href="<?= base_url('landing/detail_berita/').$val->link ?>">Read More</a></center>
              <br>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- <div class="col-12" style="margin-top: 3vh">
        <div class="row">
          <?php $id = 3; for($i = 1; $i <= 8 ; $i++): ?>
            <div class="col-xs-12 newestNews_container hide col-lg-3" style="width: 100%; min-height: 400px;" data-index="<?= $id ?>">
              <div class="blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2">
                <div class="position-relative">
                  <a class="btn-detail" data-index="<?= $id ?>" href="<?= base_url('landing/detail_berita/')?>">
                    <div class="item-thumbnail background-dark"><img style="max-height: 140px;" data-index="<?= $id ?>" class="newestNewsImage" src="<?= site_url('resources/Berita/') ?>" alt=""></div>
                  </a>
                </div>
                <b><a data-index="<?= $id ?>" class="btn-detail title text-extra-large margin-tb-20px d-block padding-lr-30px"></a></b>
                <center><p data-index="<?= $id ?>" class="subtitle">Subtitle</p></center>
                <hr>
                <center>
                  <a class="btn btn-warning border-radius-30 btn-detail" data-index="<?= $id ?>" href="<?= base_url('landing/detail_berita/')?>">
                    Read More
                  </a>
                </center>
                <hr class="margin-bottom-0px border-white">

              </div>
            </div>
          <?php $id++ ?>
          <?php endfor; ?>
        </div>
      </div> -->




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