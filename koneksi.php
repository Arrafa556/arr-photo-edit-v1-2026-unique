<?php
// operasi aritmatika di php 
$variable1 = 10;
$variable2 = 5;
$variable3 = 20;
$variable4 = 15;
$variable5 = 3;
$variable6 = 4;
$variable7 = 20;
$variable8 = 4;
$variable11 = 10;
$variable12 = 3;
$variable13 = 2;
$variable14 = 3;
$variable15 = 16;

$jumlah = $variable1 + $variable2;
$kurang = $variable3 - $variable4;
$kali = $variable5 * $variable6;
$bagi = $variable7 / $variable8;
$modulo = $variable11 % $variable12;
$pangkat = $variable13 ** $variable14;
$akar = sqrt($variable15);

echo "jumlah: " . $jumlah . "<br>";
echo " kurang: " . $kurang . "<br>";
echo "kali: " . $kali . "<br>";
echo "bagi: " . $bagi . "<br>";
echo "modulo: " . $modulo . "<br>";
echo "pangkat: " . $pangkat . "<br>";
echo "akar: " . $akar . "<br>";

$name = "Arrafa";
$soal = "Aritmatika";
echo "saya adalah: " .  $name .  "<br>";
echo ".....saya sedang belajar: "  . $soal . "<br>";
?>
<?php
  $name =  "Arrafa";
  $umur =  "16 Tahun";
  $tinggi = "173 cm";
?>
<!DOCTYPE html >
<html>
<head>
    <title>informasi diri</title>
</head>
<body>
    <h1>saya, <?php echo $name; ?></h1>
    <h2>Umur saya, <?php echo $umur; ?></h2>
    <h3>tinggi saya, <?php echo $tinggi; ?></h3>
    <h4>selamat Malam, <?php echo $name; ?> umur saya <?php echo $umur; ?>, tinggi saya <?php echo $tinggi; ?></h4>
</body>
</html>
