<?php
require_once "class_persegipanjang.php";
$persegi1 = new Persegipanjang(10,5);
$persegi2 = new Persegipanjang(20,15);
echo "Luas Persegi Panjang I ".$persegi1->getLuas();
echo "<br>Luas Persegi Panjang II ".$persegi2->getLuas();
echo "<br>Keliling Persegi Panjang I ".$persegi1->getKeliling();
echo "<br>Keliling Persegi Panjang II ".$persegi2->getKeliling();
?>