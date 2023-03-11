<?php
      if (!isset($_SESSION)) 
        {
        session_start();       
        }
  	   if(isset($_SESSION['admin'])){
    	  header('location: dashboard.php?#');
  	  }
?>

<!doctype html>
<html lang="en">
<head>     
        <meta charset="utf-8" />
        <title>LOGIN | RPL - SMKN 1 PADAHERANG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Uji Kompetensi Keahlian Rekayasa Perangkat Lunak 2020 Paket 3" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/sale.ico">
        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="assets/images/sale.ico" alt="" height="20"> 
                                            <span class="logo-txt">Restoran SMK</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Selamat datang di Aplikasi Restoran Kami!</h5>
                                            <p class="text-muted mt-2">Login untuk masuk ke aplikasi</p>
                                        </div>
                                        <form class="mt-4 pt-2" id="flogin">
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text" class="form-control" id="input-username" placeholder="Enter User Name">
                                                <label for="input-username">Username</label>
                                                <div class="form-floating-icon">
                                                   <i data-feather="users"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4 auth-pass-inputgroup">
                                                <input type="password" class="form-control pe-5 input-password" id="password-input" placeholder="Enter Password">
                                                
                                                <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                </button>
                                                <label for="input-password">Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <button id="login" class="btn btn-primary w-100 waves-effect waves-light" type="button">Log In</button>
                                            </div>
                                        </form>
              
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <h6><script>document.write(new Date().getFullYear())</script> © RPL SMKN 1 PADAHERANG</h6> 
                                        <i class=""></i> By Software Engineering</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/pass-addon.init.js"></script>
        <script src="assets/js/pages/feather-icon.init.js"></script>

    </body>

<script>
$("document").ready(function(){
    $("#login").click(function(){
        var user = $("#input-username").val();
        var pass = $(".input-password").val();
        //alert(user + pass);return;
        $.ajax({
        url:"crud/cek_login.php",
        method:"POST",
        data:{user:user, pass:pass},
          success:function(data)
          {
            if (data=="OK"){
                alert("Login Successfully");
                window.location.href="dashboard.php?#";
            }
            if (data=="ERROR"){
                document.getElementById("flogin").reset();
                alert("Login Gagal!");
            }
          }
        });
     });
});
</script>    

</html>
