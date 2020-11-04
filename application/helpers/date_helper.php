<?php 
function indonesiaFullDate($date){
    $tanggal = explode('-', $date);
    $tahun = $tanggal[0];
    $tanggal1 = $tanggal[2];
    $arrBulan = ['','Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    $bulan = $arrBulan[(int)$tanggal[1]];
    return $tanggal1.' '.$bulan.' '.$tahun;
}