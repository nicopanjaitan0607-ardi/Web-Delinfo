<?php
//koneksi databases
include('paginationBeranda.php');
require 'functionmenuartikel.php';
//ambil data
$del = query("SELECT * FROM input");

?>

<html lang="en">
<head>
  <!-- Mix of "The Band" and "Company" themes -->
  <title>DelInfo</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="beranda.css">
    <link rel="stylesheet" type="text/css" href="semua.css">
  <script src="beranda.js"></script>
      <link rel="stylesheet" type="text/css" href="efek.css"/>
  <link rel="stylesheet" type="text/css" href="efek1.css"/>
  <script type="text/javascript" src="efek.js"></script>



</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50"  class="welcome">
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
        <li><a href="forum.php">FORUM</a></li>'
        
      </ul>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://bb.teach.cs.toronto.edu/uploads/default/original/1X/ebc5adc2914d53d9ae9d4a5d4b0d7ef0b3e25ab9.jpg" alt="Function Definition" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Learning coding! </h3>
          <p>as my <a href="http://100daysofx.com/" target="blank">#100DaysOfX</a> challenge</p>
        </div>         
      </div>

      <div class="item">
        <img src="http://cdn2.tstatic.net/tribunnews/foto/bank/images/festival-video-iklan-bukalapak_20160822_110413.jpg" alt="Programmer" width="1200" height="700">
        <div class="carousel-caption">
          <h3>What I am aspiring to be</h3>
          <p>Without coffee! </p>
        </div>      
      </div>
    
      <div class="item">
        <a href="https://www.pexels.com/photo/code-coding-programmer-programming-305279/" target="blank">
          <img src="https://ictframe.com/wp-content/uploads/IT-Event-Nepal.jpg" alt="Keyboard shortcuts" width="1200" height="700"></a>
        <div class="carousel-caption">
          <h3>Close your Eyes - Open your Mind!</h3>
          <p> Click on the image to find more. </p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (Work Section) -->
<div id="work" class="container text-center">
  <main class="prompt">
  <div class="container">
     <h4>Bahasa Pemograman Paling Terkenal</h4>
  
  </div>
</main>

  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>HTML</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="gambar/html.png" class="img-circle person" alt="Random Name" width="250" height="250">
      </a>
      <div id="demo" class="collapse">
        <p>HTML adalah Sebuah markup</p>
        <p> yang digunakan untuk</p>
        <p>mebuat Web</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>CSS</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="gambar/css.png" alt="Random Name" width="250" height="250" class="dem2">
      </a>
      <div id="demo2" class="collapse">
        <p>CSS adalah kode yang digunakan</p>
        <p>untuk memperindah tampilan</p>
        <p>Website</p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>JAVASCRIPT</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="gambar/javascript.png" class="img-circle person" alt="Random Name" width="250" height="250">
      </a>
      <div id="demo3" class="collapse">
        <p>Javascript adalah kode yang digunakan</p>
        <p>untuk membuat web menjadi</p>
        <p>Statis</p>
      </div>
    </div>
  </div>
  <br>
  <br>
      <div class="col-sm-4">
      <p class="text-center"><strong>PYTHON</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="gambar/python.png" class="img-circle person" alt="Random Name" width="250" height="250">
      </a>
      <div id="demo4" class="collapse">
        <p>Python adalah pemograman populer  </p>
        <p>yang cocok untuk </p>
        <p>pemula</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>BAHASA C</strong></p><br>
      <a href="#demo5" data-toggle="collapse">
        <img src="gambar/c.png" class="img-circle person" alt="Random Name" width="250" height="250">
      </a>
      <div id="demo5" class="collapse">
        <p>Bahasa C adalah bahasa pemrograman</p>
        <p> Dibuat pada tahun 1972 oleh</p>
        <p>  Dennis Ritchie </p>
      </div>
    </div>

    <div class="col-sm-4">
      <p class="text-center"><strong>PHP</strong></p><br>
      <a href="#demo6" data-toggle="collapse">
        <img src="gambar/php.png" class="img-circle person" alt="Random Name" width="250" height="250">
      </a>
      <div id="demo6" class="collapse">
        <p> bahasa skrip yang dapat ditanamkan  </p>
        <p>  ke dalam HTML untuk membuat</p>
        <p> website dinamis</p>
      </div>
    </div>
  </div>
</div>
 
 
<!-- Container (About me Section) -->
<div id="artikel" class="bg-1" style="padding: 80px 120px;">
  <hr>

<div class="container-fluid text-center">
<h2>Artikel Terbaru</h2>
<br>
     <ul class="list" id="bod">
 

<?php foreach ($del as $row) : ?>



<?php
      while($row = mysqli_fetch_array($nquery)){
      ?>
   <li class="list-item">
<div class="list-content">
     <td>
          <img src="gambar/<?= $row ["gambar"]; ?>" width="100">
     </td>
      <h2 class=""><?= $row ["nama"]; ?></h2>
      <a href="<?= $row ["link"]; ?>" > <button class="button"><span>Baca </span></button></a>  

</div>
  </li>




<?php
      }   
    ?>
<?php endforeach; ?>
  
</ul>

  </div>    
      
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container text-center">
  
  
  <div class="row">
    <h3>Social </h3>
    <div class="col-sm-4">
      <a href="https://www.facebook.com/ardi.panjaitan.100" target="blank" class="fa fa-facebook"></a>
    </div>
    <div class="col-sm-4">
      <a href="https://instagram.com/" target="blank" class="fa fa-instagram"></a>
    </div>
    <div class="col-sm-4">
      <a href="https://www.youtube.com.org/" target="blank" class="fa fa-youtube"></a>
    </div>
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