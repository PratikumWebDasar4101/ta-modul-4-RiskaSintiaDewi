<?php  

foreach($_REQUEST as $name => $value){
  if (is_array($value)) {
    echo "$name : <br>";

    $items = $value; 
    foreach ($items as $item) {
      echo "  $item <br>";
    }
  } else {
    echo "$name: $value <br>";
  }
}

$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file ($nama_tmp,$upload_dir.$nama_file);

?>
<img width='500px' src="upload/<?php echo $nama_file; ?>">
<br><a href="proses_login.php"><input type="submit" name="Logout" value="Logout">
