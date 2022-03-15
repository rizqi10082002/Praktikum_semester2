<?php
// Cara Membuat Fungsi
// function namafungsi(parameter){
// code disini
// }

function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;

}

echo "Hasilnya adalah :" . luaspersegi(10);
echo "<br>";

// Bikin Fungsi Nama 

function nama(){
    echo "Nama saya adalah Fauzan";
}

nama();
echo "<br>";

// Fungsi Menggunakan Parameter
// Parameter Default

function perkenalan($nama = "Fauzan"){
    echo "Perkenalan Nama Saya : " .$nama;

}

perkenalan("Fauzan");


?>