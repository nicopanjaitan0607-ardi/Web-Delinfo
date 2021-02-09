<?php
//koneksi
require 'functionmenumagang.php';



//pernah di submit apa tidak

if( isset($_POST["submit"])){
//ambil data dari form


//cek
	if (tambah($_POST) > 0 ){
		echo "
       <script> 
       alert('Komentar Berhasil ditambahkan');
       document.location.href='Menumagang.php';
       </script>
		";

	}else{
		echo "
   <script> 
       alert('Komentar gagal ditambahkan');
       document.location.href='Menumagang.php';
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
	<h1>Tambahkan Magang</h1>
<ul>

		
			<label for="nama">Tambahkan Link  : </label>
		<input type="text" name="linkz" placeholder="Masukkan link" id="linkz" required>
		</ul>
	
		
	<ul>
		
			<label for="gambarmagang">Gambar  : </label>
			<input type="text" name="gambarmagang" placeholder="Masukkan Gambar" id="gambarmagang">
		</ul>

	<ul>

		
			<label for="nama">Judul  : </label>
			<input type="text" name="namamagang" placeholder="Masukkan Nama" id="namamagang" required>
		</ul>
	
		
		<ul>

		<ul>
        <button type="submit" name="submit">Kirim</button>
		
	</ul>


</form>

</body>
</html>