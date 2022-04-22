<?php
include_once 'url.php';
include_once 'layout/header.php';
include_once 'layout/sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php

      $page = $_GET['page'];
      $perintah = $_GET['perintah'];

      if ($page == "about") {
        if ($perintah == "") {
          include 'about.php';
        }
      }
      if ($page == "pertemuan 1") {
        if ($perintah == "") {
          include 'tugas_praktikum/praktikum1/project_praktikum_1.';
          echo 'Link tidak valid';
        } elseif ($perintah == 'arraybuah') {
          include 'tugas_praktikum/Pertemuan 1/Array_Buah.php';
        } elseif ($perintah == 'arraydata') {
          include 'tugas_praktikum/Pertemuan 1/Array_data_table.php';
        } elseif ($perintah == 'pertemuan1') {
          include 'tugas_praktikum/Pertemuan 1/Pertemuan_1.php';
        } elseif ($perintah == 'projectpraktikum1') {
          include 'tugas_praktikum/Pertemuan 1/project_praktikum_1.php';
        }
      }

      if ($page == "pertemuan 2") {
        if ($perintah == "") {
          include 'tugas_praktikum/praktikum2/project_praktikum_1.';
          echo 'Link tidak valid';
        } elseif ($perintah == 'formbelanja') {
          include 'tugas_praktikum/Pertemuan 2/form_belanja.php';
        } elseif ($perintah == 'formpercabangan') {
          include 'tugas_praktikum/Pertemuan 2/percabangan.php';
        } elseif ($perintah == 'formnilai') {
          include 'tugas_praktikum/Pertemuan 2/form .php';
        } elseif ($perintah == 'formnilaisiswa') {
          include 'tugas_praktikum/Pertemuan 2/nilai_siswa.php';
        }
      }

      if ($page == "pertemuan 3") {
        if ($perintah == "") {
          include 'tugas_praktikum/praktikum3/project_praktikum_1.';
          echo 'Link tidak valid';
        } elseif ($perintah == 'fungsi') {
          include 'tugas_praktikum/Pertemuan 3/Praktikum 3/function/function.php';
        } elseif ($perintah == 'template') {
          include 'tugas_praktikum/Pertemuan 3/startbootstrap-sb-admin-gh-pages/index.html';
        } elseif ($perintah == 'artikel1') {
          include 'tugas_praktikum/Pertemuan 3/Praktikum 3/view/artikel1.php';
        } elseif ($perintah == 'artikel2') {
          include 'tugas_praktikum/Pertemuan 3/Praktikum 3/view/artikel2.php.php';
        }
      }

      if ($page == "pertemuan 4") {
        if ($perintah == "") {
          include 'tugas_praktikum/praktikum4/project_praktikum_1.';
          echo 'Link tidak valid';
        } elseif ($perintah == 'datalingkaran') {
          include 'tugas_praktikum/Pertemuan 4/Praktikum/data_lingkaran.php';
        } elseif ($perintah == 'datamahasiswa') {
          include 'tugas_praktikum/Pertemuan 4/Praktikum/daftar_mahasiwa.php';
        } elseif ($perintah == 'datanilaimahasiswa') {
          include 'tugas_praktikum/Pertemuan 4/Tugas/form_nilaiujian.php';
        } elseif ($perintah == 'datapersegipanjang') {
          include 'tugas_praktikum/Pertemuan 4/Tugas/data_persegipanjang.php';
        }
      }

      if ($page == "pertemuan 5") {
        if ($perintah == "") {
          include 'tugas_praktikum/praktikum5/project_praktikum_1.';
          echo 'Link tidak valid';
        } elseif ($perintah == 'classfruit') {
          include 'tugas_praktikum/Pertemuan 5/class_fruit.php';
        } elseif ($perintah == 'datadispenser') {
          include 'tugas_praktikum/Pertemuan 5/class_dispenser.php';
        } elseif ($perintah == 'accountbank') {
          include 'tugas_praktikum/Pertemuan 5/class_tampilanBank.php';
        } elseif ($perintah == 'classbuah') {
          include 'tugas_praktikum/Pertemuan 5/class_buah.php';
        }
      }

      if ($page == "pertemuan 6") {
        if ($perintah == "") {
          include 'tugas_praktikum/praktikum6/project_praktikum_1.';
        } elseif ($perintah == 'class_diagram') {
          include 'tugas_praktikum/Project Pemograman Web/class_diagram.php';
        }
      }
      ?>
</div>
  <!-- /.content-wrapper -->
<?php
include_once 'layout/footer.php';
?>