<?php
//koneksi
require 'functionmenubeasiswa.php';



//pernah di submit apa tidak

if( isset($_POST["submit"])){
//ambil data dari form


//cek
	if (tambah($_POST) > 0 ){
		echo "
       <script> 
       alert('Komentar Berhasil ditambahkan');
       document.location.href='Menubeasiswa.php';
       </script>
		";

	}else{
		echo "
   <script> 
       alert('Komentar gagal ditambahkan');
       document.location.href='Menubeasiswa.php';
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
	<h1>Tambahkan Beasiswa</h1>
<ul>

		
			<label for="nama">Tambahkan Link  : </label>
		<input type="text" name="linked" placeholder="Masukkan link" id="linked" required>
		</ul>
	
		
	<ul>
		
			<label for="gambarbeasiswa">Gambar  : </label>
			<input type="text" name="gambarbeasiswa" placeholder="Masukkan Gambar" id="gambarbeasiswa">
		</ul>

	<ul>

		
			<label for="nama">Judul  : </label>
			<input type="text" name="namabeasiswa" placeholder="Masukkan Nama" id="namabeasiswa" required>
		</ul>
	
		
		<ul>

		<ul>
        <button type="submit" name="submit">Kirim</button>
		
	</ul>


</form>

</body>
</html>