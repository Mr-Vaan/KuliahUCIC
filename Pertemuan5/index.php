<!-- TUGAS TERAKHIR PEMROGRAMAN INTERNET - MUHAMMAD IVAN CHRIANA - TEKNIK INFORMATIKA 3.1-->
<!-- SOAL NOMOR 1 -->
<!-- OPERATOR PERBANDINGAN -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Pertemuan Ke 5</title>
</head>
<body>
  <h3>SOAL NOMOR KE 1</h3>
</body>
</html>
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$language = 'French';
$greeting = 'Selamat Pagi';

if($language == 'English') {
    $greeting = 'Good Morning!';
} else if($language == 'French') {
    $greeting = 'Bonjour!';
} else if($language == 'Japanese') {
    $greeting = 'Ohayogozaimasu!';
} 

echo "Hasil : $greeting";

// Kenapa Hasilnya Bonjour! ? 
// Karena Seperti diatas, variabel $language berisi negara 'French' dan $greeting berisikan 'Selamat Pagi', 
// kenapa bisa 'Selamat Pagi' berubah menjadi'Bonjour!' ?
// Ya karena kita lihat saja $greeting = 'Bonjour!'; , $greeting = 'Selamat Pagi' berarti sama dengan 'Bonjour!'.
?>
<br>
<br>
<!-- OPERATOR LOGIKA -->
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$a = 10;
$b = 12;

if ($a < 15 || $b > 10) {
  # code...
  echo "Tampilkan : ";
  var_dump($a < 15 || $b == 10);
} else {
  # code...
  $nama = $a && $b;
  echo $nama;
}
// Jika $a = 10 lebih kecil dari 15 maka tampilkan (true), atau(||) jika $b = 12 lebih dari 10 maka tampilkan (true);
?>
<br>
<br>
<!-- OPERATOR INCREMENT -->
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$a = 10;
$a++;

if ($a == 11) {
  # code...
  echo "Tampilkan Operator Increment";
} else {
  echo "Tidak Tampil apa apa";
}
// Jika a = 10 , a++ artinya a ditambah satu, jadi, jika $a sama dengan 11, maka tampilkan "Tampilkan Hallo Semua", Jika $a tidak sama dengan 11 maka kelaur "Tidak Tampil apa apa".
?>
<br>
<br>
<!-- OPERATOR DECREMENT -->
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$a = 10;
$a--;

if ($a == 9) {
  # code...
  echo "Tampilkan Operator Decrement";
} else {
  echo "Tidak Tampil apa apa";
}
// Jika $a = 10  maka $a-- <-(artinya dikurangi satu), masuk ke if, Jika $a == 9 ($a berarti sudah dikurangi satu ) maka masuk ke echo "Tampilkan Operator Decrement"; , Jika bukan maka masuk ke echo "Tidak Tampil apa apa";
?>
<br>
<br>


<!-- OPERATOR ASSIGMENT -->
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$x = 110;
if ($x -= 90) {
  # code...
  echo "Maka Nilainya $x ";
} else {
  echo "Tidak ada nilai";
}

// Jika $x = 110 dikurangi sama dengan 90, maka tampilkan echo "Maka Nilainya $x "; 
?>
<br>
<br>
<!-- OPERATOR STRING -->

<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$kata = '';
$umr = "umur saya";
$umur = 18;
$gabung = $kata && $umur;

if ($gabung == $kata) {
  # code...
  echo "Nama saya Muhammad Ivan Chriana, ";
  echo $umr;
  echo " $umur";
} else {
  # code...
  echo "Tidak ada";
}
?>
<br>
<br>
<!-- OPERATOR KONDISI -->
<?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$orang = "Aulia";
if ($orang == "Aulia") {
  # code...
  echo " Aulia adalah Orang yang mempunyai Sifat Unik";
} elseif ($orang == "Aisyah") {
  echo "Aisyah adalah orang yang penyabar";
} else {
  echo "Error";
}
// Jika input $orang = "Aulia", maka masuk ke kondisi echo " Aulia adalah Sifatnya Unik"; , Jika tidak ada maka langsung keluar dari kondisi echo "Error";
?>













