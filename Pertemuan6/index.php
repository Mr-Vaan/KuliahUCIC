<select >
  <option value="">
    <?php for($x=1; $x<=31; $x++) {
      echo "<option>$x</option>";
    } ?>
  </option>
</select>

<br>
<br>

<?php 
for ($i=10; $i >= 1 ; $i--) { 
  # code...
  echo "ini perulangan : $i <br>";
}
?>

<br>
<br>

<?php 
for ($angka=0; $angka <= 20 ; $angka++) { 
  # code...
  if ($angka%2==1) {
    echo "$angka<br>";
    # code...
  }
}

?>
















