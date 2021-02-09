<?php
//koneksi
require 'functionmenuartikel.php';



//pernah di submit apa tidak

if( isset($_POST["submit"])){
//ambil data dari form


//cek
	if (tambah($_POST) > 0 ){
		echo "
       <script> 
       alert('Komentar Berhasil ditambahkan');
       document.location.href='Menuartikel.php';
       </script>
		";

	}else{
		echo "
   <script> 
       alert('Komentar gagal ditambahkan');
       document.location.href='Menuartikel.php';
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
	<h1>Tambahkan Artikel</h1>
<ul>

		
			<label for="nama">Tambahkan Link  : </label>
		<input type="text" name="link" placeholder="Masukkan link" id="link" required>
		</ul>
	
		
	<ul>
		
			<label for="gambar">Gambar  : </label>
			<input type="text" name="gambar" placeholder="Masukkan Gambar" id="gambar">
		</ul>

	<ul>

		
			<label for="nama">Judul  : </label>
			<input type="text" name="nama" placeholder="Masukkan Nama" id="nama" required>
		</ul>
	
		
		<ul>

		<ul>
        <button type="submit" name="submit">Kirim</button>
		
	</ul>


</form>

</body>
</html>