<?php 
    //String Function
    // $nama = "muhammad raden iqbal hafidz fauzi";
    // echo $nama;
    // echo '<br/>';
    // echo strtoupper($nama);
    // echo '<br/>';
    // echo ucwords($nama);
    // echo '<br/>';
    // echo lcfirst($nama);
    // echo '<br/?';
    // echo strtolower($nama);


    //Fungsi void
    // function salam($nama){
    //     echo "<h2>Assalamu'alaikum ".strtoupper($nama)."</h2>";
    // }

    // salam("ali");
    // salam("fadil");
    // salam("");

    
    //Fungsi return value

    // function jumlah($a , $b){
    //     return $a + $b;
    // }
    // echo '2 + 8 = '.jumlah(2,8);


    // Membuat fungsi
    // function perkenalan(){
    //     echo "Assalamu'alaikum, ";
    //     echo "Perkenalkan, nama saya Nyong<br/>";
    //     echo "Senang berkenalan dengan anda<br/>";
    // }

    // // memanggil fungsi yang sudah di buat
    // perkenalan();

    // echo "<hr/";

    // // memanggil lagi
    // perkenalan();



    // membuat fungsi
    // function perkenalan($nama, $salam){
    //     echo $salam.",";
    //     echo " Perkenalakan, nama saya  ".$nama."<br/>";
    //     echo " Senang berkenalan dengan anda<br/>";
    // }

    // // memanggil fungsi yang sudah dibuat
    // perkenalan("Nyong", "Hai");

    // echo "<hr/>";

    // $saya = "Arlan";
    // $ucapanSalam = "Selamat Pagi";

    // // memanggilnya lagi
    // perkenalan($saya, $ucapanSalam);



    // membuat fungsi
    // function perkenalan($nama, $salam="Assalamualaikum"){
    //     echo $salam.",";
    //     echo "Perkenalkan, nama saya ".$nama. "<br/>";
    //     echo "Senang berkenalan dengan anda<br/>";
    // }

    // // memanggil fungsi yang sudah dibuat
    // perkenalan("Jarwo", "Hai");

    // echo "<hr>";

    // $saya = "Bambang";
    // $ucapanSalam = "Selamat pagi";
    // // memanggilnya lagi tanpa mengisi parameter salam
    // perkenalan($saya);



    // function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }

    // echo "Umur saya adalah ". hitungUmur(2003, 2022) ." tahun";



    // function hitungUmur($thn_lahir, $thn_sekarang){
    //     $umur = $thn_sekarang - $thn_lahir;
    //     return $umur;
    // }

    // function perkenalan($nama, $salam="Assalamualaikum"){
    //     echo $salam.",";
    //     echo "Perkenalkan, nama saya ".$nama."<br/>";
    //     // memanggil fungsi lain
    //     echo "Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
    //     echo "Senang berkenalan dengan anda <br/>";
    // }

    // // memanggil fungsi perkenalan
    // perkenalan("Ardianta");



    // function faktorial($angka) {
    //     if ($angka < 2) {
    //         return 1;
    //     } else {
    //         // memanggil dirinya sendiri    
    //         return ($angka * faktorial($angka-1));
    //     }
    // }

    // // memanggil fungsi
    // echo "faktorial 5 adalah " . faktorial(5);



    // Variable local Function
    // function pangkatDua($a){
    //     $a = $a * $a;
    // }

    // $a = 20;
    // echo 'Sebelum Nilai 19 :'.$a;
    // pangkatDua($a);
    // echo '<br/> Sesudah Nilai 21 :'.$a;


    // Variable Global Function
    function pangkatDua($a){
        global $a;
        $a = $a * $a;
    }
    $a = 20;
    echo 'Sebelum Nilai 10 :'.$a;
    pangkatDua($a);
    echo '<br/>Sesudah Nilai 200 :'.$a;
?>