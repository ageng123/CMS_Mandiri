<img src="<?= base_url('assets/img/') ?>list.png" width="200%">
    
  <!-- // Page title -->

  <!-- page output -->


<img src="<?= base_url('assets/img/') ?>map.png" width="200%">
<header class="gradient-white box-shadow">
    <div class="background-grey-2 padding-tb-5px position-relative" style="background-color: #c9bcb0;">
      <div class="container">
        <div class="row">
          <div class="col-xl-1 col-lg-1"></div>
          <div class="col-xl-10 col-lg-10" align="center">
            <!-- lang dropdown -->
            <font align="center" color="#603913"><b>Koperasi Jasa Komunitas Panen Saham Indonesia</b> | Rukan Gading Bukit Indah  Blok A No 27. Kelapa Gading Jakarta Utara 14240</font>
           
            <!-- // lang dropdown -->
          </div>
          <div class="col-xl-1 col-lg-1"></div>
        </div>
      </div>
    </div>



  <!-- page output -->
  <div class="padding-tb-40px background-light-grey">
    <div class="container">
            <h1 class="widget-title clearfix"><b>KONTAK </b></h1>
            <hr style="background-color: #f7a91e;width: 12%;height: 4px;" border="0" align="left">
      <div class="row">
        <!-- sidebar -->
        <div class="col-lg-4 col-md-4">

          <!-- Mail list -->
          <div class="widget">
            <p style="font-size: 17px;">We would love to hear from you. <font color="#f7a91e">Get in touch </font>to discover what we can do for you.</p>
          </div>
          <!-- //  Mail list -->

        </div>
        <!-- // sidebar -->
      

        <!--  content -->
        <div class="col-lg-8 col-md-8">
          <?php if($this->session->flashdata('message')) : ?>
        
         <div class="alert alert-warning"><?= $this->session->flashdata('message'); ?></div>
        <?php endif; ?>
          <form action="<?= base_url('kontak/proses_add');?>" method="POST">
            <table>
                <tr>
                <td><label >Full Name *</label></td>
                <td><input type="text" class="form-control" id="inputName4" placeholder="Name" name="nama" required></td>
              </tr>
              <tr>
                <td><label >Email *</label></td>
                <td><input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required></td>
              </tr>
           <tr>
                <td><label >Subject</label></td>
              <td><input type="text" class="form-control" id="inputAddress" placeholder="Subject" name="subject"></td>
            </tr>
            <tr>
              <td><label>Message *</label></td>
              <td><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required name="message" required></textarea></td>
            </tr>
            </table>

            <button type="submit" class="btn-sm btn-lg btn-block text-center font-weight-bold text-uppercase rounded-0 padding-15px" style="background-color: #c9bcb0;color:#603913;">Send</button>
          </form>
        <!-- //  content col-8 -->


      </div>
    </div>
  </div>
  <!-- //  page output -->