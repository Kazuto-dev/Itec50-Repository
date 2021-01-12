<?php
include('connect.php');
session_start();
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CloudStorage</title>
    <meta property="og:type" content="website">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-Calendar.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
</head>

<body>
    <section id="hero" style="width: 100%;height: 100vh;background: url(&quot;assets/img/game.jpg&quot;);position: fixed;background-size: cover;">
        <div></div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: rgba(255,255,255,0);">
            <div class="container"><a class="navbar-brand" data-bs-hover-animate="pulse" href="untitled.html" style="font-size: 30px;">BSIT -1C Cloud Storage</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="font-size: 25px;margin: -27px;padding: 13px;color: rgb(153,142,142);">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active" data-bs-hover-animate="jello" href="#" style="color: #bbb4b4;font-family: Acme, sans-serif;">Class Names</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-hover-animate="jello" href="untitled-2.html" style="color: #bbb4b4;font-family: Acme, sans-serif;">Activities</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-hover-animate="jello" href="untitled-3.html" style="color: #bbb4b4;font-family: Acme, sans-serif;" target="_blank">Subjects</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <div class="team-grid">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Team </h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet.&nbsp; </p>
            </div>
            <div class="row people">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background: url(&quot;assets/img/Irene.jpg&quot;) no-repeat;background-size: cover;">
                        <div></div>
                        <div data-bs-hover-animate="jello" class="cover" style="background: rgba(31,148,255,0.31);">
                            <h3 class="name">Irene</h3>
                            <p class="title" style="color: #bbb9b9;">Red velvet</p>
                            <div class="social"><a href="https://www.instagram.com/renebaebae/?hl=en"><i class="fa fa-instagram" style="width: 44px;"></i></a></div><a class="btn btn-primary" role="button" href="untitled-3.html">Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(assets/img/Dahyun.jpeg);">
                        <div data-bs-hover-animate="jello" class="cover" style="background: rgba(31,148,255,0.27);">
                            <h3 class="name">Kim Dahyun</h3>
                            <p class="title">TWICE</p>
                            <div class="social"><a href="https://www.instagram.com/twicetagram/"><i class="fa fa-instagram"></i></a></div><a class="btn btn-primary" role="button" href="untitled-2.html">Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(assets/img/IU.jpg);background-position: initial;">
                        <div data-bs-hover-animate="jello" class="cover" style="background: rgba(31,148,255,0.26);">
                            <h3 class="name">IU</h3>
                            <p class="title">Soloist</p>
                            <div class="social"><a href="https://www.instagram.com/dlwlrma/"><i class="fa fa-instagram"></i></a></div><a class="btn btn-primary" role="button" href="untitled-2.html">Info</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box" style="background-image: url(assets/img/wonyoung.jpg);background-position: inherit;">
                        <div data-bs-hover-animate="jello" class="cover" style="background: rgba(31,148,255,0.16);">
                            <h3 class="name">Jang Wonyoung</h3>
                            <p class="title">iz*one</p>
                            <div class="social"><a href="https://www.instagram.com/official_izone/"><i class="fa fa-instagram"></i></a></div><a class="btn btn-primary" role="button" href="untitled-3.html">Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>