<?php



$komen = mysqli_connect("localhost","root","","komentar");


function query($query){
      global $komen;

	$result = mysqli_query($komen,$query);

	$rows=[];

	while ( $row = mysqli_fetch_assoc($result) ) {
	$rows[]=$row;

	}
return $rows;
}







function tambah($data){
		global $komen;


          $link=htmlspecialchars($data["linkk"]);
     $gambar=htmlspecialchars($data["gambartukar"]);
    $nama=htmlspecialchars($data["namatukar"]);
   
	

		$query="INSERT INTO tukar VALUES ('','$link','$gambar','$nama')";
	

	
	mysqli_query($komen,$query);


return mysqli_affected_rows($komen);
}
?>








