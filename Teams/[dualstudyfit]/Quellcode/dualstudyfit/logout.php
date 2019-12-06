<?php
session_start();
include ("header.php");
if(!isset($_SESSION['userid'])) {



    die('Bitte zuerst <a href="login.php">einloggen</a>');
}

else {
?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="refresh" content="2; URL=http://dualstudyfit.bplaced.net/index.php">
    <title>dualstudyfit</title>
    <meta name="author" content="dual study fit">
    <meta property="og:image" content="assets/img/dualstudyfit_logo.png">
    <meta name="keywords" content="dual, study, fit, dual study fit, Duales, Studium, Duales Studium, allocator, dual study allocator, dual studieren, studieren, Partnerhochschule, Partnerunternehmen, Beruf, Karriere, Ausbildung, Praxis, Theorie">
    <meta name="description" content="dual study fit informiert ¸ber das Duale Studium und bietet die Möglichkeit, automatisiert ein Studium anhand eigener Präferenzen, zugewiesen zu bekommen. ">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" sizes="1920x1920" href="assets/img/fit_favicon.png">
    <link rel="icon" type="image/png" sizes="1920x1920" href="assets/img/fit_favicon.png">
    <link rel="icon" type="image/png" sizes="1920x1920" href="assets/img/fit_favicon.png">
    <link rel="icon" type="image/png" sizes="1920x1920" href="assets/img/fit_favicon.png">
    <link rel="icon" type="image/png" sizes="1920x1920" href="assets/img/fit_favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Brands.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Corporate-Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
    <link rel="stylesheet" href="assets/css/Form-Select---Full-Date---Month-Day-Year.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark" style="background-color: rgb(174,189,194);padding-top: 4px;padding-bottom: 4px;">
    <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php" style="padding: 0;"><img class="dualstudyfit-logo" src="assets/img/dualstudyfit_logo.png"></a></li>
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link" href="../allocator.php">Dual Study Allocator</a></li>
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link" href="studiengänge.php">Studiengänge</a></li>
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link" href="unternehmen.php">Unternehmen</a></li>
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link" href="hochschulen.php">Hochschulen</a></li>
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link d-xl-flex align-items-xl-center" href="login.php"><i class="fa fa-sign-in" style="font-size: 17px;"></i>&nbsp;Login</a></li>
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link" href="signup.php"><i class="icon-note"></i>&nbsp;Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

    <?php
    session_destroy();
    echo "Logout erfolgreich ". "<a href=\"login.php\">Startseite</a>";
}
?>
