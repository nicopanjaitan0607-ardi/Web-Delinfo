<?php
//koneksi databases

	require 'koneksevent.php';
//ambil data



?>
<?php
//koneksi databases

require 'functionmenuevent.php';
//ambil data
$del = query("SELECT * FROM events");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="beranda.css">
    <link rel="stylesheet" href="breadcumbs.css">
    <link rel="stylesheet" type="text/css" href="semua.css">
  <script src="beranda.js"></script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cari Artikel</title>

		    <link rel="stylesheet" type="text/css" href="efek.css"/>
  <link rel="stylesheet" type="text/css" href="efek1.css"/>
  <script type="text/javascript" src="efek.js"></script>



		<style>
		.align-middle{
			vertical-align: middle !important;
		}
		img{
			height: 100%;
		}
		#bot{
			margin-top: 10%;
			margin-bottom: 15%;

		}
		.bit{
			margin-top: 3%;
		}
	
		</style>
	</head>
<body id="myPage" class="welcome">
	  <span id="splash-overlay" class="splash"></span>
  <span id="welcome" class="z-depth-4"></span>

  <header class="navbar-fixed">
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   <a class="navbar-brand" href="Beranda.php">DelInfo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Beranda.php">BERANDA</a></li>
         <li><a href="SejarahDel.html">DEL</a></li>
        <li><a href="Menuartikel.php">ARTIKEL</a></li>
        <li><a href="Menuevent.php">EVENT</a></li>
         <li>
        <div class="dropdown">
          <button class="dropbtn">INFO</button>
          <div class="dropdown-content">
            <a href="Menubeasiswa.php">BEASISWA</a>
            <a href="Menutukar.php">PERTUKARAN MAHASISWA</a>
            <a href="Menumagang.php">MAGANG MAHASISWA</a>
          </div>
        </div></li>

        <li><a href="forum.php">FORUM</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>

	
			<!--
			-- Buat sebuah div dengan class row
			-- class row ini berfungsi untuk membagi-bagi layar
			-- di dalam bootstrap, 1 layar penuh (dari kiri ke kanan) dibagi menjadi 12 bagian / Kolom
			-- Atau lebih tepatnya sering disebut dengan GRID
			-- col-xs-12 artinya jika ukuran layar < 768px, maka gunakan 12 kolom
			-- col-sm-6 artinya jika ukuran layar >= 768px, maka gunakan 6 kolom
			-- Untuk lebih jelasnya soal Grid, silahkan buka link ini : http://viid.me/qb4V8P
			-->

<center><b><h1>Cari Event</h1></b></center>

			<div class="bit">
				<div class="col-xs-12 col-sm-6">
					<!--
					-- Input Group adalah salah satu komponen yang disediakan bootstrap
					-- Untuk lebih jelasnya soal Input Group, silahkan buka link ini : http://viid.me/qb4Mup
					-->
					<div class="input-group">
						<!-- Buat sebuah textbox dan beri id keyword -->
						<input type="text" class="form-control" placeholder="Pencarian..." id="keyword">
						
						<span class="input-group-btn">
							<!-- Buat sebuah tombol search dan beri id btn-search -->
							<button class="btn btn-primary" type="button" id="btn-search">SEARCH</button>
							<a href="" class="btn btn-warning">RESET</a>
						</span>
					</div>
				</div>
			</div>
			<br>
			

<div class="container-fluid text-center" id="bot">

    







   
         
			<div id="view"></div>
 






     
      
</div>




<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><span class="glyphicon glyphicon-copyright-mark"></span>  <a href="https://twitter.com/GaelleTjat" data-toggle="tooltip" title="My Twitter account">DelInfo </a> - Institue Teknologi Del</p> 
</footer>

			  </header>

  <main class="valign-wrapper">
		<!-- Load File jquery.min.js yang ada difolder js -->
		<script src="js/jquery.min.js"></script>
		
		<!-- Load File bootstrap.min.js yang ada difolder js -->
		<script src="js/bootstrap.min.js"></script>
		
		<!-- Load file ajax.js yang ada di folder js -->
		<script src="js/ajaxevent.js"></script>

	</body>
</html>

