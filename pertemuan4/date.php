<?php
    // Date
    // untuk menampilkan tanggal dengan format tertentu
    // echo date( "l, d-M-Y" );
    // l untuk hari, d untuk tanggal, m(kcil untuk pake angka, gede pake tulisan) untuk bulan, y(kecil singkat,gede lengkap) tahun

    // time
    // UNIX Timestamp / EPOCH time detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    // echo date ("l d M Y", time()-60*60*24*100);

    // mktime
    // membuat sendiri detik yang sudah berlalu
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l",mktime(0,0,0,3,19,2006));

    // strtotime
    // echo date("l", strtotime("19 mar 2006"));
?>