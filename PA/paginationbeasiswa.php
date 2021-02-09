<?php

	include("conn.php");
	//setiap kata yang diawali $ adalah variabel

	//mysql_query(......) berfungsi untuk membuat koneksi ke database lalu SELECT mengambil data dari database
	$query=mysqli_query($conn,"SELECT count(id) from `beasiswa`");
	//mysqli_query_row berfungsi untuk menampilkan baris per baris
	$row = mysqli_fetch_row($query);

	$rows = $row[0];
	
	$page_rows = 9;

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = $last;
//iseet digunakan untuk menghindari undifined error dan mengechek variabel apakah variabel sudah dibuat atau tidak
	if(isset($_GET['pn'])){
	//preg_replace untuk mengganti karakter atau membatasinya
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);

	}
//jika pagenum(nomhalaman <1 pagenum=1) maksudnya jika halaman itu <1 atau samadengan 0 itu dihitung 1 yang mana nomor halaman selanjutnya tidak akan ditampilkan(2,3,4,5,dll)
	if ($pagenum < 1) { 
		$pagenum = 1; 
	} 
	//kecuali jika pagenum > lastpagenum ,pagenum-last yang mana maksudnya nanti yang ditampilkan duluan di halaman itu yang paling terakhir ditambahkan
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}
     
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	$nquery=mysqli_query($conn,"SELECT * from `beasiswa` $limit");

	$paginationCtrls = '';

	if($last != 1){
		
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-default">Sebelumnya</a> &nbsp; &nbsp; ';
		
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}

    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-default">Selanjutnya</a> ';
    }
	}

?>