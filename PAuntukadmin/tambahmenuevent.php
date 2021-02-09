<?php
//koneksi
require 'functionmenuevent.php';



//pernah di submit apa tidak

if( isset($_POST["submit"])){
//ambil data dari form


//cek
	if (tambah($_POST) > 0 ){
		echo "
       <script> 
       alert('Komentar Berhasil ditambahkan');
       document.location.href='Menuevent.php';
       </script>
		";

	}else{
		echo "
   <script> 
       alert('Komentar gagal ditambahkan');
       document.location.href='Menuevent.php';
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
	<h1>Tambahkan Event</h1>
<ul>

		
			<label for="nama">Tambahkan Link  : </label>
		<input type="text" name="links" placeholder="Masukkan links" id="links" required>
		</ul>
	
		
	<ul>
		
			<label for="gambar">Gambar  : </label>
			<input type="text" name="gambarevent" placeholder="contoh : gambar.jpg" id="gambarevent">
		</ul>

	<ul>

		
			<label for="nama">Judul  : </label>
			<input type="text" name="namaevent" placeholder="Masukkan Nama" id="namaevent" required>
		</ul>
	
		
		<ul>

		<ul>
        <button type="submit" name="submit">Kirim</button>
		
	</ul>


</form>

</body>
</html>