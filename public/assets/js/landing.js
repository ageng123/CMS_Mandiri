$(document).ready(function(){
    let wajib = 15000;
    let sukarela = 0;
    var form = $("#step-form");
        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
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
   $('.getProvinsi').each(function(){
       let data = KotaIndonesia.getProvinsi();
       let container = '#'+$(this).attr('id');
       let content ='';
       data.map(function(index){
           content = content + '<option value="'+index.nama+'" data-idProvinsi="'+ index.id +'">'+ index.nama +'</option>'
       })
       $(container).html(content);
   })
   $('.getProvinsi').on('change', function(){
       let conten = '#' + $(this).attr('id');
       let option = $(conten+ ' option:selected').attr('data-idProvinsi');
       let data = KotaIndonesia.getKota(option);
       let container = $(this).attr('data-kabupatenlist');
       let kabupatenlist = '';
       data.map(function(index){
        kabupatenlist = kabupatenlist + '<option value="'+index.nama+'">'+index.nama+'</option>'
       })
       $(container).html(kabupatenlist);
   })
   $('input[name=member]').on('change', function(){
       let data = $(this).val();
       if(data === 'belum'){
           $('#client_id').addClass('hide');
       } else {
            $('#client_id').removeClass('hide');
       }
   })
   $('input[name=punya_ktp]').on('change', function(){
    let data = $(this).val();
    if(data === 'belum'){
        $('#ktp').addClass('hide');
        $('#ktp_ahli').removeClass('hide');
        $('#kk').removeClass('hide');
    } else {
         $('#ktp').removeClass('hide');
         $('#ktp_ahli').addClass('hide');
        $('#kk').addClass('hide');
    }
})
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
