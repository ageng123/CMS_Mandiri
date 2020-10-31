// $('.datepicker').datetimepicker({format: 'yyyy-mm-dd'});
var base_url = $('body').attr('server-url');
const DatatableServices = {
    dataUri: '',
    container: '',
    table : new Array(),
    initDT: () => {
        DatatableServices.table = $(DatatableServices.container).DataTable({
            "processing": true,
            "serverSide": false,
            "ajax": {
                "url": DatatableServices.dataUri,
                "type": "POST"
            },
            "columnDefs": [ {
                orderable: false,
                className: 'select-checkbox form-check-input',
                targets:   1,
                'checkboxes': {
                    'selectRow': true
                 }
            } ],
            "select": {
                style:    'multi',
                selector: 'td:first-child',
            },
            "order": [[ 1, 'asc' ]],
            language: {
                paginate: {
                  next: '<i class="fa fa-angle-right">',
                  previous: '<i class="fa fa-angle-left">'  
                }
              }
        });
        DatatableServices.table.column(0).visible(false);
    },
    initDTOnly: () => {
        DatatableServices.table = $(DatatableServices.container).DataTable({
            "processing": true,
            "serverSide": false,
            "ajax": {
                "url": DatatableServices.dataUri,
                "type": "POST"
            },
            language: {
                paginate: {
                  next: '<i class="fa fa-angle-right">',
                  previous: '<i class="fa fa-angle-left">'  
                }
              }
        })
    },
    setContainer: (id) => {
        console.log(id);
        DatatableServices.container = '#' + id;
    }
}

function ActionMessage(type, e, event)
{
    event.preventDefault();
    let title = '';
    switch(type){
        case 1:
            title = 'Konfirmasi Delete';
        break;
        default:
            title = 'Confirmation ?';
        break;
    }
    let msg = e.getAttribute('data-msg');
    let confirm = Swal.fire({
        title: title,
        text: msg,
        icon: 'error',
        confirmButtonText: 'Confirm',
        showConfirmButton: true,
        showCancelButton: true,
        closeOnCancel: true
      }).then(function(isConfirmed){
        isConfirmed.value ? window.location.href = e.getAttribute('href') : '';
      })
    return confirm;
}
const UserServices = {
    userUriEdit: base_url+'users/edit?session_id=',
    userUriUpdate: base_url+'users/update?session_id=',
    uriTambahData: base_url+'users/save',
    userUriData: Array(),
    userInitData: (uri) => {
       let data =  HttpServices.getAjax(uri);
       data = JSON.parse(data);
       UserServices.userRenderToForm(data.data);
    },
    userRenderToForm: (data) => {
        $('#userModal-form').modal('show');
        $('#userForm input select').val('');
        $('input[name=full_name]').val(data.full_name);
        $('input[name=tempat_lahir]').val(data.tempat_lahir);
        $('input[name=tanggal_lahir]').val(data.tanggal_lahir);
        $('select[name=jenis_kelamin]').val(data.jenis_kelamin).change();
        $('input[name=email]').val(data.email);
        $('input[name=username]').val(data.username);
    },
    clearForm: () => {
        $('#userForm input select textarea').val();
    },
    buttonUpdateClicked: (id) => {
        let uriData = UserServices.userUriEdit+id;
        $('#userForm').attr('action', UserServices.userUriUpdate+id);
        UserServices.userInitData(uriData);
    },
    buttonAddClicked: () => {
        $('#userModal-form').modal('show');
        $('#userForm').attr('action', UserServices.uriTambahData);
        UserServices.clearForm();
    }
}
const NasabahServices = {
    uriEdit: base_url + 'nasabah/edit?session_id=',
    uriUpdate: base_url+'nasabah/update?session_id=',
    uriAdd: base_url+'nasabah/save_data',
    Form: '#step-form',
    ModalForm: '#modal-form',
    JSON: Array(),
    InitData: (uri) => {
        let getData = HttpServices.getAjax(uri);
        let data = JSON.parse(getData);
        data = data.data;
        NasabahServices.renderToForm(data);
    },
    renderToForm: (data) => {
        console.log(data);
        let form_data = data.sudah_member;
        if(form_data == 1){
            $('input[name="data_diri[member]"][value="sudah"]').prop('checked', true);
            $('#client_id').removeClass('hide');
            $('#client_id input').val(data.member);
        } else {
            $('input[name="data_diri[member]"][value="belum"]').prop('checked', true);
            $('#client_id').addClass('hide');
        }
        if(data.foto_ktp == 'ktp_'+data.id+'/'){
            $('input[name="data_diri[punya_ktp]"][value="belum"]').prop('checked', true);
            // $('input[name="ktp_ahli"]').val(data.foto_ktp_ahli_waris);
            // $('#kk input[name="kk"]').val(data.foto_kk);
            $('input[name="data_diri[nomor_identity]"]').val(data.no_kk);

        } else {
            $('input[name="data_diri[punya_ktp]"][value="sudah"]').prop('checked', true);
            // $('input[name="ktp"]').val(data.foto_ktp);
            // $('#kk2 input[name="ktp"]').val(data.foto_kk);
            $('input[name="data_diri[nomor_identity]"]').val(data.ektp);

        }
        $('input[name="data_diri[email]"]').val(data.email);
        $('input[name="Cemail"]').val(data.email);
        $('input[name="data_diri[nama]"]').val(data.full_name);
        $('input[name="data_diri[tempat]"]').val(data.tempat_lahir);
        $('input[name="data_diri[nomor_identity]"]').val(data.ektp);
        form_data = data.tanggal_lahir.split('-');
        $('input[name="data_diri[tahun]"]').val(form_data[0]);
        $('select[name="data_diri[bulan]"]').val(parseInt(form_data[1]));
        $('select[name="data_diri[tanggal]"]').val(parseInt(form_data[2]));
        $('select[name="data_diri[jenis_kelamin]"]').val(data.jenis_kelamin);
        form_data = data.alamat.split('/');
        $('textarea[name="data_diri[alamat]"]').val(form_data[0]);
        $('select[name="data_diri[provinsi]"]').val(form_data[6]);
        $('select[name="data_diri[provinsi]"]').trigger('change');
        $('select[name="data_diri[kabupaten]"]').val(form_data[5]);
        $('input[name="data_diri[rt]"]').val(form_data[1]+'/'+form_data[2]);
        $('input[name="data_diri[kecamatan]"]').val(form_data[4]);
        $('input[name="data_diri[kelurahan]"]').val(form_data[3]);
        $('input[name="data_diri[kodepos]"]').val(form_data[7]);
        form_data = data.no_hp.split('/');
        $('input[name="data_diri[hp]"]').val(form_data[0]);
        $('input[name="data_diri[rumah]"]').val(form_data[1]);
        if(data.alamat_rumah === data.alamat){
            $('input[name="alamatradio"]').prop('checked', true);
            $('textarea[name="data_diri[alamat_rumah]"]').val(data.alamat_rumah);
        } else {
            $('input[name="alamatradio"]').prop('checked', false);
            $('textarea[name="data_diri[alamat_rumah]"]').val(data.alamat_rumah);

        }
        $('select[name="pekerjaan[jenis]"]').val(data.jenis_pekerjaan);
        $('input[name="pekerjaan[perusahaan]"]').val(data.nama_perusahaan);
        $('input[name="pekerjaan[divisi]"]').val(data.divisi);
        $('input[name="pekerjaan[lama]"]').val(data.lama_bekerja);
        form_data = data.alamat_perusahaan.split('/');

        $('textarea[name="pekerjaan[alamat]"]').val(form_data[0]);
        $('select[name="pekerjaan[provinsi]"]').val(form_data[6]);
        $('select[name="pekerjaan[provinsi]"]').trigger('change');
        $('select[name="pekerjaan[kabupaten]"]').val(form_data[5]);
        $('input[name="pekerjaan[rt]"]').val(form_data[1]+'/'+form_data[2]);
        $('input[name="pekerjaan[kecamatan]"]').val(form_data[4]);
        $('input[name="pekerjaan[kelurahan]"]').val(form_data[3]);
        $('input[name="pekerjaan[kodepos]"]').val(form_data[7]);
        $('input[name="shu[nama]"]').val(data.nama_rekening);
        $('input[name="shu[norek]"]').val(data.nomor_rekening);
        $('input[name="shu[bank]"]').val(data.nama_bank);
        $('input[name="shu[cabang]"]').val(data.cabang);
        $('input[name="shu[cabang]"]').val(data.cabang);
        $('input[name="waris[nama]"]').val(data.nama_ahli_waris);
        $('input[name="waris[hubungan]"]').val(data.hubungan_ahli_waris);
        $('select[name="simpanan[wajib]"]').val(data.simpanan_wajib);
        $('select[name="simpanan[wajib]"]').trigger('change');
        $('input[name="simpanan[sukarela]"]').val(data.simpanan_sukarela);
        $('input[name="simpanan[sukarela]"]').trigger('keyup');

},
    clearForm: () => {

    },
    updateEvent: (id) => {
        $(NasabahServices.ModalForm).modal('show');
        console.log(NasabahServices.Form);
        $(NasabahServices.Form).val('');
        $(NasabahServices.Form).attr('action', NasabahServices.uriUpdate+id);
        NasabahServices.InitData(NasabahServices.uriEdit+id);
    },
    addEvent: () => {
        $(NasabahServices.Form).attr('action', NasabahServices.uriAdd);
        $(NasabahServices.Form+' input select textarea').val('');
        $(NasabahServices.ModalForm).modal('hide');
    },
    closeModal: () => {
        $(NasabahServices.Form).attr('action', NasabahServices.uriAdd);
        $(NasabahServices.Form+' input select textarea').val('');
        $(NasabahServices.ModalForm).modal('hide');
    },
    detailData: () => {
        $(NasabahServices.ModalForm).modal('show');
        console.log(NasabahServices.Form);
        $(NasabahServices.Form + ' input select textarea').val('');
        $(NasabahServices.Form + ' input select textarea').attr('disabled', 'disabled');

        // $(NasabahServices.Form).attr('action', NasabahServices.uriUpdate+id);
        NasabahServices.InitData(NasabahServices.uriEdit+id);  
    }
}
Dropzone.autoDiscover = false;
$(document).ready(function () {
    $('.init-DataTable').each(function () {
        let container = $(this).attr('id');
        let uri = $(this).data('url');
        DatatableServices.setContainer(container);
        DatatableServices.dataUri = uri;
        DatatableServices.initDT();
    })
    $('.initDTOnly').each(function(){
        let container = $(this).attr('id');
        let uri = $(this).data('url');
        DatatableServices.setContainer(container);
        DatatableServices.dataUri = uri;
        DatatableServices.initDTOnly();
    })
    $('.all-checkbox-dt').on('click', function(){
        console.log(DatatableServices.table)
        $(this).toggleClass('select');
        if($(this).hasClass('select')){
            DatatableServices.table.rows().select();
        } else {
            DatatableServices.table.rows().deselect();
        }
    })
    $('.datepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    })
    $('input[type="file"]').on('change', function(){
        let preview = $(this).attr('data-preview');
        console.log(preview);
        let input = this;
        console.log(input);
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
              $(preview).attr('src', e.target.result);
              $(preview).html('<embed src="'+e.target.result+'" type="" style="width: 100%" id="foto_ahli_waris" class="mt-2 p-2 file-border">');
            }
            
            reader.readAsDataURL(input.files[0]); // convert to base64 string
          } 
    })
    $('.news-content').trumbowyg({
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em', 'del'],
            ['superscript', 'subscript'],
            ['link'],
            ['insertImage'],
            ['upload'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ]
    });
    $('.select2').select2();
    $('.btn-delete').on('click', function(e){
        e.preventDefault()
        let msg = $(this).attr('data-msg');
        let uri = $(this).attr('href');
        console.log($(this));
        if(confirm(msg)){
            window.location.href = uri;
            
        }
    })
    let LoginUrl = $('body').attr('server-url');
    $('.btn-login-ajax').on('click',function(){
        let form = $(this).attr('data-form');
        let url = $(form).attr('data-url');
        $('input').each(function(index, val){
            if(val.type == 'checkbox'){
                HttpServices.FormData[val.name] = val.checked;
            } else {
                HttpServices.FormData[val.name] = val.value; 
            }
        })
        let postData = HttpServices.PostAjax(url);
        postData = JSON.parse(postData);
        console.log(postData.kode);
        if(postData.kode == 200){
            window.location.href = LoginUrl+'/admin';
        } else {
           let errorMsg = '<div class="alert alert-warning" role="alert">Username atau Password Salah !!!</div>';
           $('#alert-holder').html(errorMsg);
        }
    })
    Dropzone.autoDiscover = false;
    var myDropZone = new Dropzone('.produkDrop',{
        addRemoveLinks: true, 
        init: function(){
            this.on('success', function(file, resp){
                let parse = JSON.parse(resp);
                let data = parse.data;
                let current = $('#attch_list').val();
                if(current == ''){
                    $('#attch_list').val(data.id_upload);
                } else {
                    $('#attch_list').val(current + ',' + data.id_upload);
                    console.log($('#attch_list').val());

                }
            })
            this.on('addedfile', function(file){
                var removeButton = Dropzone.createElement("<button data-dz-remove " +
                "class='del_thumbnail btn btn-default'><span class='glyphicon glyphicon-trash'></span></button>");

                removeButton.addEventListener("click", function (e) {

                })
            })
            let DropZone = this;
            let element = DropZone.element;
            let url_data = element.getAttribute('data-get');
            let id = element.getAttribute('session_token');
            // if(url_data !== 'undefined'){
                $.get(url_data, function(data) {
                    data = JSON.parse(data);
                    $.each(data.data, function(key,value){
                        var mockFile = { name: value.nama, size: value.size, id: value.id, files: value.file };
                        DropZone.options.addedfile.call(DropZone, mockFile);
                        DropZone.emit("complete", mockFile);
                        DropZone.options.thumbnail.call(DropZone, mockFile, "http://localhost:8000/resources/Produk/"+id+"/"+value.file);
                         
                    });
                })
            // }
        },
        removedfile: function(file) {
            let DropZone = this;
            let element = DropZone.element;
            let url_data = element.getAttribute('data-delete');
            x = confirm('Do you want to delete?');
            if(!x)  return false;
            $.ajax({
                url: url_data,
                method: 'POST',
                data: {
                    name : file.files,
                    id : file.id
                },
                dataType: 'text/html',
                success: function(response){
                    window.location.reload();
                }
            })
        }
     })     
})
$(document).ready(function(){
    $('#alamat_radio').on('change', function () {
        let alamat = $('textarea#diri_alamat').val();
        let rt = $('input#diri_rt').val();
        let kelurahan = $('input#diri_kelurahan').val();
        let kecamatan = $('input#diri_kecamatan').val();
        let kabupaten = $('select#kabupaten1').val();
        let provinsi = $('select#provinsi').val();
        let kodepos = $('input#diri_kodepos').val();
        let alamat_rumah = alamat + ',' + rt + ',' + kelurahan + ',' + kecamatan + ',' + kabupaten + ',' + provinsi + ',' + kodepos;
        if($('textarea#alamat_rumah').html() == ''){
            $('textarea#alamat_rumah').html(alamat_rumah);
        } else {
            $('textarea#alamat_rumah').html('');
        }
    })
    $('#pekerjaan').on('change', function () {
        let val = $(this).val();
        if (val == 'Lainnya') {
            $('#detail_pekerjaan').removeClass('hide');
        } else {
            $('#detail_pekerjaan').addClass("hide");
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
            $('input[name="pekerjaan[alamat]"]').addClass('hide');
            $('input[name="pekerjaan[provinsi]"]').addClass('hide');
            $('input[name="pekerjaan[kabupaten]"]').addClass('hide');
            $('input[name="pekerjaan[kecamatan]"]').addClass('hide');
            $('input[name="pekerjaan[kelurahan]"]').addClass('hide');
            $('input[name="pekerjaan[rt]"]').addClass('hide');
            $('input[name="pekerjaan[kodepos]"]').addClass('hide');
        } else {
            $('input[name="pekerjaan[perusahaan]"]').removeClass('hide');
            $('input[name="pekerjaan[divisi]"]').removeClass('hide');
            $('input[name="pekerjaan[lama]"]').removeClass('hide');
            $('input[name="pekerjaan[alamat]"]').removeClass('hide');
            $('input[name="pekerjaan[provinsi]"]').removeClass('hide');
            $('input[name="pekerjaan[kabupaten]"]').removeClass('hide');
            $('input[name="pekerjaan[kecamatan]"]').removeClass('hide');
            $('input[name="pekerjaan[kelurahan]"]').removeClass('hide');
            $('input[name="pekerjaan[rt]"]').removeClass('hide');
            $('input[name="pekerjaan[kodepos]"]').removeClass('hide');
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
})
