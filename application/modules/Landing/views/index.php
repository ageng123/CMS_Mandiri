<div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="the-nile-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
    <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
    <div id="rev_slider_18_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
      <ul>
        
          <?php foreach($data_slider->result() as $assets){ ?>
          <li data-index="rs-65" data-transition="3dcurtain-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?= base_url('resources/Slider/') ?><?= $assets->nama_file ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
            <img src="<?= base_url('resources/Slider/') ?><?= $assets->nama_file ?>" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Power0.easeIn" data-scalestart="115" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-blurstart="0" data-blurend="0" data-offsetstart="2 3" data-offsetend="0 0" class="rev-slidebg" data-no-retina height="1000">
          </li>
        <?php } ?>
      </ul>
      <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
  </div>
<script type="text/javascript">
  var tpj = jQuery;

  var revapi18;
  tpj(document).ready(function () {
    
    if (tpj("#rev_slider_18_1").revolution == undefined) {
      revslider_showDoubleJqueryError("#rev_slider_18_1");
    } else {
      revapi18 = tpj("#rev_slider_18_1").show().revolution({
        sliderType: "standard",
        jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/revslider/assets/js/",
        sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            arrows: {
              style: "uranus",
              enable: true,
              hide_onmobile: false,
              hide_onleave: true,
              hide_delay: 200,
              hide_delay_mobile: 1200,
              tmp: '',
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 20,
                v_offset: 0
              }
            },
            bullets: {
              enable: false,
              hide_onmobile: false,
              style: "hermes",
              hide_onleave: false,
              direction: "horizontal",
              h_align: "center",
              v_align: "bottom",
              h_offset: 0,
              v_offset: 60,
              space: 5,
              tmp: ''
            }
          },
          //responsiveLevels: [1240, 1024, 778, 480],
          //visibilityLevels: [1240, 1024, 778, 480],
          //gridwidth: [1110, 1024, 778, 480],
          //gridheight: [720, 720, 500, 500],
          lazyType: "none",
          shadow: 0,
          spinner: "spinner0",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }
    }); /*ready*/

  </script>


<div class="modal" id="welcome-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
  aria-hidden="true">
  <div class="modal-body" style="display: flex; flex-direction: column">
    <button type="button"
      style="align-self: end;background: white !important;border: 1px solid black;border-radius: 30%;width: 30px;height: 30px; margin-bottom: 1vh; cursor: pointer"
      class="modal-close">
      <span aria-hidden="true">&times;</span>
    </button>
   
    <a href="<?= base_url();?>pendaftaran" style="text-align: center;"><img src="<?= base_url('assets/img/') ?>opening.jpg" style="text-align: center;" alt=""></a>

  </div>
</div>
<div class="modal" id="modalPendaftaran" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pendaftaran Sukses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>TERIMA KASIH TELAH MELAKUKAN PENDAFTARAN CALON ANGGOTA KOPERASI JASA KOMUNITAS PANENSAHAM INDONESIA</h3>
        <table class="no-border">
        <style>
            .no-border{
              border-top: 0px !important;
            }
            .no-border > tr td{
              border-top: 0px !important;
            }
            .no-border td {
              border-top: 0px !important;
            }
        </style>
          <tr>
            <td style="width: 35%">Nama </td>
            <td>:</td>
            <td><?= $this->session->flashdata('nama_pendaftaran'); ?></td>
          </tr>
          <tr>
            <td>Nomor Pendaftaran</td>
            <td>:</td>
            <td><?= $this->session->flashdata('nomor_nasabah') ?></td>
          </tr>
        </table>
        <p>Kami telah mengirimkan email ke: <?= $this->session->flashdata('email_nasabah') ?> untuk konfirmasi pendaftaran</p>
        <p>Mohon periksa inbox email Anda,jika tidak ada mohon periksa folder spam di akun email anda</p>
      </div>
    </div>
  </div>
</div>
<!-- <script>
  $(document).ready(function () {
    $('#welcome-modal').modal('show');
    $('#modalPendaftaran').modal('show');
    $('.modal-close').on('click', function () {
      $('#welcome-modal').modal('hide');
      console.log('modal');
    })
  })
</script> -->
<?php if($this->session->flashdata('daftar_sukses')): ?>
  <script>
  $(document).ready(function () {
    $('#modalPendaftaran').modal('show');
    $('.modal-close').on('click', function () {
      $('.modal').modal('hide');
      console.log('modal');
    })
  })
</script>
<?php else: ?>
  <script>
  $(document).ready(function () {
    $('#welcome-modal').modal('show');
    $('.modal-close').on('click', function () {
      $('#welcome-modal').modal('hide');
      console.log('modal');
    })
  })
</script>
<?php endif; ?>



  <div class="padding-tb-10px">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 col-sm-6 sm-mb-30px wow fadeInUp">
          <div style="background-color: transparent; width: 100%; height: 100%">
          <div class="d-flex flex-column container">
            <div class="row" style="padding-top: 50px">
              <div class="col-12 row" style="border-bottom: 4px solid orange">
                <div class="col-4 p-2"><img class="pl-2" src="<?= base_url('assets/img/panen.png') ?>"  alt=""></div>
                <div class="col-8 p-2"">
                  <p class="pt-2" style="margin-top: 25px;"><b style="color:#f7a91e;">Pusat jual beli online</b> perlengkapan dan peralatan hobi. 
                    Belanja murah, lengkap, aman, bisa nego dan COD. </p>
                </div>
              </div>
              <div class="col-12 p-2">
                Udah check <b style="color: #f7a91e;"> Panen Bersama</b> belum hari ini ? Banyak cerita seru dan informasi terbaru di sini. Berbagi Hobi. Berita Terbaru. Berkomunitas.
              </div>
              <style>
                .price-list {
                  display: flex;
                  flex-direction: column;
                  text-align: center;
                  justify-content: middle;
                }

                .price-list>h4 {
                  margin-top: 15px;
                }

                .card-product {
                  border: 0px transparent;
                }
              </style>


              <div class="col-12 p-2 pl-4 row getTopProduct" id="data-container">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              </div>
              <div class="col-12">
              <div ></div>
              <div id="pagination-container"></div>
              </div>
              <br><br><br>
              <div class="col-12 row">
                <h3><b style="color: #f7a91e;">Latest Products</b></h3>
              </div>
              <br><br>
              <div class="col-12 row getProductLatest">
              <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              </div>
            </div>
            <br><br>
          </div>
        </div>
        </div>

        <div class="col-lg-4 col-sm-6 sm-mb-30px wow fadeInUp">
          
        <div class="col-12 mb-3" style="">
          <div class="card">
            <div class="card-header landing-login-form">
              <ul class="nav nav-pils" id="myTab" role="tablist">
                <style>
                  .login-button {
                    background: #603913;
                    width: 50%;
                    padding: 2px 5px;
                    text-align: center;

                  }
                  .login-button > a {
                    color: #ffe276; 
                  }
                  .landing-login-form {
                    background: transparent !important;
                    border-bottom: 0px;
                    padding-left: 0px;
                    padding-right: 0px;
                  }
                </style>

              </ul>
            </div>
            <div class="card-body">
              <?php if(!($this->session->userdata('full_name'))): ?>
                <div class="text-center">
                <a href="#"><b style="color: #432a19;">LOGIN</b></a> &nbsp; <b style="color: #f7a91e;">|</b> <a href="<?= base_url();?>pendaftaran"> &nbsp; <b style="color: grey;">REGISTER</b></a>
              </div>
              <br/>
              <div class="tab-content" id="myTabContent">
                  <?php if($this->session->flashdata('error_login') != null): ?>
                  <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('error_login') ?>
                  </div>
                  <?php endif; ?>
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form action="<?= base_url('auth_api/login_nasabah') ?>" method="POST" style="border: 6px solid #fcb11a; border-radius: 2%; overflow: hidden">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="">
                    <input type="password" name="password" class="form-control" placeholder="Password" id="">
                    <button class="btn btn-danger btn-block"
                      style="border-radius: 2% !Important; background: #603913; color: white;">Continue</button>
                  </form>
                  <a class="btn btn-link" href="<?= base_url('auth/forgot_password') ?>">Forgot Password</a>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              </div>
                <?php else: ?>
                   <div class="position-relative" style="background-color: white;">
                    <center><div class="item-thumbnail rounded-circle" style="height: 10vw; width: 10vw; overflow: hidden">
                        <?php if(empty($user->photo)): ?>
                             <img src="<?= base_url('assets/img/');?>user.png" style="height: 100%" id="profilePreview">
                        <?php else: ?>
                            <img src="<?= base_url('resources/upload/').$this->session->userdata('user_id').'/'.$user->photo;?>" style="height: 100%" id="profilePreview">
                        <?php endif; ?>
                    </div></center>
                    <br>
                    <center>Welcome <b style="color: #f7a91e;"><?= $user->full_name ?></b></center>
                    <br>
                    <center> <a href="<?= base_url('auth/logout') ?>" class="btn btn-sm btn-danger">Logout</a></center>
                </div>
               
                <?php endif; ?>

              


            </div>
          </div>
        </div>
        <div class="col-12">
          <h2><b><i style="color: #603913;">BERITA POPULAR</i> <i style="color: #f7a91e;">KATEGORI</i></b></h2>
        </div>
        <div class="col-12 row getTagsPopular" style="margin-left: 0px;">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        <br/><br/>
        <div class="col-12">
          <h2><b><i style="color: #603913;">BERITA POPULAR</i> <i style="color: #f7a91e;">HARI INI</i>
          <br>
          </b></h2> <h4><?= indonesiaFullDate(date('Y-m-d')); ?></h4>
        </div>
        <div class="col-12 topNews">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
        </div>

      </div>

    </div>
  </div>


<section class="padding-tb-6px" style="background-image: url('<?= base_url('assets/img/') ?>list2.jpg');">
  <div class="container">
    <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
  </div>
</section>

  <div class="container padding-tb-30px" >
  <div class="text-left hvr-bob">
    <h1 class="widget-title clearfix"><font color="black"><b>PRODUK</b></font></h1>
  </div>

       <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
          <div class="row">
            <div class="col-lg-9 margin-bottom-30px wow fadeInUp">
              <div class="text-left hvr-bob">
                <h1 class="widget-title clearfix"><font color="black"><b>PENDAFTARAN ANGGOTA</b></font></h1>
              </div>
            </div>
            <div class="col-lg-3 margin-bottom-30px wow fadeInUp" data-wow-delay="0.2s">
              <div class="text-left hvr-bob">
                <h3 class="widget-title clearfix" style="background-color: #ecc15d;text-align: center;color: black;padding-left: 3px;padding-right: 3px;">DUKUNGAN BANTUAN <br> 021 - 4582 5710</h3>
              </div>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-1 margin-bottom-30px wow fadeInUp" data-wow-delay="0.2s"></div>
            <div class="col-lg-2 margin-bottom-30px wow fadeInUp" data-wow-delay="0.2s">
              <div class="text-center hvr-bob">
                <h2  style="text-align: center;">1)</h2><img src="<?= base_url('assets/img/Home/') ?>formulir.png" width="50%" align="center"><p style="text-align: center;"><b>Mengisi</b> dan <b>Melengkapi</b><br> Form Pendaftaran</p>
              </div>
            </div>
            <div class="col-lg-2 margin-bottom-30px  wow fadeInUp" data-wow-delay="0.2s">
              <div class="text-center hvr-bob">
                <h2>2)</h2><img src="<?= base_url('assets/img/Home/') ?>kai.png" width="50%"><p>Mendapat <br><b>Pesan Konformasi</b></p>
              </div>
            </div>
            <div class="col-lg-2 margin-bottom-30px  wow fadeInUp" data-wow-delay="0.2s">
              <div class="text-center hvr-bob">
                <h2>3)</h2><img src="<?= base_url('assets/img/Home/') ?>dana.png" width="50%"><p><b>Melakukan</b><br> Penyetoran Tunai</p>
              </div>
            </div>
            <div class="col-lg-2 margin-bottom-30px  wow fadeInUp" data-wow-delay="0.2s">
              <div class="text-center hvr-bob">
                <h2>4)</h2><img src="<?= base_url('assets/img/') ?>kon.png" width="50%"><p><b>Konfirmasi</b><br> Pembayaran</p>
              </div>
            </div>
            <div class="col-lg-2 margin-bottom-30px  wow fadeInUp" data-wow-delay="0.2s">
              <div class="text-center hvr-bob">
                <h2>5)</h2><img src="<?= base_url('assets/img/') ?>kartu.png" width="50%"><p><b>Mendapatkan</b><br> Kartu Anggota</p>
              </div>
            </div>
          </div>
          <div class="col-lg-1 margin-bottom-30px wow fadeInUp" data-wow-delay="0.2s"></div>


           <style>
        .product-tabs .product-link.active{
          background-color: transparent !important;
          font-weight: bold !important;
          color: brown;
        }
        .product-tabs .product-link{
          color: brown;
          font-weight: 100;
        }
        .product-tabs .product-link > h2{
          color: brown;
          font-weight: 100 !Important;
        }
        .product-tabs .product-link.active > h2{
          color: brown;
          font-weight: bolder !Important;
        }
      </style>
      <div class="col-12 text-center">

       <hr style="background-color: #f7a91e;width: 100%;height: 4px;" border="0" align="left">
        <ul class="nav nav-pills product-tabs mb-3" id="pills-tab" role="tablist" style="width: 100%;display: flex;justify-content: inherit;">
          <li class="nav-item">
            <a class="nav-link product-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
              aria-controls="pills-home" aria-selected="true"><h2 style="padding-right: 95px;" class="text-left hvr-bob">Semua</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
              aria-controls="pills-profile" aria-selected="false"><h2 style="padding-right: 95px;" class="text-left hvr-bob">Komersial</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
              aria-controls="pills-contact" aria-selected="false"><h2 style="padding-right: 95px;" class="text-left hvr-bob">Housing</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
              aria-controls="pills-contact" aria-selected="false"><h2 style="padding-right: 95px;" class="text-left hvr-bob">Keluarga</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
              aria-controls="pills-contact" aria-selected="false"><h2 class="text-left hvr-bob">Khusus</h2></a>
          </li>
        </ul>        
       <hr style="background-color: #f7a91e;width: 100%;height: 4px;" border="0" align="left">
      </div>
      <div class="col-12">
        <div class="testimonial-carousel" id="slider2">
          <div class="margin-lr-15px">
            <div class="background-white padding-20px" style="text-align: center;">
                <img src="<?= base_url('assets/img/Home/') ?>gedung.png"  style="text-align: center;width: 50%;">
              <hr>
              <h5 align="center">Commercial Property</h5>
            </div>
          </div>
          <div class="margin-lr-15px">
            <div class="background-white padding-20px" style="text-align: center;">
                <img src="<?= base_url('assets/img/Home/') ?>rumah.png" style="text-align: center;width: 50%;">
              <hr>
              <h5 align="center">Housing Property</h5>
            </div>
          </div>
          <div class="margin-lr-15px">
            <div class="background-white padding-20px" style="text-align: center;">
                <img src="<?= base_url('assets/img/Home/') ?>education.png" style="text-align: center;width: 50%;">
              <hr>
              <h5 align="center">Education Property</h5>
            </div>
          </div>
          <div class="margin-lr-15px">
            <div class="background-white padding-20px" style="text-align: center;">
                <img src="<?= base_url('assets/img/Home/') ?>pensiun.png" style="text-align: center;width: 50%;">
              <hr>
              <h5 align="center">Modal Pensiun</h5>
            </div>
          </div>
        </div>

      </div>

        </div>

      


<section class="padding-tb-6px" style="background-image: url('<?= base_url('assets/img/') ?>list2.jpg');">
  <div class="container">
    <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
  </div>
</section>

  <div class="container padding-tb-30px" >
  <div class="text-left hvr-bob">
    <h1 class="widget-title clearfix"><font color="black"><b>BERITA UPDATE</b></font></h1>
  </div>

       <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
    <div class="row ">
      <div class="col-12 row">
        <div class="col-md-3 col-xs-12">
          Forum diskusi dan berbagi berita dari dalam maupun luar negeri. Mulai dari ideologi, politik, ekonomi, sosial dan budaya. <b style="color: #f7a91e;">Subforum</b>: berita-dunia-hiburan.
        </div>
        <div class="col-md-9 col-xs-12 row getBeritaLatest">
          <div class="card no-border col-md-6 col-xs-12">
            <div class="newestNews_container hide latestNews blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2" data-index="<?= '1' ?>">
              <img class="newestNewsImage" src="<?= base_url('assets/img/panens.png') ?>" alt="Avatar" data-index="<?= '1' ?>" class="">
              <div class="newestNewsOverlay">
                <div class="newsText" style="margin-top: 15px;"><h4 class="title" data-index="<?= '1' ?>"><b>Hello World</b></h4><div data-index="<?= '1' ?>" class="subtitle">Subtitle</div><p><a data-index="<?= '1' ?>" class="btn btn-detail btn-warning border-radius-30 btn-md">Read More</a></p></div>
              </div>
            </div>
          </div>
          <div class="card no-border col-md-6 col-xs-12">
            <div class="newestNews_container hide latestNews blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2" data-index="<?= '2' ?>">
                <img class="newestNewsImage" src="" alt="Avatar" data-index="<?= '2' ?>" class="">
                <div class="newestNewsOverlay">
                  <div class="newsText" style="margin-top: 15px;"><h4 class="title" data-index="<?= '2' ?>"><b>Hello World</b></h4><div data-index="<?= '2' ?>" class="subtitle">Subtitle</div><p><a data-index="<?= '2' ?>" class="btn btn-detail btn-warning border-radius-30 btn-md">Read More</a></p></div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </div>
       
      <div class="col-12" style="margin-top: 3vh">
        <div class="row">
          <?php foreach($data_berita->result() as $val): ?>      
          <div class="col-xs-12 col-lg-3" style="width: 100%; min-height: 400px;">
            <div class="blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2">
              <div class="position-relative">
                <a href="<?= base_url('landing/detail_berita/').$val->link ?>">
                  <div class="item-thumbnail background-dark"><img style="max-height: 190px; min-height: 100px; min-width: 200px; object-fit: cover;" src="<?= base_url('resources/Berita/') ?><?= $val->author.'/'.$val->thumbnail != null ? $val->thumbnail : 'opening.jpg' ?>"></div>
                </a>
              </div>
              <div class="col-12">
                  <a href="<?= base_url('Landing/detail_berita/').$val->link ?>" class="margin-tb-20px d-block padding-lr-30px" style="font-size: 14px;text-align: justify;"><?= substr($val->title,0,70) ?>...</a>
              </div>              <hr>
              <center><a class="btn btn-warning border-radius-30" href="<?= base_url('Landing/detail_berita/').$val->link ?>">Read More</a></center>
              <br>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
       
    </div>
  </section>



<section class="section-bg2">
  <style>
    .no-border {
      border-color: transparent;
    }

    .no-bg {
      background-color: transparent;
    }

    .section-bg2 {
      background-color: #efebe8;
    }
  </style>



<section class="padding-tb-6px" style="background-image: url('<?= base_url('assets/img/') ?>list2.jpg');">
  <div class="container">
    <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
  </div>
</section>

  <div class="container padding-tb-30px" >
  <div class="text-left hvr-bob">
    <h1 class="widget-title clearfix"><font color="black"><b>KELUARGA</b></font></h1>
  </div>

       <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
    <div class="row ">
      <div class="col-12 row">
     
<div class="col-lg-4 col-md-6 margin-bottom-30px wow fadeInUp">
        <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/panens.png') ?>" alt="" >
          </div>
          <div class="card-body no-border no-bg">
             <div class="background-white padding-20px" style="text-align: center;font-size: 14px;">
                Media layanan berupa jasa kepada <b>investor saham</b>, edukasi para investor, mengenai bagaimana menjalankan trading saham yang sehat serta mengimplementasikannya secara mandiri ke <b><font color="#f7a91e">Bursa Efek Indonesia</font></b>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 margin-bottom-30px wow fadeInUp">
        <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/panenbersama_2.png') ?>" alt="">
          </div>
          <div class="card-body no-border bo-bg">
             <div class="background-white padding-20px" style="text-align: center;font-size: 14px;">
                <b><font color="#f7a91e">Forum jual beli online</font></b> perlengkapan dan peralatan hobi. Belanja murah, lengkap, aman, bisa nego dan COD.
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 margin-bottom-30px wow fadeInUp">
        <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/radio3.png') ?>" alt="" >
          </div>
          <br>
            <div class="background-white padding-20px" style="text-align: center;font-size: 14px;">
                <b><font color="#f7a91e">Radio PanenSaham</font></b> adalah Radio Streaming di Jakarta dan Semarang yang membahas tentang pasar modal, bisnis dan informasi lainnya dengan jam tayang setiap Senin - Jumat adalah pukul 06:00 sampai 00:00 WIB.
            </div>
        </div>
      </div>


    </div>
</div>
</div>  


<section class="padding-tb-6px" style="background-image: url('<?= base_url('assets/img/') ?>list2.jpg');">
  <div class="container">
    <div class="row justify-content-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"></div>
  </div>
</section>
<section style="background-image: url(<?= base_url('assets/img/map.png') ?>)" class="padding-tb-30px">
  <div class="container">
    <style>
      .kontak-heading {
        border-bottom: 4px solid #ddaa37;
        width: max-content;
      }

      .text-primary {
        color: #795839 !important;
      }
    </style>
          <h1 class="text-white widget-title clearfix"><b>KONTAK</b></h1>
       <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
    <div class="row text-center">
    <div class="col-lg-12 col-md-6 sm-mb-30px text-center hvr-float wow fadeInUp">
      <div class="col-12 sm-mb-30px text-center hvr-float wow fadeInUp">
        <span class="fa fa-map-marker" style="font-size: 72px; color: yellow" aria-hidden="true"></span>
        <br>
        <a href="https://goo.gl/maps/xqwezwXATf3ijMiS6" style="margin-top: 2vh;background-color: white;" class="btn btn-lg btn-default" target="_blank"> Show on Map</a>
      </div>

    </div>
  </div>
</section>
