<?php ?>


<!DOCTYPE html>
<html>
 <head>
  <title>Forum Diskusi</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://delinfo-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript> <a href="https://disqus.com/?ref_noscript">Delinfo</a></noscript>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><span class="glyphicon glyphicon-copyright-mark"></span>  <a href="https://twitter.com/GaelleTjat" data-toggle="tooltip" title="My Twitter account">DelInfo </a> - January 2019</p> 
</footer>
 
  </header>

  <main class="valign-wrapper">
<script id="dsq-count-scr" src="//delinfo-1.disqus.com/count.js" async></script>
 </body>


</html>
