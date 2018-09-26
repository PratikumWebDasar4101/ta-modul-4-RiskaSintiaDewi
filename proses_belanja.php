<?php  
session_start();

$_SESSION['nama'] = isset($_POST["nama"]) ? $_POST["nama"]:$_POST["nama"];  
$_SESSION['no'] = isset($_POST["no"]) ? $_POST["no"]:$_POST["no"];
$_SESSION['alamat'] = isset($_POST["alamat"]) ? $_POST["alamat"]:$_POST["alamat"];  
$_SESSION['tgl'] = isset($_POST["tgl"]) ? $_POST["tgl"]:$_POST["tgl"]; 
$harga=0;

foreach($_REQUEST as $name => $value){
  if (is_array($value)) {
    echo "$name : <br><br>";

    $items = $value; 
    foreach ($items as $item) {
      echo "  $item <br><br>";
    }
  } else {
    echo "$name: $value <br><br>";
  }
}

if($jenis == "JNE")
   $harga = "20000";
if($jenis == "Tiki")
    $harga = "18000";
if($jenis == "JNT")
    $harga = "22000";

echo "Harga : $harga<br>";

$Belanja = '20000';
$jenis = '15000';

echo "Total : $Belanja,$jenis";

?>
