$('.datepicker').datetimepicker({format: 'yyyy-mm-dd'});
const DatatableServices = {
    dataUri: '',
    data: new Array(),
    setDataUri: (uri) => {
        DatatableServices.dataUri = uri;
    },
    getJSON: (uri) => {
        $.ajax({
            type: 'GET',
            method: 'GET',
            contentType: 'jsonp',
            dataType: 'application/json',
            url: uri,
            success: (resp) => {
                DatatableServices.data.push(resp.array);
            }
        })
    },
    initDT: (container) => {
        if(empty(DatatableServices.data)){
            console.error('Error Data : DatatableServices.data is empty')
        } else {
            $('#'+container).DataTable({"data" : DatatableServices.data});
        }
    }
}
