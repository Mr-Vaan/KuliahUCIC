<!-- TUGAS TERAKHIR PEMROGRAMAN INTERNET - MUHAMMAD IVAN CHRIANA - TEKNIK INFORMATIKA 3.1-->
<!-- SOAL NOMOR 2 -->
<!-- Kalo Ada Error, Untuk Mencobanya, Harus Klik Submit Terlebih dahulu -->
<!-- Kalo gaada Brrti tinggal masukkan Inputan -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Pertemuan Ke 5</title>
</head>

<body>
  <fieldset>
    <legend>SOAL KE DUA</legend>
    <form method="post">
      <label>Masukkan Nomor KTP :</label>
      <input type="number" name="ktp" placeholder="0"><p></p>
      <label>Masukkan Nama Nasabah :</label>
      <input type="letter" name="nasabah"><p></p>
      <label>Masukkan Jenis Rekening :</label>
      <select name="jenis">
        <option value="Pelajar">Pelajar</option>
        <option value="TabunganBiasa">Tabungan Biasa</option>
        <option value="UMKM">UMKM</option>
      </select>
      <br>
      <br>
      <input type="submit" name="submit" id="submit" value="Submit">
      
    </form>  
<?php
error_reporting(E_ALL || E_ERROR || E_WARNING);
  $nmr_ktp = $_POST['ktp'];
  $nm_nasabah = $_POST['nasabah'];
  $jns_rekening = $_POST['jenis'];
if($jns_rekening == 'Pelajar') {
  # code...
  $rekening = 'Pelajar';
  $setor = 100000;
  $bunga = '2.5%';
} elseif ($jns_rekening == 'TabunganBiasa' ) {
  # code...
  $rekening = 'Tabungan Biasa';
  $setor = 200000;
  $bunga = '5%';
} elseif ($jns_rekening == 'UMKM') {
  # code...
  $rekening = 'UMKM';
  $setor = 500000;
  $bunga = '10%';
}
?>
<br>
<?php
echo "Nomor KTP : $nmr_ktp <br>";
echo "Nama Nasabah : $nm_nasabah <br>";
echo "Jenis Rekening : $jns_rekening <br>";
echo "Minimal Setoran : $setor <br>";
echo "Bunga Perbulan : $bunga <br>";
?>
</fieldset>
</body>
</html>













