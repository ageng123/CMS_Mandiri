$(document).ready(function () {
    $('.owl-carousel2').owlCarousel({
        loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            },
            autoplay:true,
            autoplayTimeout:5000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
    });
    let wajib = 15000;
    let sukarela = 0;
    var form = $("#step-form");
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex) {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            } else {
                if (currentIndex == 0) {
                    form.validate({
                        rules: PendaftaranServices.letrulesStep1,
                    })
                    let content = $('#alamat_rumah').val();
                    $('p[data-update=alamat_rumah]').html(content);
                    return form.valid();
                    // return true;
                } else if (currentIndex === 1) {
                    form.validate({
                        rules: PendaftaranServices.letrulesStep1,
                    })
                    let content = $('input[name=total_pembayaran]').val();
                    $('p[data-update=total_biaya]').html(content);
                    return form.valid();
                    // return true;

                } else {
                    return true;
                }
            }
            return false;
        },
        onFinished: function (event, currentIndex) {
            // Submit form input
            form.submit();
        }
    });
    $('.haripicker').datetimepicker({
        format: 'DD',
        icons: {
            previous: 'fa fa-chevron-left text-black',
            next: 'fa fa-chevron-right text-black',
        }
    })
    $('.bulanpicker').datetimepicker({
        format: 'MM',
        icons: {
            previous: 'fa fa-chevron-left text-black',
            next: 'fa fa-chevron-right text-black',
        }
    })
    $('.tahunpicker').datetimepicker({
        format: 'YYYY',
        icons: {
            previous: 'fa fa-chevron-left text-black',
            next: 'fa fa-chevron-right text-black',
        }
    })
    $('#select_wajib').on('change', function () {
        let biaya = $('#wajib').attr('data-biaya');
        let bulan = $(this).val();
        let bind = $('#wajib').attr('data-bind');
        wajib = biaya * bulan
        PendaftaranServices.renderFormData(Pembayaran_Function.formatRupiah(wajib, 'Rp. '), bind);
        Pembayaran_Function.renderToForm(wajib, sukarela);
    })
    $('#sukarela').on('keyup', function () {
        let biaya = $(this).val();
        biaya = biaya.replace(/[^,\d]/g, '', '');
        biaya = parseInt(biaya);
        sukarela = parseInt(biaya);
        $(this).val(Pembayaran_Function.formatRupiah(biaya), '');
        let bind = $(this).attr('data-bind');
        PendaftaranServices.renderFormData(Pembayaran_Function.formatRupiah(biaya, 'Rp. '), bind);
        Pembayaran_Function.renderToForm(wajib, sukarela);
    })
    $('#pekerjaan').on('change', function () {
        let val = $(this).val();
        if(val == 'Ibu Rumah Tangga' || val == "Pelajar" || val == "Mahasiswa"){
            $('input[name="pekerjaan[perusahaan]"]').addClass('hide');
            $('input[name="pekerjaan[divisi]"]').addClass('hide');
            $('input[name="pekerjaan[lama]"]').addClass('hide');
            $('textarea[name="pekerjaan[alamat]"]').addClass('hide');
            $('select[name="pekerjaan[provinsi]"]').addClass('hide');
            $('select[name="pekerjaan[kabupaten]"]').addClass('hide');
            $('input[name="pekerjaan[kecamatan]"]').addClass('hide');
            $('input[name="pekerjaan[kelurahan]"]').addClass('hide');
            $('input[name="pekerjaan[rt]"]').addClass('hide');
            $('input[name="pekerjaan[kodepos]"]').addClass('hide');
            $('#alamat_perusahaan_section').addClass('hide');
        } else {
            $('input[name="pekerjaan[perusahaan]"]').removeClass('hide');
            $('input[name="pekerjaan[divisi]"]').removeClass('hide');
            $('input[name="pekerjaan[lama]"]').removeClass('hide');
            $('textarea[name="pekerjaan[alamat]"]').removeClass('hide');
            $('select[name="pekerjaan[provinsi]"]').removeClass('hide');
            $('select[name="pekerjaan[kabupaten]"]').removeClass('hide');
            $('input[name="pekerjaan[kecamatan]"]').removeClass('hide');
            $('input[name="pekerjaan[kelurahan]"]').removeClass('hide');
            $('input[name="pekerjaan[rt]"]').removeClass('hide');
            $('input[name="pekerjaan[kodepos]"]').removeClass('hide');
            $('#alamat_perusahaan_section').removeClass('hide');

        }
        if (val == 'Lainnya') {
            $('#detail_pekerjaan').removeClass('hide');
            $('#detail_pekerjaan').addClass('required');

        } else {
            $('#detail_pekerjaan').addClass("hide");
            $('#detail_pekerjaan').removeClass('required');

        }
    })
    $('.getProvinsi').each(function () {
        let data = KotaIndonesia.getProvinsi();
        let container = '#' + $(this).attr('id');
        let content = '';
        content = content + '<option value="" data-idProvinsi="">Pilih Provinsi</option>';
        data.map(function (index) {
            content = content + '<option value="' + index.nama + '" data-idProvinsi="' + index.id + '">' + index.nama + '</option>';
        })
        $(container).html(content);
    })
    $('.getProvinsi').on('change', function () {
        let conten = '#' + $(this).attr('id');
        let option = $(conten + ' option:selected').attr('data-idProvinsi');
        let data = KotaIndonesia.getKota(option);
        let container = $(this).attr('data-kabupatenlist');
        let kabupatenlist = '';
        kabupatenlist = kabupatenlist + '<option value="">Pilih Kabupaten</option>';
        data.map(function (index) {
            kabupatenlist = kabupatenlist + '<option value="' + index.nama + '">' + index.nama + '</option>';
        })
        $(container).html(kabupatenlist);
    })
    $('.member').on('change', function () {
        let data = $(this).val();
        if (data === 'belum') {
            $('#client_id').addClass('hide');
            $('#client_id input').removeClass('required');
        } else {
            $('#client_id').removeClass('hide');
            $('#client_id input').addClass('required');
        }
    })
    $('.ktp').on('change', function () {
        let data = $(this).val();
        if (data === 'belum') {
            $('#ktp').addClass('hide');
            $('#kk2').addClass('hide');
            $('#ktp_ahli').removeClass('hide');
            $('#kk').removeClass('hide');
            $('#ktp input').removeClass('required');
            $('#kk input').addClass('required');
        } else {
            $('#ktp').removeClass('hide');
            $('#kk2').removeClass('hide');
            $('#ktp_ahli').addClass('hide');
            $('#kk').addClass('hide');
            $('#ktp input').addClass('required');
            $('#kk input').removeClass('required');
        }
    })
    $('input, select, textarea').on('change dp.change', function () {
        let preview = $(this).attr('data-bind');
        let val = $(this).val();
        PendaftaranServices.renderFormData(val, preview);
    })
    $('#alamat_radio').on('change', function () {
        let alamat = $('textarea#diri_alamat').val();
        let rt = $('input#diri_rt').val();
        let kelurahan = $('input#diri_kelurahan').val();
        let kecamatan = $('input#diri_kecamatan').val();
        let kabupaten = $('select#kabupaten1').val();
        let provinsi = $('select#provinsi').val();
        let kodepos = $('input#diri_kodepos').val();
        let alamat_rumah = alamat + ',' + rt + ',' + kelurahan + ',' + kecamatan + ',' + kabupaten + ',' + provinsi + ',' + kodepos;
        if($('textarea#alamat_rumah').html() === ''){
            $('textarea#alamat_rumah').html(alamat_rumah);
        } else {
            $('textarea#alamat_rumah').html('');
        }
    })
    $('.getProductLatest').each(function () {
        let data = Content_Services.getNewestProduct();
        if (data.kode == 200) {
            let content_data = data.data;
            let content = ''
            content_data.map(function (val) {
                content = content + Content_Services.latestProductData(val);
            })
            $(this).html(content)
        } else {
            console.log(data.msg);
        }
    })
    $('.getTopProduct').each(function () {
        let data = Content_Services.getTopProduct();
        if (data.kode == 200) {
            let content_data = data.data;
            let content = ''
            let PageSize = 4;
            content_data.map(function (val, index) {
                if (index < PageSize) {
                    content = content + Content_Services.TopProductData(val);
                }
            })
            $('#pagination-container').pagination({
                dataSource: content_data,
                pageSize: PageSize,
                callback: function (data, pagination) {
                    var html = Content_Services.paginateProduct(data);
                    $('#data-container').html(html);
                }
            })

            $(this).html(content)
        } else {
            console.log(data.msg);
        }
    })
    $('.getTagsPopular').each(function () {
        let data = Content_Services.getTopKategori();
        if (data.kode == 200) {
            let content_data = data.data;
            let content = ''
            content_data.map(function (val) {
                console.log(data);
                content = content + Content_Services.topTagsContent(val);
            })
            $(this).html(content)
        } else {
            console.log(data.msg);
        }
    })
    $('.topNews').each(function () {
        let data = Content_Services.getTopNews();
        if (data.kode == 200) {
            let content_data = data.data;
            let content = ''
            content_data.map(function (val, index) {
                console.log(index);
                if (index == 0) {
                    content = content + Content_Services.topNewsContent(1, val);
                } else {
                    content = content + Content_Services.topNewsContent(2, val);
                }
                // content = content + Content_Services.topTagsContent(val);
            })
            $(this).html(content)
        } else {
            console.log(data.msg);
        }
    })
    // Latest News
    let data = Content_Services.getNewestNews();
    if (data.kode == 200) {
        let content_data = data.data;
        let content = '';
        console.log(content_data);
        content_data.map(function (val, index) {
            // $('.getBeritaLatest[data-berita=' + (index + 1) + ']').attr('src', Content_Services.renderSource(val));
            $('.newestNews_container[data-index='+(index + 1)+']').removeClass('hide');
            $('.newestNewsImage[data-index='+(index + 1)+']').attr('src', Content_Services.renderSource(val));
            let ellipsis = '';
            if(val.title.length > 40){
                ellipsis = '...';
            }
            $('.title[data-index='+(index + 1)+']').html(val.title.slice(0, 40)+ellipsis);
            ellipsis = '';
            if(val.sub.length > 40){
                ellipsis = '...';
            }
            $('.subtitle[data-index='+(index + 1)+']').html(val.sub.slice(0, 40)+ellipsis);
            $('.btn-detail[data-index='+(index + 1)+']').attr('href', base_url+'/Landing/detail_berita/'+val.link);
            // $('.getBeritaLatest[data-berita=' + (index + 1) + ']').removeClass('hide');
        })
    } else {
        console.log(data.msg);
    }
    $('.beritaLink').on('click', function () {
        let link = $(this).attr('data-pointer');
        Content_Services.goToDetailNews(link);
    })
    $('.getPembayaranNasabah').each(function () {
        let auth = $(this).attr('auth_nasabah');
        let data = Content_Services.getSimpananHistory(auth);
        let content_data = data.data;
        let content = ''
        let PageSize = 5;
        // content_data.map(function(val, index){
        //     if(index < PageSize){
        //         content = content + Content_Services.viewHistory(val, index);
        //     }
        // })
        $('#pagination-container').pagination({
            dataSource: content_data,
            pageSize: PageSize,
            autoHidePrevious: true,
            autoHideNext: true,
            callback: function (data, pagination) {
                var html = '';
                data.map(function (val) {
                    html += Content_Services.viewHistory(val);
                })
                $('#historyContainer').html(html);
            }
        })
    })
    $('#edit_photo').click(function () {
        Profile_Services.openUpload();
    })
    $('#profileUpload').on('change', function () {
        $('#profilUploadButton').removeClass('hide');
        let input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profilePreview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    })
    $('.owl-carousel').each(function(){
        Content_Services.sliderRender('#slider');
        $("#slider").owlCarousel({
            items: 1, //10 items above 1000px browser width
            itemsDesktop: [1000, 1], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 1], // betweem 900px and 601px
            itemsTablet: [600, 1], //2 items between 600 and 0
            slideSpeed: 1000,
            autoPlay: true,
            itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
        });
    })
    // $('.req').on('click', function(){
    //     console.log(this);
    //     console.log($(this));
    // })
    $('.req :input').on('click', function(){
        console.log(this);
    })
})