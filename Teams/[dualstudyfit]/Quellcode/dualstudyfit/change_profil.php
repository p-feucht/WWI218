<?php
Session_start();

?>

<?php
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}


$pdo = new PDO('mysql:host=localhost;dbname=dualstudyfit_DATA-BASE', 'dualstudyfit_root', 'Zlr8rCNsRfGpvg6X');
$BenutzerID= $_SESSION['userid'];
$sql = "SELECT * FROM Benutzer WHERE UserId = '$BenutzerID'";
$user = $pdo->query($sql)->fetch();


if(isset($_GET['change'])) {

    $nGeschlecht = $_POST['change_geschlecht'];
    $nVorname = $_POST['change_vorname'];
    $nNachname = $_POST['change_nachname'];
    $nEmail = $_POST['change_email'];
    $nWort = $_POST['change_wort'];
    $nTelnr = $_POST['change_telnr'];
    $nGebdatum = date('Y-m-d', strtotime($_POST['change_gebdatum']));


    $statement = $pdo->prepare("UPDATE Benutzer SET Email = :email , Geschlecht = :geschlecht, Vorname = :vorname, Nachname = :nachname, WOrt = :wort, TelNr = :telnr, GebDatum = :gebdatum WHERE UserID = '$BenutzerID' ");
    $result = $statement->execute(array('email' => $nEmail, 'geschlecht' => $nGeschlecht, 'vorname' => $nVorname, 'nachname' => $nNachname, 'wort' => $nWort, 'telnr'=> $nTelnr, 'gebdatum' => $nGebdatum));
    echo "Daten erfolgreich geändert";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dualstudyfit</title>
    <meta name="author" content="dual study fit">

    <?php
    if(ISSET($result)) { ?>
    <meta http-equiv="refresh" content="1; URL=http://dualstudyfit.bplaced.net/profil.php">
    <?php } ?>

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
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link d-lg-flex align-items-lg-center" href="profil.php"><i class="material-icons" style="font-size: 17px;">person</i>&nbsp;Profil</a></li>
                <li class="nav-item d-lg-flex align-items-lg-center" role="presentation"><a class="nav-link d-xl-flex align-items-xl-center" href="logout.php"><i class="fa fa-sign-out" style="font-size: 17px;"></i>&nbsp;Logout</a></li>
            </ul>
        </div>
    </div>
</nav>


    <section>
        <div class="top-login">
            <h1 data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="login-header">Ändere dein Profil.</h1>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-4"><label class="col-form-label"><strong>Anrede:&nbsp;</strong></label></div>
                        <div class="col"><label class="col-form-label"><?php if ($user['Geschlecht']=='maennlich') {echo 'Herr';} elseif ($user['Geschlecht']=='weiblich') {echo 'Frau';} elseif ($user['Geschlecht']=='divers') {echo 'NULL';} ?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="col-form-label"><strong>Vorname:&nbsp;</strong></label></div>
                        <div class="col"><label class="col-form-label"><?php echo $user['Vorname'] ?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="col-form-label"><strong>Nachname:&nbsp;</strong></label></div>
                        <div class="col"><label class="col-form-label"><?php echo $user['Nachname'] ?>&nbsp;</label></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="col-form-label"><strong>E-Mail:&nbsp;</strong></label></div>
                        <div class="col"><label class="col-form-label"><?php echo $user['Email'] ?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="col-form-label"><strong>Wohnort:&nbsp;</strong></label></div>
                        <div class="col"><label class="col-form-label"><?php echo $user['WOrt'] ?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="col-form-label"><strong>Tel-Nr.:&nbsp;</strong></label></div>
                        <div class="col"><label class="col-form-label"><?php echo $user['TelNr'] ?></label></div>
                    </div>
                    <div class="row">
                        <div class="col-4"><label class="col-form-label"><strong>Geburtsdatum:</strong>&nbsp;</label></div>
                        <div class="col"><label class="col-form-label"><?php echo $user['GebDatum'] ?></label></div>
                    </div>
                </div>

                <form action="?change=1" method="post">
                <div class="col" style="padding-left: 0;padding-right: 0;">
                    <div class="row d-xl-flex align-items-xl-center" style="margin-top: 0px;margin-bottom: 0px;height: 38px;">
                        <div class="col">
                            <div class="form-check"><input class="form-check-input" type="radio" value="maennlich" id="formCheck-1" <?php if ($user['Geschlecht'] == 'maennlich') { ?> checked="checked" <?php } ?> name="change_geschlecht"><label class="form-check-label" for="formCheck-1">&nbsp;Männlich</label></div>
                        </div>
                        <div class="col">
                            <div class="form-check"><input class="form-check-input" type="radio" value="weiblich" id="formCheck-1" <?php if ($user['Geschlecht'] == 'weiblich') { ?> checked="checked" <?php } ?> name="change_geschlecht"><label class="form-check-label" for="formCheck-1">&nbsp;Weiblich</label></div>
                        </div>
                        <div class="col">
                            <div class="form-check"><input class="form-check-input" type="radio"  value="divers" id="formCheck-1" <?php if ($user['Geschlecht'] == 'divers') { ?> checked="checked" <?php } ?> name="change_geschlecht"><label class="form-check-label" for="formCheck-1">&nbsp;Divers</label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-xl-flex align-items-xl-center" style="height: 38px;"><input class="border rounded" type="text" name="change_vorname" value="<?php echo $user['Vorname'] ?>" style="margin-top: 0px;margin-bottom: 0px;width: 250px;"></div>
                    </div>
                    <div class="row">
                        <div class="col d-xl-flex align-items-xl-center" style="height: 38px;"><input class="border rounded" type="text" name="change_nachname" value="<?php echo $user['Nachname'] ?>" style="margin-top: 0px;margin-bottom: 0px;width: 250px;"></div>
                    </div>
                    <div class="row">
                        <div class="col d-xl-flex align-items-xl-center" style="height: 38px;"><input class="border rounded" type="text" name="change_email" value="<?php echo $user['Email'] ?>" style="margin-top: 0px;margin-bottom: 0px;width: 250px;"></div>
                    </div>
                    <div class="row">
                        <div class="col d-xl-flex align-items-xl-center" style="height: 38px;"><input class="border rounded" type="text" name="change_wort" value="<?php echo $user['WOrt'] ?>" style="margin-top: 0px;margin-bottom: 0px;width: 250px;"></div>
                    </div>
                    <div class="row">
                        <div class="col d-xl-flex align-items-xl-center" style="height: 38px;"><input class="border rounded" type="text" name="change_telnr" value="<?php echo $user['TelNr'] ?>" style="margin-top: 0px;margin-bottom: 0px;width: 250px;"></div>
                    </div>
                    <div class="row">
                        <div class="col d-xl-flex align-items-xl-center" style="height: 38px;"><input class="border rounded" type="text" name="change_gebdatum" value="<?php echo $user['GebDatum'] ?>" style="width: 250px;"></div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group d-lg-flex justify-content-lg-center but-login" data-aos="fade-left" data-aos-duration="500" data-aos-once="true" style="padding-top: 20px;"><button class="btn btn-outline-primary btn-block login" type="submit" style="width: 300px;height: 50px;font-size: 20px;">Änderungen speichern</button></div>
        </div>
    </form>
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