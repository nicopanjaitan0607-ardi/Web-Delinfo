<?php



$komen = mysqli_connect("localhost","root","","komentar");


function query($query){
      global $komen;

	$result = mysqli_query($komen,$query);

	$rows=[];
// mysqli_fetch_assoc berfungsi mengambil nilai si $result
	while ( $row = mysqli_fetch_assoc($result) ) {
	$rows[]=$row;

	}
return $rows;
}







function tambah($data){
		global $komen;


          $link=htmlspecialchars($data["link"]);
     $gambar=htmlspecialchars($data["gambar"]);
    $nama=htmlspecialchars($data["nama"]);
   
	

		$query="INSERT INTO input VALUES ('','$link','$gambar','$nama')";
	

	
	mysqli_query($komen,$query);


return mysqli_affected_rows($komen);
}
?>








