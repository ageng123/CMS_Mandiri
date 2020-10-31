const HttpServices = {
    FormData: new Array(),
    PostAjax: (url) => {
        var response;
        $.ajax({
            type: 'POST',
            url: url,
            data: Object.assign({}, HttpServices.FormData),
            ContentType: 'multipart/form-data',
            async : false,
            success: function(resp){
                response = resp
            }
        });
        return response;
    },
    getAjax: (url)=>{
        var response;
        $.ajax({
            type: 'GET',
            url: url,
            // data: Object.assign({}, HttpServices.FormData),
            ContentType: 'multipart/form-data',
            async : false,
            success: function(resp){
                response = resp
            }
        });
        return response; 
    },
    getJson: (url) => {
        var response;
        $.ajax({
            type: 'GET',
            url: url,
            // data: Object.assign({}, HttpServices.FormData),
            // ContentType: 'multipart/form-data',
            dataType: 'json',
            async : false,
            success: function(resp){
                response = resp
            }
        });
        return response; 
    }
}
const KotaIndonesia = {
    provinsiJSON: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
    kotaJSON: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=',
    getProvinsi: () => {
        let data = HttpServices.getAjax(KotaIndonesia.provinsiJSON);
        return data.provinsi;
    },
    getKota: (idProvinsi) => {
        let data = HttpServices.getAjax(KotaIndonesia.kotaJSON + idProvinsi);
        return data.kota_kabupaten;
    }

}
jQuery.validator.addMethod("passwordCheck",
        function(value, element, param) {
            if (this.optional(element)) {
                return true;
            } else if (!/[A-Z]/.test(value)) {
                return false;
            } else if (!/[a-z]/.test(value)) {
                return false;
            } else if (!/[0-9]/.test(value)) {
                return false;
            }

            return true;
        },
        "Tidak ada symbol uppercase dan lowercase");
const PendaftaranServices = {
    renderFormData: (data, bind) => {
        $('p[data-update='+ bind +']').html(data);
    },
    letrulesStep1: {
        'Cemail': {
            equalTo : '#email',
            
        },
        'data_diri[email]': {
            required: true
        },
        'Cpassword': {
            equalTo: '#password'
        },
        'data_diri[password]': {
            required: true
        },
        'data_diri[nama]': {
            required: true
        },
        'data_diri[nomor_identity]': {
            required: true
        },
        'data_diri[tempat]': {
            required: true
        },
        'data_diri[tanggal]': {
            required: true
        },
        'data_diri[bulan]': {
            required: true
        },
        'data_diri[tahun]': {
            required: true
        },
        'data_diri[jenis_kelamin]': {
            required: true
        },
        'data_diri[hp]': {
            required: true
        },
        'data_diri[rumah]': {
            required: true
        },
        'data_diri[provinsi]': {
            required: true
        },
        'data_diri[kabupaten]': {
            required: true
        },
        'data_diri[kecamatan]': {
            required: true
        },
        'data_diri[kelurahan]': {
            required: true
        },
        'data_diri[kodepos]': {
            required: true
        },
        'data_diri[alamat_rumah]': {
            required: true
        },
        'data_diri[alamat]': {
            required: true
        },
        'data_diri[pendidikan]': {
            required: true
        },
       },
    letrulesStep2: {
        'pekerjaan[perusahaan]': {
            required: true
        },
        'pekerjaan[divisi]': {
            required: true
        },
        'pekerjaan[lama]': {
            required: true
        },

        'pekerjaan[alamat]': {
            required: true
        },
        'pekerjaan[provinsi]': {
            required: true
        },
        'pekerjaan[kabupaten]': {
            required: true
        },
        'pekerjaan[kecamatan]': {
            required: true
        },
        'pekerjaan[kelurahan]': {
            required: true
        },
        'pekerjaan[kodepos]': {
            required: true
        },
        'shu[nama]': {
            required: true
        },
        'shu[bank]': {
            required: true
        },
        'shu[norek]': {
            required: true
        },
        'shu[cabang]': {
            required: true
        },
        'waris[nama]': {
            required: true
        },
        'waris[hubungan]': {
            required: true
        },
        'simpanan[sukarela]': {
            required: true
        }
    }
}
const DateIndo_Func = {
    MonthList: ['','Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
    convertFromString: (date) => {
        let data = date.split("-");
        let tanggal = data[2];
        let bulan = DateIndo_Func.MonthList[data[1]];
        let tahun = data[0]
        return tanggal+' '+bulan+" "+tahun;
    }
}
const Profile_Services = {
    openUpload: () => {
        $('#profileUpload').trigger('click');
    }
}
const Pembayaran_Function = {
    renderToForm: function(wajib, sukarela){
        let prefix = "Rp. ";
        let value = wajib + sukarela + 100000;
        console.log(value);
        $('#biaya-total').html(Pembayaran_Function.formatRupiah(value, prefix));
        let container = $('#biaya-total').attr('data-bind');
        $('input[name=total_pembayaran]').val(Pembayaran_Function.formatRupiah(value, prefix));
        PendaftaranServices.renderFormData(Pembayaran_Function.formatRupiah(value, prefix), container);

    },
    formatRupiah: function(angka, prefix){
        var 	number_string = angka.toString(),
		split	= number_string.split(','),
		sisa 	= split[0].length % 3,
		rupiah 	= split[0].substr(0, sisa),
		ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
		
	if (ribuan) {
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}
	
	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
}
var base_url = $('body').attr('data-server');
const Content_Services = {
    TopNewsUrl: base_url+'api/getMostPopularNews',
    TopProductUrl: base_url+'api/topProduct',
    NewestProductUrl: base_url+'api/newestProduct',
    TopKategoriUrl: base_url+'api/getMostPopularTags',
    NewestNewsUrl: base_url+'api/newestNews',
    SimpananNasabah: base_url+'api/get_historyPembayaran',
    sliderUrl: base_url+'api/get_slider',
    renderSource: function(data){
        return base_url+'/resources/Berita/'+data.thumbnail;
    },
    viewHistory: (data, pag) => {
        let content = `<tr>
        <td style="text-align: center;">`+DateIndo_Func.convertFromString(data.tgl_pembayaran)+`</td>
        <td style="text-align: center;width: 25%;">`+data.jenis_bayar+`</td>
        <td style="text-align: right;">`+Pembayaran_Function.formatRupiah(data.jml_pembayaran, 'Rp. ')+`</td>
        </tr>`;
        return content
    },
    topNewsDescript: function(data){
        data = data.replace(/<img[^>]*>/g,""); 
        data = data.replace(/<[^>]*>?/gm, '');
        if (data.length <= 20) return data;
        let output = data.substr(0, data.lastIndexOf(' ', 20));
        return output
    },
    latestProductData: function(data){
       let content =  `<div class="col-2"><a href="">
                    <div class="card card-product">
                      <div class="card-body" style="padding: 0px; background: black">
                        <img style="width: 100% !important; object-fit: cover;" src="`+base_url+'/resources/Produk/'+data.uploader+'/'+data.nama_file+`" height="75" alt="">
                      </div>
                    </div>
                  </a>
        </div>`;
        return content;
    },
    TopProductData: function(data){
        let content = `<div class="col-6"><a href="">
        <div class="card card-product">
          <div class="card-body text-center">
            <img src="`+base_url+'/resources/Produk/'+data.uploader+'/'+data.nama_file+`" height="150" alt="">
            <div class="price-list">
              <h4>`+ data.title+`</h4>
              <h3>`+ Pembayaran_Function.formatRupiah(data.harga, 'Rp. ')+`</h3>
            </div>
          </div>
        </div>
      </a>
    </div>`;
        return content;
    },
    topTagsContent: function(data){
       return  `<div class="p-1">
        <button class="btn btn-sm btn-danger">`+data.nama_kategori+`</button>
      </div>`;
    },
    topNewsContent: function(type, data){
        if(type == 1){
            return `<div class="col-12 margin-bottom-30px wow fadeInUp beritaLink" data-pointer="`+data.link+`" style="cursor: pointer" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; border-bottom: 1px solid red;">
            <div class="text-left hvr-bob opacity-hover-7">
              <img src="`+base_url+'/resources/Berita/'+data.thumbnail+`" alt="">
              <h2 class="text-extra-large  margin-tb-10px">
                `+data.title+`
              </h2>
              <p class="opacity-7">`+Content_Services.topNewsDescript(data.content)+`</p>
            </div>
          </div>`;   
        }
        return `<div class="col-12 margin-bottom-30px wow fadeInUp beritaLink" style="cursor: pointer" data-pointer="`+data.link+`" data-wow-delay="0.2s"
        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; border-bottom: 2px solid red;">
        <div class="text-left hvr-bob opacity-hover-7">
          <h2 class="text-extra-large  margin-tb-10px">
          `+data.title+`
          </h2>
          <p class="opacity-7">`+Content_Services.topNewsDescript(data.content)+`</p>
        </div>
      </div>`;
    },
    getTopNews: function(){
       let data = HttpServices.getJson(Content_Services.TopNewsUrl);
       return data;
    },
    getTopProduct: function(){
       let data =  HttpServices.getJson(Content_Services.TopProductUrl);
       return data;    },
    getTopKategori: function(){
       let data =  HttpServices.getJson(Content_Services.TopKategoriUrl);
       return data;
    },
    getNewestNews: function(){
       let data =  HttpServices.getJson(Content_Services.NewestNewsUrl);
       return data;
    },
    getNewestProduct: function(){
        let data = HttpServices.getJson(Content_Services.NewestProductUrl);
        return data;
    },
    goToDetailNews: function(slug){
        let uri = base_url + 'landing/detail_berita/' + slug;
        window.location.href = uri;
    },
    paginateProduct: function(data){
        var html = '';
        $.each(data, function(index, item){
            html += Content_Services.TopProductData(item);
        });
        html += '';
        return html;
    },
    getSimpananHistory: (auth) =>{
        let data = HttpServices.getJson(Content_Services.SimpananNasabah + '?auth='+auth);
        return data;
    },
    sliderRender: (container) => {
        let data =  HttpServices.getJson(Content_Services.sliderUrl);
        data = data.data;
        content = '';
        data.map(function(val){
            content = content + `<div> <img src="`+base_url+'/resources/Slider/'+data.nama_file+`" alt=""> </div>`;
        })
        $(container).html(content);
    }
    
}