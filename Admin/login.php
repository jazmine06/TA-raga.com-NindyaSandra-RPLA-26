<?php
    session_start();
    include "koneksi.php";
?>

<!DOCTYPE doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="resource-type" content="document" />
    <meta name="robots" content="all, index, nofollow" />
    <meta name="googlebot" content="all, index, nofollow" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Muhanz" />
    <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap v4.1.3 (https://getbootstrap.com/) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- MZ Style -->
    <link href="css/mz-style.css" rel="stylesheet">
    <!-- Font -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
    <title>Login Admin</title>
</head>

<body>
    
    <div class="container">
        <div class="row justify-content-md-center mx-auto mt-12">
            <div class="col-sm-8">
                <div class="row border-box">
                    <div class="col-md-6 p-0">
                        <img src="img/mosting-login.png" class="img-fluid">
                    </div>
                    <div class="col-md-6  p-0">
                        <div class="card c-login">
                            <div class="card-header">
                               
                                <div style="display: block; margin-top: 150px">
                                    <h5>Masuk Ke Halaman Admin. </h5>
                                </div>
                            </div>
                            <div class="box-tool">
                                <h4 class="ti-user"></h4>
                            </div>
                            <div class="card-body">
                                <form method="post">
                                    <div class="input-group mb-3 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text group-login-text"><i class="ti-email"></i></span>
                                        </div>
                                        <input type="text" class="form-control group-login-input" placeholder="email" name="email">
                                    </div>
                                    <div class="input-group mb-3 ">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text group-login-text"><i class="ti-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control group-login-input" placeholder="Kata sandi" name="password" id="">
                                    </div>
                                   
                                    <button type="submit" class="btn btn-primary float-right" name="submit"> Masuk <i class="ti-angle-double-right" style="font-size: 12px;"></i></button>
                                </form>
                                <?php
                                if(isset($_POST['submit'])) {
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $qry = mysqli_query($koneksi,"SELECT * FROM tbl_login WHERE email = '$email' AND password = md5('$password')");
                                    $cek = mysqli_num_rows($qry);
                                    if ($cek==1) {
                                        $_SESSION['admin@gmail.com']=$email;
                                        header ("location:index.php");
                                        exit;
                                    }
                                    else{
                                        echo "Maaf email dan password anda salah";
                                    }

                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
