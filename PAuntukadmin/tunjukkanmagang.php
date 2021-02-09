
<?php
//koneksi databases

require 'functionmenumagang.php';
//ambil data
$del = query("SELECT * FROM magang");

?>


<div class="container-fluid text-center">
  	<h5>Hasil Pencarian</h5>
     <ul class="list" id="bod">
		
		<?php
		// Include / load file koneksi.php
		include "koneksmagang.php";
		

		// Cek apakah variabel $keyword tersedia
		// Artinya cek apakah user telah mengklik tombol search atau belum
		// variabel $keyword ini berasal dari file search.php,
		// dimana isinya adalah apa yang dimagang oleh user pada textbox pencarian
		if(isset($keyword)){ // Jika veriabel $keyword ada (user telah mengklik tombol search)
			$param = '%'.mysqli_real_escape_string($connect, $keyword).'%';
			
			// Buat query untuk menampilkan data siswa berdasarkan NIS / namamagang / Jenis Kelamin / Telp / Alamat
			$sql = mysqli_query($connect, "SELECT * FROM magang WHERE id LIKE '".$param."' OR linkz LIKE '".$param."' OR gambarmagang LIKE '".$param."' OR namamagang LIKE '".$param."'");
		}else{ // Jika user belum mengklik tombol search
			// Buat query untuk menampilkan semua data siswa
			$sql = mysqli_query($connect, "SELECT * FROM magang");
		}
		
		$no = 1; // Untuk penomoran tabel, di awal set dengan 1
		while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		?>


  <li class="list-item">
			   <div class="list-content">
			 
		<a href="<?php echo $data['linkz']; ?>"><img src="GambarMagang/<?php echo $data['gambarmagang']; ?>" width="100" height="80">

</a>


<?php echo $data['namamagang']; ?>

<button class="button"><span>Baca </span></button></a>  



		<?php
			$no++; // Tambah 1 setiap kali looping
		}
		?>
</div>
</li>
	</ul>
</div>
