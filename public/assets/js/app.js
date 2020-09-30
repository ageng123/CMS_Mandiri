// $('.datepicker').datetimepicker({format: 'yyyy-mm-dd'});
const DatatableServices = {
    dataUri: '',
    container: '',
    initDT: () => {
        let DT = $(DatatableServices.container).DataTable({
            "processing": true,
            "serverSide": false,
            "ajax": {
                "url": DatatableServices.dataUri,
                "type": "POST"
            },
            "columnDefs": [ {
                orderable: false,
                className: 'select-checkbox',
                targets:   0
            } ],
            "select": {
                style:    'multi',
                selector: 'td:first-child'
            },
            "order": [[ 0, 'asc' ]],
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
                        var count = DT.rows('.selected').data();
                        count.each(function(index){
                            console.log(index[0]);
                        })
                    },
                    className: 'btn btn-danger'
                }
            ]
        });
        console.log(DT);
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
})