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
              },
              dom: 'Bfrtip',
              buttons: [
                {
                    text: '<i class="fa fa-trash"></i> Delete',
                    action: function () {
                        var count = DatatableServices.table.rows('.selected').data();
                        count.each(function(index){
                            console.log(index[0]);
                        })
                    },
                    className: 'btn btn-danger'
                }
            ]
        });
        DatatableServices.table.column(0).visible(false);
    },
    setContainer: (id) => {
        console.log(id);
        DatatableServices.container = '#' + id;
    }
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
})