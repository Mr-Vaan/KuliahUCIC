<!-- MUHAMMAD IVAN CHRIANA - TEKNIK INFORMATIKA 3.1 - PEMROGRAMAN INTERNET -->
<!-- TUGAS SOAL KE 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Pertemuan Ke 6</title>
</head>
<body>
<center>
  <legend>SOAL KE 1</legend>
  <form method="post" style="width: 450px;">
    <fieldset style="background-color: white;">
        <table style="width: 400px;">
          <tr>
            <td>Nama Anda :</td>
            <td><input type="text" name="nama"><p></p></td>
          </tr>
          <tr>
            <td>Banyak Perulangan :</td>
            <td><input type="number" name="nomor"><p></p></td>
          </tr>
        <br>
        <tr >
          <td><input type="submit" name="submit" id="submit" value="Submit" style="background-color: orange;" ></td>
        </tr>
    </table>
  </fieldset>
</form>
<br>
<?php 
error_reporting(E_ALL ^(E_NOTICE ^E_WARNING));
$nama = $_POST['nama'];
$banyak_nmr = $_POST['nomor'];

$jumlah = 0;
for ($jumlah = 1; $jumlah <= $banyak_nmr ; $jumlah++) { 
  # code...
  echo "$nama<br>";
}

?>  
</center>
</body>
</html>



































