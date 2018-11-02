<? ob_start("ob_gzhandler"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Henokhy Siswanto | Official Pages</title>
  <meta charset="UTF-8">
  <meta name="description" content="Henokhy Siswanto adalah website resmi saya sendiri. Saya adalah IT Support, Graphics Designer dan Animator.">
  <meta name="author" content="Henokhy Siswanto">
  <meta name="keywords" content="henokhy, personal, portfolio">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("head.php"); ?>
</head>
<body>
    <!-- PRELOADER -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-inner"></div>
        </div>
    </div>

    <!-- HEADER -->
    <header>
        <img src="images/logo.png" alt="">
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- FULL MENU -->
    <?php include("menu.php"); ?>

    <!-- SITE CONTENT -->
    <div class="wrapper">
        <section class="home">
            <div id="particles-js"></div>
            <div class="home-content">
                <h1 class="hero-title">Hello <br><span>I'm Henokhy</span></h1>
                <p class="top_45">Saya Mengerjakan beberapa project<br> seperti <span class="element" data-text1="web interface." data-text2="company profile." data-text3="logo dan desain." data-loop="true" data-backdelay="1000"></span></p>
                <div class="social">
                    <a class="text">social links</a>
                    <div class="line"></div>
                    <a href="https://id.linkedin.com/in/henokhy-siswanto-4b41b2113" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a href="https://plus.google.com/+henokhysiswanto" target="_blank"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/henokhys" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/henokhy" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.twitter.com/hensislinux" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
    </div> <!-- wrapper end -->
<?php include("footer.php"); ?>
