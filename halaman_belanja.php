<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="struk_belanja.php" enctype="multipart/form-data">
	<p>========= <b>DATA PEMBELI</b> =========</p><br>
	Nama : <input type="text" name="nama"><br><br>
	No.Telp : <input type="text" name="no" value="+62"><br><br>
	Alamat : <input type="text" name="alamat"><br><br>
	<p>====== <b>BARANG PEMBELIAN</b> ======</p><br>
	Tanggal Pembelian : <input type="date" name="tgl"><br><br>
	Daftar barang belanjaan : <br>
    	<label> <input type="checkbox" name="Belanja[]" value="Novel" /> Novel <br></label>
    	<label> <input type="checkbox" name="Belanja[]" value="Baju" /> Baju <br></label>
    	<label> <input type="checkbox" name="Belanja[]" value="Rok" /> Rok <br></label>
    	<label> <input type="checkbox" name="Belanja[]" value="Kerudung" /> Kerudung <br></label>
    	<label> <input type="checkbox" name="Belanja[]" value="Elektronik" /> Elektronik <br><br></label>
    Jenis Pengiriman : <br>
    	<label> <input type="radio" name="jenis" value="1">JNE<br></label>
    	<label> <input type="radio" name="jenis" value="2">Tiki<br></label>
    	<label> <input type="radio" name="jenis" value="3">JNT<br><br></label>
    	<label> <input type="submit" name="Kirim" value="Kirim"></label>
    </form>
</body>
</html>
