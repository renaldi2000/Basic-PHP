<?php
if(!empty($_POST['proses']))  // Parsing Array
{
    print_r($_POST);
}
?>

<form action="" method="post">
Nama: <input type="text" name="nama">
<br><br>
Alamat: <textarea name="alamat" rows="5" col="200"></textarea>
<br><br>
Program Studi :
<select name="program_studi">
  <option value="">-- Pilih Jurusan --</option>
  <option value="SI">Sistem Informasi</option>
  <option value="TI">Teknik Informatika</option>
  <option value="MI">Manajemen Informatika</option>
</select>
<br><br>
<input type="submit" name="proses" value="submit">
</form>

<!-- <html>
<body>
<form action="proses.php" method="post">
    Nama: <input type="text" name="nama">
    Alamat: <input type="text" name="alamat"><br><br>
<input type="submit" value="submit">
</form>
</body>
</html> -->