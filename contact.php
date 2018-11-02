<? ob_start("ob_gzhandler"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kontak Henokhy Siswanto | Official Pages</title>
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
        <section class="titlebar">
            <h1 class="page-title"><span>Kontak </span>saya</h1>
            <div id="particles-js"></div>
        </section>

        <div class="cont">
            <section class="contact col-md-8 offset-md-2 top_90">
                <div class="contact-info text-center">
                    <p>Sidoarjo - Surabaya - Jakarta</p>
                    <a href="hi@gorge.com">henokhysiswanto@gmail.com</a>
                    <p>0822 3634 1986</p>
                </div>
                <div class="contact-form top_90">
                    <form class="row">
                        <div class="col-md-6">
                            <input class="inp" type="text" placeholder="Nama">
                        </div>
                        <div class="col-md-6">
                            <input class="inp" type="text" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea placeholder="Pesan Anda" rows="6" class="col-md-12 form-message"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <input type="submit" value="Kirim" class="site-btn2">
                        </div>
                    </form>
                </div>
            </section>
        </div> <!-- cont end -->
    </div> <!-- wrapper end -->
<?php include("footer.php"); ?>
