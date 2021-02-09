<?php
//koneksi
require 'functionmenutukar.php';



//pernah di submit apa tidak

if( isset($_POST["submit"])){
//ambil data dari form


//cek
	if (tambah($_POST) > 0 ){
		echo "
       <script> 
       alert('Komentar Berhasil ditambahkan');
       document.location.href='Menutukar.php';
       </script>
		";

	}else{
		echo "
   <script> 
       alert('Komentar gagal ditambahkan');
       document.location.href='Menutukar.php';
       </script>
		";
	}
	}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="index.css">
<head>
	<title>Tambah Artikel</title>
</head>
<body>


<form action="" method="post" class="tmbah">
	<h1>Tambahkan tukar</h1>
<ul>

		
			<label for="nama">Tambahkan Link  : </label>
		<input type="text" name="linkk" placeholder="Masukkan link" id="linkk" required>
		</ul>
	
		
	<ul>
		
			<label for="gambartukar">Gambar  : </label>
			<input type="text" name="gambartukar" placeholder="Masukkan Gambar" id="gambartukar">
		</ul>

	<ul>

		
			<label for="nama">Judul  : </label>
			<input type="text" name="namatukar" placeholder="Masukkan Nama" id="namatukar" required>
		</ul>
	
		
		<ul>

		<ul>
        <button type="submit" name="submit">Kirim</button>
		
	</ul>


</form>

</body>
</html>