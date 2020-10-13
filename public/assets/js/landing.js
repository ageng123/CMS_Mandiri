$(document).ready(function(){
    let wajib = 15000;
    let sukarela = 0;
    var form = $("#step-form");
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
        });
    $('#select_wajib').on('change', function(){
        let biaya = $('#wajib').attr('data-biaya');
        let bulan = $(this).val();
        wajib = biaya*bulan
        Pembayaran_Function.renderToForm(wajib, sukarela);
    })
    $('#sukarela').on('keyup', function(){
        let biaya = $(this).val();
        biaya = biaya.replace(/[^,\d]/g, '', '');
        biaya = parseInt(biaya);
        sukarela = parseInt(biaya);
        $(this).val(Pembayaran_Function.formatRupiah(biaya), '');
        Pembayaran_Function.renderToForm(wajib, sukarela);
    })
    $('#pekerjaan').on('change', function(){
        let val = $(this).val();
        if(val == 'Lainnya'){
            $('#detail_pekerjaan').removeClass('hide');
        } else {
            $('#detail_pekerjaan').addClass("hide");
        }
    })
    console.log(HttpServices.getAjax('https://dev.farizdotid.com/api/daerahindonesia/provinsi'));
})
const Pembayaran_Function = {
    renderToForm: function(wajib, sukarela){
        let prefix = "Rp. ";
        let value = wajib + sukarela + 100000;
        $('#biaya-total').html(Pembayaran_Function.formatRupiah(value, prefix));
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
