<?php
//koneksi databases
include('paginationevent.php');
require 'functionmenuevent.php';
//ambil data
$del = query("SELECT * FROM events");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
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
<style type="text/css">
  #pagination_controls{
    margin-top: 2%;
    margin-bottom: 4%;
  }
</style>
    <link rel="stylesheet" type="text/css" href="efek.css"/>
  <link rel="stylesheet" type="text/css" href="efek1.css"/>
  <script type="text/javascript" src="efek.js"></script>



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


<br><br>
 <div class="breadcrumb-holder">
    <ul class="angled-breadcrumbs">
           <li>
<a href="carievent.php" class="cari">Cari Event</a>\
    </li>
  <li>
<a href="tambahmenuevent.php" class="cari">Tambah Event</a>
    </li>
 
    </ul>
</div>


<div class="container-fluid text-center">

     <ul class="list" id="bod">
 

<?php foreach ($del as $row) : ?>



<?php
      while($row = mysqli_fetch_array($nquery)){
      ?>
   <li class="list-item">
<div class="list-content">
     <td>
          <img src="GambarEvent/<?= $row ["gambarevent"]; ?>" width="100">
     </td>
      <h2 class=""><?= $row ["namaevent"]; ?></h2>
      <a href="<?= $row ["links"]; ?>" > <button class="button"><span>Baca </span></button></a>  

</div>
  </li>




<?php
      }   
    ?>
<?php endforeach; ?>
  
</ul>

  <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
  </div>    
      
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

</body>
</html>



