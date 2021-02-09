
<?php
//koneksi databases

require 'functionmenuartikel.php';
//ambil data
$del = query("SELECT * FROM input");

?>


<div class="container-fluid text-center">
  	<h5>Hasil Pencarian</h5>
     <ul class="list" id="bod">
		
		<?php
		// Include / load file koneksi.php
		include "koneks.php";
		

		// Cek apakah variabel $keyword tersedia
		// Artinya cek apakah user telah mengklik tombol search atau belum
		// variabel $keyword ini berasal dari file search.php,
		// dimana isinya adalah apa yang diinput oleh user pada textbox pencarian
		if(isset($keyword)){ // Jika veriabel $keyword ada (user telah mengklik tombol search)
			$param = '%'.mysqli_real_escape_string($connect, $keyword).'%';
			
			// Buat query untuk menampilkan data siswa berdasarkan NIS / Nama / Jenis Kelamin / Telp / Alamat
			$sql = mysqli_query($connect, "SELECT * FROM input WHERE id LIKE '".$param."' OR link LIKE '".$param."' OR gambar LIKE '".$param."' OR nama LIKE '".$param."'");
		}else{ // Jika user belum mengklik tombol search
			// Buat query untuk menampilkan semua data siswa
			$sql = mysqli_query($connect, "SELECT * FROM input");
		}
		
		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		?>


  <li class="list-item">
			   <div class="list-content">
			 
		<a href="<?php echo $data['link']; ?>"><img class="img" src="gambar/<?php echo $data['gambar']; ?>" width="100" height="100">

</a>


<?php echo $data['nama']; ?>

<button class="button"><span>Baca </span></button></a>  



		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
</div>
</li>
	</ul>
</div>
