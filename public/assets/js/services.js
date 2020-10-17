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
        'data_diri[rt]': {
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
        'pekerjaan[rt]': {
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
const Pembayaran_Function = {
    renderToForm: function(wajib, sukarela){
        let prefix = "Rp. ";
        let value = wajib + sukarela + 100000;
        $('#biaya-total').html(Pembayaran_Function.formatRupiah(value, prefix));
        let container = $('#biaya-total').attr('data-bind');
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