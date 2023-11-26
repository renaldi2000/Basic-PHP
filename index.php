<?php
$nama_Lengkap = "Muhammad Renaldi"; // Variabel php
$nama = strtoupper("aldi"); // Huruf Kapital
$nama = strtolower("aldi"); // Huruf Kecil
$nama1 = ucwords("aldi"); // Huruf Kapital pertama
$alamat = "jln. Jatipulo";
$umur = 25;
$a = 10;
$b = 3;
$c = $a / $b;
$a++ ; // increment
$b-- ; // Decrement
$name = "aldi"; // String
$pesan = "Selamat Datang"; // String
$n1 = 10; // Boolean
$n2 = 10;
$t = true;
$f = false;
$hasil = $n1 >= $n2; // Perbandingan
$bool = $t && $f; // salah satu ada false jadi false
$bool = $t || $f; // salah satu ada true jadi true
$arr = ["sapi", "kucing", "kerbau"]; // Data Array
$arr[] = "kucing"; // Menambahkan Data array
$arr[4] = "tikus"; // Menambahkan Data array sesuai Index array
$arr[0] = "kelinci"; // Merubah Data array sesuai Index 
$datadiri = [         // Array Asosiatif
    "nama" => "Aldi",
    "umur" => 23,
    "alamat" => "jatipulo",
    "goldarah" => "o",
];
$herbivora = ["kambing", "sapi", "kerbau"]; // Array Multidimensi
$karnivora = ["singa", "macan", "harimau"];
$omnivora = ["buaya", "ular", "tikus"];
$binatang = [
    "herbivora" => $herbivora,
    "karnivora" => $karnivora,
    "omnivora" => $omnivora,
];
$null = ["1", "2"]; // Tipe Data Null
$nilaiAldi = 80; // ifelse
$nilaiAldi1 = 85; // ifelseif
$nilai_tes = 70; // ifbersarang
$nilai_wawancara = 'A'; // ifbersarang
$nilai_a= "A"; // Switch
$warna_baju = "Merah"; // Kondisi Ganda
$ukuran_baju = "XL"; // Kondisi Ganda
$biaya_baju = "50000"; // Kondisi Ganda
$biaya_baju_tambahan = "10000"; // Kondisi Ganda
$nilai_ternary = 80; //Ternary Operator
$warna = ['hijau','biru','kuning','hijau','merah',
          'biru','merah','hijau','kuning','hijau'];
$jumlah_merah = 0; //loop while
$x = 1; // loop do while 
$data_nama = ['aldi','ayu','sintya','henik','umam','rezki'
              ,'riska','arum','tia','sekar','dinar','daniar'];
$data_siswa = [ // Continue
    ['nama' => 'aldi', 'kelas' => '6A'],
    ['nama' => 'sintya', 'kelas' => '6A'],
    ['nama' => 'umam', 'kelas' => '6B'],
    ['nama' => 'henik', 'kelas' => '6C'],
];        
$data_mahasiswa = [ // Data ke Table HTML
    ['nama' => 'aldi', 'umur' => '23', 'alamat' => 'jatipulo'],
    ['nama' => 'sintya', 'umur' => '24', 'alamat' => 'muara karang'],
    ['nama' => 'umam', 'umur' => '25', 'alamat' => 'mangga besar'],
    ['nama' => 'henik', 'umur' => '21', 'alamat' => 'tanah merah'],
]; 
foreach ($data_siswa as $key => $value) {
    if ($value['kelas'] == '6A') 
        continue; // Continue
        echo 'Nama : '.$value['nama']."<br>";
        echo "Kelas : ".$value['kelas']."<br><br>"; 
}      
if ($nilaiAldi >= 80) { // pengkodisian ifelse
    echo "Selamat Anda Lulus, Dengan Nilai : ".$nilaiAldi;
} else {
    echo "Maaf, Anda belum Lulus, Dengan Nilai : ".$nilaiAldi;
}
echo '<br>';
if ($nilaiAldi1 >= 90) { // Pengkondisian ifelseif
    echo "Nilai A";
} elseif ($nilaiAldi1 >= 80) {
    echo "Nilai B";
} elseif ($nilaiAldi1 >= 70) {
    echo "Nilai C";
} elseif ($nilaiAldi1 >= 60) {
    echo "Nilai D";
} else {
    echo "Nilai E";
}
echo '<br>';
if ($nilai_tes >= 60) { // Pengkondisian if bersrang
    echo "Anda lulus tes ";
    if ($nilai_wawancara == "A") {
        echo "Predikat Anda Sangat Memuaskan";
    } else if ($nilai_wawancara == "B") {
        echo "Predikat Anda Memuaskan";
    } else {
        echo "Predikat Anda Cukup";
    }
} else {
    echo "Anda Belum Lulus";
}
echo '<br>';
switch ($nilai_a) {  // Pengkondisian Switch
    case 'A':
        echo "Nilai anda A";
        break;
    case 'B':
        echo "Nilai anda B";
        break;
    case 'C':
        echo "Nilai anda C";
        break;
    case 'D':
        echo "Nilai anda D";
        break;
    default:
        echo "Nilai anda tidak ada";
        break;
}
echo '<br>';
if ($warna_baju == "Merah" && $ukuran_baju == "L") { // Cek Pengkodisian Ganda
    echo "Total Harga : ".($biaya_baju+$biaya_baju_tambahan);
} else {
    echo "Total Harga : ".$biaya_baju;
}
echo "<br>";
if ($warna_baju == "Biru" || $ukuran_baju == "L") { // Cek Pengkodisian Ganda
    echo "Total Harga : ".($biaya_baju+$biaya_baju_tambahan);
} else {
    echo "Total Harga : ".$biaya_baju;
}
echo "<br>";
echo ($nilai_ternary >= 70) ? "Anda Lulus":"Anda Tidak Lulus"; // Pengkodisian Ternary opertator
echo "<br>";
for ($i=0; $i < 10; $i+=2) {  //loop For
   echo " No. $i Selamat <br>" ;
}
echo "<br>";
for ($i=0; $i < 10; $i++) { // loop For Array
    if ($warna[$i] == 'merah') {
        $jumlah_merah++;
    }
}
echo '<br>';
while ($i < 10) { // loop While
    if ($warna[$i] == 'merah') {
        $jumlah_merah++;
    }
    $i++;
}
do // loop Do while
{
    echo "Nomor Antrian yang tersedia: $x <br>";
    $x++;
}
while ($x <= 15);
echo '<br>';
foreach ($warna as $nomor => $nilai) { // Loop Foreach
    echo "Index ke $nomor berisi warna $nilai <br>";
    if ($nilai == 'merah') {
        $jumlah_merah++;
    }
}
echo '<br>';
foreach ($data_nama as $key => $value) {
    echo "Nama : $value <br>";
    if ($value == 'aldi') {
        echo "Aldi ada di index ke - $key <br>";
        break; // stop looping
    }
}
function cetakPesan($nama_ku = 'aldi') { // Function
    if (empty($nama_ku)) {
        echo 'Selamat Datang!';
    } else
        echo "Selamat Datang,! $nama_ku";
}
$nama_ku = 'sintya'; // Skup Variable
cetakPesan();
echo '<br>';

$panjang = 10;
$lebar = 10;
$tinggi = 10;
function persegiPanjang ($panjang, $lebar, $tinggi) {
    $hasil = $panjang * $lebar * $tinggi;
    return $hasil; // Mengembalikan Nilai proses 
}
echo persegiPanjang($panjang, $lebar, $tinggi);
echo '<br>';
function kalilipat(&$angka) { // Referensi Parameter
    $angka = $angka * 2;
}
$x = 5;
echo $x;
kalilipat($x);
echo $x;
kalilipat($x);
echo $x;
kalilipat($x);
echo '<br>';
$message = 'selamat';
file_put_contents("conten.txt", $message);

// Pemanggilan 
echo '<br>';
echo "Jumlah warna merah sebanyak : ".$jumlah_merah; // Perulangan For Array
echo"<br>";
echo "Jumlah warna merah sebanyak : ".$jumlah_merah; // Perulangan while Array
echo $indexnull ?? null."<br>"; // tidak memunculkan error index
echo $binatang["herbivora"][1]."<br>"; // Panggilan Array Multidimensi
echo $binatang["karnivora"][0]."<br>";
echo $binatang["omnivora"][2]."<br>";
echo "nama : ".$datadiri["nama"]."<br>"; // Panggilan Array Asosiatif
echo "umur : ".$datadiri["umur"]."<br>";
echo "alamat : ".$datadiri["alamat"]."<br>";
echo "goldarah : ".$datadiri["goldarah"]."<br>";
echo '<br>';
var_dump($arr); //  Panggilan Array
echo $arr[10] ?? ""; // Pesan Error Tidak ada 
echo '<br>';
echo var_dump($bool); // Boolean
echo var_dump($hasil);
echo '<br>';
echo $name.', '.$pesan; // Gabungan String
echo '<br>';
echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo round($c, 3); // Pembulatan angka dan digit
echo '<br>';
echo $nama;
echo $nama1;
echo $nama_Lengkap; // pemanggilan
echo '<br>'; // spacing
echo $alamat; // pemanggilan
// phpinfo();
$nama = $_GET['nama']; // Method Get
$alamat = $_GET['alamat'];
var_dump($_GET);
?>

<!-- Mix HTML dan PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang. <?php echo $nama; ?></h1>
    <h2>Alamat : <?php echo $alamat; ?></h2>
    <h2>Umur : <?php echo $umur ?></h2> 
    <form action="proses.php" method="post">
       <p> Nama: <input type="text" name="nama"></p>
       <p> Alamat: <input type="text" name="alamat"></p>
    <input type="submit" value="submit">
    <br><br>
    <table border=10> <!--Menampilkan Data ke Table  -->
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
        </tr>
        <?php foreach ($data_mahasiswa as $key => $value): ?>
        <tr>
            <th><?php echo $value['nama'];?></th>
            <th><?php echo $value['umur'];?></th>
            <th><?php echo $value['alamat'];?></th>
        </tr>
        <?php endforeach; ?>
    </table>
</form>
</body>
</html>