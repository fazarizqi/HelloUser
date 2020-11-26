<?php

// Latihan - Membuat Opsi Ket. Waktu

// Timezone GMT
date_default_timezone_set("Asia/Bangkok");

//Waktu
$time = date('H:i');

//Ucapan Menggunakan If-Else
{
    if 
        ($time >= '05:00' && $time <= '11:00') {
        $result = 'Pagi!';
    } else if
        ($time >= '11:00' && $time <= '15:00') {
        $result = 'Siang!';
    } else if 
        ($time <= '15:00' && $time <= '21:00') {
        $result = 'Sore!';
    } else if
        ($time <= '21:00' && $time <= '05:00') {
        $result = 'Malam!';
    }
}
echo "Selamat ". $result .", User";


?>

