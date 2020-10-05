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
$(document).ready(function () {
    $('.init-DataTable').each(function () {
        let container = $(this).attr('id');
        let uri = $(this).data('url');
        DatatableServices.setContainer(container);
        DatatableServices.dataUri = uri;
        DatatableServices.initDT();
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
    
})