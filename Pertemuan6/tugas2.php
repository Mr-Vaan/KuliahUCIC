<!-- MUHAMMAD IVAN CHRIANA - TEKNIK INFORMATIKA 3.1 - PEMROGRAMAN INTERNET -->
<!-- TUGAS SOAL KE 2 -->
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
    <legend>SOAL KE 2</legend>
    <form method="post" style="width: 450px;">
      <fieldset style="background-color: white;">
        <table style="width: 400px;">
          <tr>
            <td>Pilih Warna Bola :</td>
            <td><select name="options" id="">
                <option value="Hijau">Hijau</option>
                <option value="Ungu">Ungu</option>
                <option value="Orange">Orange</option>
            </select></td>
          </tr>
        <br>
        <tr >
          <td><input type="submit" name="submit" id="submit" value="Submit" style="background-color: orange; " ></td>
        </tr>
    </table>
<?php 
error_reporting(E_ALL ^(E_NOTICE ^E_WARNING));
?>

    <?php 
    if ($_POST['options'] == 'Hijau') {
      $nama = "Warna yang dipilih Hijau :";
      echo "$nama";
      # code...
      for ($ballOne = 1; $ballOne <= 5 ; $ballOne++) { 
        # code...
        echo "<br><img src='./img/bola2.jpg' height='150px'><br><br> ";
      }
    }
    if ($_POST['options'] == 'Ungu') {
      $nama = "Warna yang dipilih Ungu :";
      echo "$nama";
      # code...
      for ($ballOne = 1; $ballOne <= 7 ; $ballOne++) { 
        # code...
        echo "<br><img src='./img/bola2.jpg' height='150px'><br><br> ";
      }
    }
    if ($_POST['options'] == 'Orange') {
      $nama = "Warna yang dipilih Orange :";
      echo "$nama";
      # code...
      for ($ballOne = 1; $ballOne <= 10 ; $ballOne++) { 
        # code...
        echo "<br><img src='./img/bola2.jpg' height='150px'><br><br> ";
      }
    }
    ?>
    </form>
  </fieldset>
  </center>
</body>
</html>