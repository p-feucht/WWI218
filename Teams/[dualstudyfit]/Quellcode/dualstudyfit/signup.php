<?php


$pdo = new PDO('mysql:host=localhost;dbname=dualstudyfit_DATA-BASE', 'dualstudyfit_root', 'Zlr8rCNsRfGpvg6X');
?>





<?php

$showFormular = true;



if(isset($_GET['register'])) {
    $error = false;
    $email = $_POST['email'];
    $passwort = $_POST['password1'];
    $passwort2 = $_POST['password2'];
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $geschlecht = $_POST['geschlecht'];
    $geburtsdatum = date('Y-m-d', strtotime($_POST['geburtsdatum']));

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
$error = true;
}
if(strlen($passwort) == 0) {
echo 'Bitte ein Passwort angeben<br>';
$error = true;
}
if($passwort != $passwort2) {
echo 'Die Passwörter müssen übereinstimmen<br>';
$error = true;
}

//Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
if(!$error) {
$statement = $pdo->prepare("SELECT * FROM Benutzer WHERE Email = :email");
$result = $statement->execute(array('email' => $email));
$user = $statement->fetch();

if($user !== false) {
echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
$error = true;
}
}

//Keine Fehler, wir können den Nutzer registrieren
if(!$error) {
$passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);

$statement = $pdo->prepare("INSERT INTO Benutzer (Email, Passwort, Vorname, Nachname, Geschlecht, GebDatum ) VALUES (:email, :passwort, :vorname, :nachname, :geschlecht, :gebdatum)");
$result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'vorname' => $vorname, 'nachname' => $nachname, 'geschlecht' => $geschlecht, 'gebdatum' => $geburtsdatum));

if($result) {
    echo 'Du wurdest erfolgreich registriert.   <a href="login.php">Zum Login</a>';
$showFormular = false;
} else {
echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
}
}
}



if($showFormular) {
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>dualstudyfit</title>
        <meta name="author" content="dual study fit">
        <meta property="og:image" content="assets/img/dualstudyfit_logo.png">
        <meta name="keywords" content="dual, study, fit, dual study fit, Duales, Studium, Duales Studium, allocator, dual study allocator, dual studieren, studieren, Partnerhochschule, Partnerunternehmen, Beruf, Karriere, Ausbildung, Praxis, Theorie">
        <meta name="description" content="dual study fit informiert ¸ber das Duale Studium und bietet die Möglichkeit, automatisiert ein Studium anhand eigener Präferenzen, zugewiesen zu bekommen. ">
        <meta property="og:type" content="website">
        <?php

        if($showFormular == false) { ?>
            <meta http-equiv="refresh" content="2; URL=http://dualstudyfit.bplaced.net/login.php">
        <?php } ?>
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



    <section>
        <div class="top-login">
            <h1 data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="login-header">Create your profile.</h1>





            <form action="?register=1" method="post">
                <div class="form-row" data-aos="fade-right" data-aos-duration="500" data-aos-once="true">
                    <div class="col-6">
                        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"><input class="border rounded form-control form-control-lg" type="text" name="vorname" style="width: 300px;height: 50px;" placeholder="Vorname" required=""></div>
                    </div>
                    <div class="col-6 col-nachname">
                        <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"><input class="border rounded form-control form-control-lg" type="text" name="nachname" style="width: 300px;height: 50px;" placeholder="Nachname" required=""></div>
                    </div>
                </div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <div class="form-row geschlecht">
                        <div class="col-3"><label class="col-form-label geschlecht">Geschlecht:</label></div>
                        <div class="col-3">
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" style="height: 22px;" name="geschlecht" value='maennlich' ><label class="form-check-label geschlecht" for="formCheck-1">&nbsp;Männlich</label></div>
                        </div>
                        <div class="col-3">
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" style="height: 22px;" name="geschlecht" value='weiblich' ><label class="form-check-label geschlecht" for="formCheck-2">&nbsp;Weiblich</label></div>
                        </div>
                        <div class="col-3">
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" style="height: 22px;" name="geschlecht" value='divers'><label  class="form-check-label geschlecht" for="formCheck-3">&nbsp;Divers</label></div>
                        </div>
                    </div>
                </div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <div class="form-row">
                        <div class="col-4"><label class="col-form-label gebdat">Geburtsdatum:</label></div>
                        <div class="col-8 gebdat"><input class="border rounded form-control form-control-lg" type="date" name="geburtsdatum" required="" min="1900-01-01" style="color: #808080;width: 300px;height: 50px;"></div>
                    </div>
                </div>
                <hr>
                <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><input class="border rounded-0 form-control form-control-lg" type="email" name="email" placeholder="Email" required="" style="width: 300px;height: 50px;"></div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><input class="border rounded form-control form-control-lg" type="password" name="password1" placeholder="Password" required="" style="font-size: 15;width: 300px;height: 50px;"></div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="500"
                     data-aos-once="true"><input class="border rounded form-control form-control-lg" type="password" name="password2" minlength="8" placeholder="Password Wiederholung" required="" style="font-size: 15;width: 300px;height: 50px;"></div>
                <hr>
                <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-once="true">
                    <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4" required=""><label class="form-check-label nutzung" for="formCheck-4"> Ich habe die Nutzungsbedingungen gelesen und akzeptiere diese</label></div>
                </div>
                <div class="form-group but-login" data-aos="fade-left" data-aos-duration="500" data-aos-once="true"><button class="btn btn-outline-primary btn-block login" type="submit" style="width: 300px;height: 50px;font-size: 20px;">Sign Up</button></div>
            </form>





        </div>
    </section>
    <?php include ("footer.php"); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    </body>

    </html>

<?php
}

else { ?>

    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dualstudyfit</title>
    <meta name="author" content="dual study fit">
    <meta property="og:image" content="assets/img/dualstudyfit_logo.png">
    <meta name="keywords" content="dual, study, fit, dual study fit, Duales, Studium, Duales Studium, allocator, dual study allocator, dual studieren, studieren, Partnerhochschule, Partnerunternehmen, Beruf, Karriere, Ausbildung, Praxis, Theorie">
    <meta name="description" content="dual study fit informiert ¸ber das Duale Studium und bietet die Möglichkeit, automatisiert ein Studium anhand eigener Präferenzen, zugewiesen zu bekommen. ">
    <meta property="og:type" content="website">
   <?php

   if($showFormular == false) { ?>
       <meta http-equiv="refresh" content="3; URL=http://dualstudyfit.bplaced.net/login.php">
   <?php } ?>
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

}//Ende von if($showFormular)
?>

