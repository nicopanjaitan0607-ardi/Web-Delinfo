<?php
//session start = memulai session


session_start();
//jika session(blum terdaftar) maka akan dikeluarkan otomatis ke login
if(!isset($_SESSION["user"])) header("Location: login.php");