// $('.datepicker').datetimepicker({format: 'yyyy-mm-dd'});
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
            }
        })
    },
    setContainer: (id) => {
        console.log(id);
        DatatableServices.container = '#' + id;
    }
}
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
            type: 'POST',
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
              $(preview).html('<embed src="'+e.target.result+'" type="" id="foto_ahli_waris" class="mt-2 p-2 file-border">');
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
    let BaseUri = 'http://localhost:8000'
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
            window.location.href = BaseUri+'/admin';
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
            // if(url_data !== 'undefined'){
                $.get(url_data, function(data) {
                    data = JSON.parse(data);
                    $.each(data.data, function(key,value){
                        var mockFile = { name: value.nama, size: value.size, id: value.id, files: value.file };
                        DropZone.options.addedfile.call(DropZone, mockFile);
                        DropZone.emit("complete", mockFile);
                        DropZone.options.thumbnail.call(DropZone, mockFile, "http://localhost:8000/resources/Produk/4/"+value.file);
                         
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
