<div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="the-nile-1"
  data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
  <div id="rev_slider_18_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
    <ul>
      <!-- SLIDE  -->
      <li data-index="rs-64" data-transition="3dcurtain-horizontal" data-slotamount="default" data-hideafterloop="0"
        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
        data-thumb="<?= base_url('resources/Berita/').$berita->thumbnail ?>" data-rotate="0" data-saveperformance="off"
        data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
        data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="<?= base_url('resources/Berita/').$berita->thumbnail ?>" alt="" data-bgposition="center center"
          data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="110"
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
          style="z-index: 5; white-space: normal; font-size: 71px; line-height: 22px; font-weight: 400; color: #757575;font-family:Open Sans;">
        </div>


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


<section class="">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div style="background-color: transparent; width: 100%; height: 100%">
          <div class="d-flex flex-column container">
            <div class="row" style="padding-top: 50px">
                <div class="col-xs-12 col-lg-5">
                  <h1 style="color: #432a19;"> <b><?= $berita->title ?></b> </h1>
                  <hr style="background-color: #f7a91e;width: 100%;height: 4px;" border="0" align="left">
                  <h2 style="color: #6f6c6a;"><?= $berita->sub ?> </h2>
                </div>
                <div class="col-xs-12 col-lg-7">
                <p><?= $berita->content ?></p>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <br /><br />

        <div class="col-12">
          <h2>Berita Populer</h2>
        </div>
        <div class="col-12 topNews">
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
<!-- <section class="padding-tb-30px section-bg2">
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
</section> -->
<section>
  <div class="container">
    <h2>Comment</h2>
    <div class="container">
      <?php foreach($comment as $val){ ?>
      <div class="media p-3 d-flex flex-row">
        <a style="border-radius: 50%; width: 7vw; height: 8vh; overflow:hidden; border: 1px solid #666; padding-top: 0.8vw"
          href=”#” class=”pull-left”>
          <img src="<?= base_url('resources/Berita/').$berita->thumbnail ?>" class="media-object" />
        </a>
        <div class="media-body pl-4">
          <h4 class=”media-heading”><b><?= $val->full_name ?></b> &nbsp; <i style="font-size: 10pt" class="text-muted"><?= indonesiaFullDate(date('Y-m-d',strtotime($val->comment_update))) ?> </i></h4>
          <p><?= $val->isi ?></p>
        </div>
      </div>
      <?php } ?>
      <div class="commentInput">
        <?php if(!empty($this->session->userdata('user_id'))){ ?>
        <form
          action="<?= base_url('Landing/addComment?code=').encode($berita->id_news).'&auth='.encode($this->session->userdata('user_id')) ?>"
          method="POST">
          <div class="form-group">
            <input type="hidden" name="slug" value="<?= $this->uri->segment(3) ?>">
            <textarea name="comment_content" class="form-control" id="" cols="30" rows="10"></textarea>
            <button class="btn btn-block btn-secondary " type="submit">Kirim</button>
          </div>
        </form>
        <?php }else{ ?>
        <p>Harap Lakukan login terlebih dahulu untuk membalas komentar</p>
        <?php } ?>
      </div>
      <!– /media –>
    </div>
    <!– /container –>
  </div>
</section>
<img src="<?= base_url('assets/img/') ?>list.png" width="200%">
<section class="padding-tb-1px">
  <div class="container">
    <style>
      .kontak-heading {
        width: max-content;
      }

      .text-primary {
        color: #795839 !important;
      }
    </style>
    <div class="row text-center">
      <div class="col-12 sm-mb-30px text-center hvr-float wow fadeInUp">
        
      </div>

    </div>
  </div>
</section>