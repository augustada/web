<?php
include("baglan.php");
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EksiSozlugunuz</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean">
        <div class="container"><a class="navbar-brand" href="index.html" style="font-size: 26px;">EksiSozluk</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1"><i class="fa fa-search" style="height: 16px;font-size: 18px;"></i>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="untitled.php" style="font-size: 18px;">Giris</a></li>
                    <li class="nav-item"><a class="nav-link" href="untitled-1.php" style="font-size: 18px;">Kayit Ol</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <ul class="nav nav-tabs" style="background: #ffffff;text-align: center;">
        <li class="nav-item"><a class="nav-link active" href="#" style="width: 155px;border-width: 0px;"><strong>#gundem</strong></a></li>
        <li class="nav-item"><a class="nav-link active" href="#" style="width: 155px;border-width: 0px;"><strong>#siyasi</strong></a></li>
        <li class="nav-item"><a class="nav-link active" href="#" style="width: 155px;border-width: 0px;"><strong>#spor</strong></a></li>
        <li class="nav-item"></li>
        <li class="nav-item"><a class="nav-link active" href="#" style="width: 155px;border-width: 0px;"><strong>#kadin</strong></a></li>
        <li class="nav-item"><a class="nav-link active" href="#" style="width: 155px;border-width: 0px;"><strong>#iliskiler</strong></a></li>
        <li class="nav-item"><a class="nav-link active" href="#" style="width: 155px;border-width: 0px;"><strong>#muzik</strong></a></li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="width: 155px;color: rgb(73,80,87);font-size: 16px;text-align: center;"><strong>........</strong></a>
            <div class="dropdown-menu"><a class="dropdown-item" href="#">Tarihte bugun</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a><span class="dropdown-item-text">Text Item</span></div>
        </li>
    </ul>
    <div class="login-clean">
        <form method="post" style="font-size: 19px;height: 500px;width: 350px;font-family: ABeeZee, sans-serif;">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-contact-outline" style="color: rgb(75,75,75);"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="kadi" placeholder="User Name" required></div>
            <div class="form-group"><input class="form-control" type="password" name="sifre" placeholder="Password" required></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background: rgb(95,203,92);">Log In</button></div><a class="forgot" href="#" style="font-size: 14px;width: 245px;text-align: justify;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Giremeyis</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Forgot your email or password?</a></form>
    </div>
    <footer id="footerpad" style="height: 130px;font-size: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x fa-inverse"></i></span></a></li>
                    </ul>
                    <p class="copyright text-muted text-center" style="font-family: ABeeZee, sans-serif;">Copyright © Your Company 2020 | Web Design by Designer</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
error_reporting(E_ALL);
if (isset($_POST['kadi'], $_POST['sifre'])) {
	$kadi = trim(filter_input(INPUT_POST, 'kadi', FILTER_SANITIZE_STRING));
    $sifre = trim(filter_input(INPUT_POST, 'sifre', FILTER_SANITIZE_STRING));
    
	$sorgu = $baglan->prepare('SELECT * FROM uye where kadi=:kadi and sifre=:sifre');
	$sorgu->execute(array(
		'kadi' => $kadi,
		'sifre' => $sifre
    ));
    $islem_ok = $sorgu->rowCount() > 0;

	if ($islem_ok == 1) {
        $_SESSION['kadi']=$kadi;
        header("location:index.php");
		}
	 else {
		echo "<span style='color:red'>Please Try Again </span>";
	}
}
?>