<div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="the-nile-1"
  data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
  <div id="rev_slider_18_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
    <ul>
      <!-- SLIDE  -->
      <li data-index="rs-64" data-transition="3dcurtain-horizontal" data-slotamount="default" data-hideafterloop="0"
        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
        data-thumb="<?= base_url('assets/landing_template/') ?>assets/revslider/assets/100x50_a033c-1.jpg"
        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
        data-description="">
        <!-- MAIN IMAGE -->
        <img src="<?= base_url('assets/img/') ?>header.png" alt="" data-bgposition="center center" data-kenburns="on"
          data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110"
          data-rotatestart="0" data-rotateend="0" data-blurstart="-2" data-blurend="0" data-offsetstart="2 2"
          data-offsetend="0 0" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption   tp-resizeme" id="slide-64-layer-4" data-x="['left','left','left','center']"
          data-hoffset="['657','575','259','0']" data-y="['top','top','top','top']"
          data-voffset="['123','123','57','57']" data-width="none" data-height="none" data-whitespace="normal"
          data-type="text" data-responsive_offset="on"
          data-frames='[{"delay":10,"speed":750,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
          data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
          data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
          style="z-index: 5; white-space: normal; font-size: 71px; line-height: 22px; font-weight: 400; color: #757575;font-family:Open Sans;"> </div>


      </li>
      <!-- SLIDE  -->
      
    </ul>
    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
  </div>
</div>
<!-- END REVOLUTION SLIDER -->
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
            enable: true,
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
        responsiveLevels: [1240, 1024, 778, 480],
        visibilityLevels: [1240, 1024, 778, 480],
        gridwidth: [1110, 1024, 778, 480],
        gridheight: [720, 720, 500, 500],
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
    <table style="border: 0px;">
      <tr>
      <td width="17%" style="border: 0px;">&nbsp;</td>
      <td width="70%" style="border: 0px;">
    <a href="<?= base_url();?>pendaftaran"><img src="<?= base_url('assets/img/') ?>opening.jpg" style="height: auto ; width: 93%;text-align: center;" alt=""></a></td>
      <td width="10%" style="border: 0px;">&nbsp;</td>

      </tr>
    </table>
  </div>
</div>
<script>
  $(document).ready(function () {
    $('#welcome-modal').modal('show');
    $('.modal-close').on('click', function () {
      $('#welcome-modal').modal('hide');
      console.log('modal');
    })
  })
</script>
<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div style="background-color: transparent; width: 100%; height: 100%">
          <div class="d-flex flex-column container">
            <div class="row" style="padding-top: 50px">
              <div class="col-12 row" style="border-bottom: 2px solid red">
                <div class="col-4 p-2"><img class="pl-4" src="<?= base_url('assets/img/pb.png') ?>" alt=""></div>
                <div class="col-8 p-2">
                  <p class="text-black pt-2">Sudah check panen bersama </p>
                </div>
              </div>
              <div class="col-12 p-2">
                Sudah Check Panen Bersama atau belum
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
              <div class="col-12 p-2 pl-4 row">
                <?php for($i = 1; $i <= 6; $i++){
              ?>
                <div class="col-6"><a href="">
                    <div class="card card-product">
                      <div class="card-body">
                        <img src="<?= base_url('assets/img/header.png') ?>" height="150" alt="">
                        <div class="price-list">
                          <h4>Sepeda Gunung</h4>
                          <h3>$30.000</h3>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>

                <?php
              } ?>
              </div>
              <div class="col-12 row">
                <h3>Latest Product</h3>
              </div>
              <div class="col-12 row">
                <?php for($i = 1; $i <= 6; $i++){
              ?>
                <div class="col-2"><a href="">
                    <div class="card card-product">
                      <div class="card-boy" style="padding: 0px; background: black">
                        <img src="<?= base_url('assets/img/header.png') ?>" height="75" alt="">
                      </div>
                    </div>
                  </a>
                </div>

                <?php
              } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
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
                <li class="nav-item login-button">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">Login</a>
                </li>
                <li class="nav-item login-button">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Register</a>
                </li>
              </ul>
            </div>
            <div class="card-body">

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form action="" style="border: 6px solid #fcb11a; border-radius: 2%; overflow: hidden">
                    <input type="text" name="username" class="form-control" placeholder="username" id="">
                    <input type="password" name="pass" class="form-control" placeholder="password" id="">
                    <button class="btn btn-danger btn-block"
                      style="border-radius: 2% !Important; background: #603913; color: #fcb11a">Continue</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <h2>Kategori Berita Populer</h2>
        </div>
        <div class="col-12 row">
          <?php for($i = 0; $i < 23; $i++){?>
          <div class="p-1">
            <button class="btn btn-sm btn-danger">Tags berita</button>
          </div>
          <?php } ?>
        </div>
        <div class="col-12">
          <h2>Berita Populer</h2>
        </div>
        <div class="col-12">
          <?php for($i = 0; $i < 3; $i++){?>
          <?php if($i == 0): ?>
          <div class="col-12 margin-bottom-30px wow fadeInUp" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; border-bottom: 1px solid red;">
            <div class="text-left hvr-bob opacity-hover-7">
              <img src="<?= base_url('assets/img/pb.png') ?>" alt="">
              <h2 class="text-extra-large  margin-tb-10px">
                Powerful Website
              </h2>
              <p class="opacity-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard</p>
            </div>
          </div>
          <?php else: ?>
          <div class="col-12 margin-bottom-30px wow fadeInUp" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; border-bottom: 2px solid red;">
            <div class="text-left hvr-bob opacity-hover-7">
              <h2 class="text-extra-large  margin-tb-10px">
                Powerful Website
              </h2>
              <p class="opacity-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard</p>
            </div>
          </div>
          <?php endif; ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>



<img src="<?= base_url('assets/img/') ?>list.png" width="200%">
<section class="padding-tb-30px section-bg2">
  <div class="container">
      <h1 class="widget-title clearfix"><b>PRODUK</b></h1>
       <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
    <div class="row">

      <div class="col-4">
        <p style="font-size: 14px;">Program Pinjaman dapat diikuti oleh masyarakat umum dan karyawan tetap Panen Sahama Group yang sudah menjadi anggota Koperasi Jasa Komunitas <font color="#f7a91e">Panen Saham indonesia</font></p>
      </div>
      <div class="col-8">
         <table>
           <tr>
             <td style="border: 0px;font-size: 14px;"><h2 class="text-primary">1)</h2><img src="<?= base_url('assets/img/Home/') ?>formulir.png" width="50%"><p ><b>Mengisi</b> dan <b>Melengkapi</b><br> Form Pinjaman</p></td>
             <td style="border: 0px;font-size: 14px;"><h2 class="text-primary">2)</h2><img src="<?= base_url('assets/img/Home/') ?>kai.png" width="50%"><p>Persetujuan <b>KAI</b></p></td>
             <td style="border: 0px;font-size: 14px;"><h2 class="text-primary">3)</h2><img src="<?= base_url('assets/img/Home/') ?>dana.png" width="50%"><p><b>Dana</b> diterima oleh anggota</p></td>
           </tr>
         </table>
      </div>

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
              aria-controls="pills-home" aria-selected="true"><h2 style="padding-right: 95px;">Semua</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
              aria-controls="pills-profile" aria-selected="false"><h2 style="padding-right: 95px;">Komersial</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
              aria-controls="pills-contact" aria-selected="false"><h2 style="padding-right: 95px;">Housing</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
              aria-controls="pills-contact" aria-selected="false"><h2 style="padding-right: 95px;">Keluarga</h2></a>
          </li>
          <li class="nav-item">
            <a class="nav-link product-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
              aria-controls="pills-contact" aria-selected="false"><h2>Khusus</h2></a>
          </li>
        </ul>        
       <hr style="background-color: #f7a91e;width: 100%;height: 4px;" border="0" align="left">
      </div>
      <div class="col-12">
        <div class="testimonial-carousel">
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
</section>





<img src="<?= base_url('assets/img/') ?>list.png" width="200%">
<section class="padding-tb-30px">
  <div class="container">
      <h1 class="widget-title clearfix"><b>BERITA UPDATE</b></h1>
       <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
    <div class="row">
      <div class="col-12 row">
        <div class="col-3">
          Forum Diskusi Berbagi Berita dari dalam dan luar negeri. Mulai dari Ideologi Politik dan lain sebagainya
        </div>
        <div class="col-9 row">
          <div class="card col-8">
            <div class="card-body">
              <img src="<?= base_url('assets/img/panens.png') ?>" alt="" srcset="">
            </div>
          </div>
          <div class="card col-4">
            <div class="card-body">
              <img src="<?= base_url('assets/img/panens.png') ?>" alt="" srcset="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-12" style="margin-top: 3vh">
        <div class="row">
          <?php for($i = 1; $i <= 8 ; $i++): ?>
          <div class="card col-3">
            <div class="card-body">
              <img src="<?= base_url('assets/img/panens.png') ?>" alt="" srcset="">
            </div>
          </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
</section>
<!-- <section class="video wow fadeInUp">
  <h1 class="kontak-heading text-primary">Keluarga</h1>
    <div class="row">
      <div class="col-4">
        <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/panens.png') ?>" alt="">
          </div>
          <div class="card-body no-border no-bg">
            <div class="container">TEsting</div>
          </div>
        </div>
      </div>
      <div class="col-4">
      <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/panen.png') ?>" alt="">
          </div>
          <div class="card-body no-border bo-bg">
            <div class="container">TEsting</div>
          </div>
        </div>
      </div>
      <div class="col-4">
      <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/radio.png') ?>" alt="">
          </div>
          <div class="card-body no-border no-bg">
            <div class="container">TEsting</div>
          </div>
        </div>
      </div>
    </div>
</section> -->
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


  <img src="<?= base_url('assets/img/') ?>list.png" width="200%">
<section class="padding-tb-30px section-bg2">
  <div class="container">
      <h1 class="widget-title clearfix"><b>KELUARGA</b></h1>
       <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
    <div class="row">
      <div class="col-4">
        <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/panens.png') ?>" alt="">
          </div>
          <div class="card-body no-border no-bg">
             <div class="background-white padding-20px" style="text-align: center;font-size: 14px;">
                Media layanan berupa jasa kepada <b>investor saham</b>, edukasi para investor, mengenai bagaimana menjalankan trading saham yang sehat serta mengimplementasikannya secara mandiri ke <font color="#f7a91e">Bursa Efek Indonesia</font>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/panenbersama_2.png') ?>" alt="">
          </div>
          <div class="card-body no-border bo-bg">
             <div class="background-white padding-20px" style="text-align: center;font-size: 14px;">
                <font color="#f7a91e">Forum jual beli online</font> perlengkapan dan peralatan hobi. Belanja murah, lengkap, aman, bisa nego dan COD.
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="card no-border no-bg">
          <div class="card-header no-border no-bg">
            <img src="<?= base_url('assets/img/radio3.png') ?>" alt="" >
          </div>
          <br>
            <div class="background-white padding-20px" style="text-align: center;font-size: 14px;">
                <font color="#f7a91e">Forum jual beli online</font> perlengkapan dan peralatan hobi. Belanja murah, lengkap, aman, bisa nego dan COD.
            </div>
        </div>
      </div>
    </div>
</section>


<img src="<?= base_url('assets/img/') ?>list.png" width="200%">
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
      <div class="col-12 sm-mb-30px text-center hvr-float wow fadeInUp">
        <span class="fa fa-map-marker" style="font-size: 72px; color: yellow" aria-hidden="true"></span>
        <br>
        <a href="https://goo.gl/maps/xqwezwXATf3ijMiS6" style="margin-top: 2vh;background-color: white;" class="btn btn-lg btn-default" target="_blank"> Show on Map</a>
      </div>

    </div>
  </div>
</section>