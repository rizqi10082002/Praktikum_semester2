<?php

// Array (variable yang bisa menyimpan nilai lebih dari 1 )
$mahasiswa = ['fauzan', 'fayruz', 'dimas'];

// cara print
echo $mahasiswa[0];
echo '<br/>';
echo $mahasiswa[1];

// cara cek variable eror
// var_dump($mahasiswa);

// print array sekaligus
foreach ($mahasiswa as $mhs){
    echo '<h1 style="color:blue;">'.$mhs.'</h1>';
    echo '<br/>';
}

// array multi dimensi
$datadiri = [
    ["nama" => "fauzan", "nim" => "0110221234", "uts" => 100, "uas" => 100],
    ["nama" => "fayruz", "nim" => "0110221235", "uts" => 90, "uas" => 90],
    ["nama" => "dimas", "nim" => "0110221236", "uts" => 80, "uas" => 80]
];

// print array multi dimensi
echo $datadiri[0]["nama"];
echo '<br/>';

// looping array multi dimensi
foreach($datadiri as $dari){
echo $dari["nama"].'<br/>';
}
?>