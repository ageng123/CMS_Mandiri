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
    provinsiUrl: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
    kotaJSON: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='

}