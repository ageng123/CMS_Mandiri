<!-- <img src="<?= base_url('assets/img/') ?>list.png" width="200%"> -->
    


  <!-- page output -->
  <div class="padding-tb-40px background-light-grey">
    <div class="container">
            <h1 class="widget-title clearfix"><b>BERITA UPDATE </b></h1>
            <hr style="background-color: #f7a91e;width: 20%;height: 4px;" border="0" align="left">
      <div class="row">
     
      <div class="col-12" style="margin-top: 3vh">
        

        <div class="row">
          <?php $id = 3; for($i = 1; $i <= 8 ; $i++): ?>
            <?php $id++ ?>
        
        <div class="col-lg-3">
          <div class="blog-item thum-hover border-radius-15 hidden background-white hvr-float hvr-sh2">
            <div class="position-relative">
              <div class="date z-index-10 border-radius-15 width-50px padding-10px background-main-color text-white text-center position-absolute top-20px left-20px">
                17/2 2018
              </div>
              <a href="#">
                <div class="item-thumbnail background-dark"><img src="<?= base_url('assets/img/') ?>opening.jpg" alt=""></div>
              </a>
            </div>
            <a href="#" class="text-extra-large margin-tb-20px d-block padding-lr-30px">Don’t spend time beating on a wall, hoping to trans ...</a>
            <hr>
            <p class="padding-lr-30px opacity-6">when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
            <hr>
            <hr class="margin-bottom-0px border-white">
          </div>
        </div>
          <?php endfor; ?>

      </div>



      <p>

    <ul class="pagination pagination-md dark" style="text-align: center;">
      <li class="page-item"><a class="page-link rounded-0" href="#" tabindex="-1">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item"><a class="page-link rounded-0" href="#">Next</a></li>
    </ul>
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