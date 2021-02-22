<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="assets/css/style.css" rel="stylesheet"> 
    <!-- framework bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- datepicker bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <script src="assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/bootstrap-datepicker/locales/bootstrap-datepicker.id.min.js"></script>
    <title>Penakar Hujan</title>
  </head>
  <body>
    
  <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcontent" aria-controls="navcontent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
            <ul class="sidebar-nav" id="navcontent">
                <li class="sidebar-brand">
                    <a>
                        BMKG Soft
                    </a>
                </li>
                <li>
                    <a href="index.php?page=login">Dashboard</a>
                </li>
                <li>
                    <a href="index.php?page=user">User</a>
                </li>
                <li>
                    <a href="index.php?page=input">Input</a>
                </li>
                <li>
                    <a href="index.php?page=data">Laporan</a>
                </li>
                <li>
                    <a href="index.php?page=grafik">Status</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
        
        <!-- /#sidebar-wrapper -->

        <?php
            if(isset($_GET['page']))
            {
                $page = $_GET['page'];
                
                // cek apakah halaman yang diminta itu ada atau tidak??
                if(file_exists($page.".php") == true)
                {

                    // tampilkan halaman sesuai request
                    require_once($page.".php");
                }
                else
                {
                    // tampilkan halaman 404.php
                    require_once("404.php");
                }
            }
            else
            {
                // tampilkan halaman default dari website kita
                require_once("login.php");
            }
        ?>
 

    </div>
    <!-- /#wrapper -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    -->
  </body>
</html>