const flashData = $(".flash-data").data('flashdata');

if (flashData) {
    Swal.fire(
        'Berhasil ' + flashData,
        'Penilaian Perilaku Sebagai Atasan',
        'success'
    );

}