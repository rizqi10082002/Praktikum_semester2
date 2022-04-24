<?php 
    $nama = 'fauzan';
    $umur = 20;
    $berat = 50;

    $nama = 'fayruz';
    echo 'Nama Saya '.$nama.'<br>Umur Saya '.$umur.'<br>Berat Saya '.$berat;

    echo "<br>Nama Saya $nama <br>Umur Saya $umur <br>Berat Saya $berat";

    // variable system 
    echo '<br>Dokumen Root '. $_SERVER["DOCUMENT_ROOT"];

    echo '<br/>';
    // variable konstan 
    // variable yang tidak bisa di ubah nilainya 
    // define ('makanan', 'sushi');
    define('makanan', 'ramen');

    echo makanan;
    echo '<h1 style="color:blue;">'.makanan.'</h1>';
?>