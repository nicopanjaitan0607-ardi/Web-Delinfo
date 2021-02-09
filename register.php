<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Delfo</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />

   <link rel="stylesheet" href="css/daftar.css" />
     <style type="text/css">
        .del{
            width: 22%;
            margin-left: 40%;
            height: 30%;
        }
#button{
    background-color:  #006699;
}
    </style>
</head>
<body class="bg-light" background="img/.png" id="daftar">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6" id="daftar">
<img src="del.png" class="del">
        <p>&larr; <a href="index.php">Home</a>

        <h4>Daftar Ke Delfo.</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST" class="daftar">

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input class="form-control" type="text" name="name" placeholder="Nama kamu" autocomplete="off" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username" autocomplete="off" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Alamat Email" autocomplete="off" />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password"  autocomplete="off"/>
            </div>

            <input type="submit" id="button" class="btn btn-success btn-block" name="register" value="Daftar" />

        </form>
            
        </div>


    </div>
</div>

</body>
</html>