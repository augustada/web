<?php session_start(); ob_start();
include("baglan.php");
$kadi=$_SESSION['kadi'];
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

<body style="background: rgb(235,235,235);">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean">
            <div class="container"><a class="navbar-brand" href="index.php" style="font-size: 26px;">EksiSozluk</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1"><i class="fa fa-search" style="height: 16px;font-size: 18px;"></i>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="untitled.php" style="font-size: 18px;"><?php echo ($kadi); ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html" style="font-size: 18px;">Cikis</a></li>
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
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="width: 150px;color: rgb(73,80,87);font-size: 16px;text-align: center;"><strong>........</strong></a>
            <div class="dropdown-menu"><a class="dropdown-item" href="#">Tarihte bugun</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a><span class="dropdown-item-text">Text Item</span></div>
        </li>
    </ul>
    </div>
    <div></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>