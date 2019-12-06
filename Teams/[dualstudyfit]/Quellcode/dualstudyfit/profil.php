<?php
session_start();
include ("header.php");


if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
$pdo = new PDO('mysql:host=localhost;dbname=dualstudyfit_DATA-BASE', 'dualstudyfit_root', 'Zlr8rCNsRfGpvg6X');
$BenutzerID= $_SESSION['userid'];
$sql = "SELECT * FROM Benutzer WHERE UserId = '$BenutzerID'";
$user = $pdo->query($sql)->fetch();

?>
<section>
    <div class="top-login">
        <h1 data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="login-header">Dein Profil.</h1>
        <hr>
        <div class="row">
            <div class="col-2 d-xl-flex justify-content-xl-center align-items-xl-start" style="padding-right: 0;padding-left: 0;"><img class="img-fluid" style="height: 160px;width: 120px;"></div>
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
                    <div class="col"><label class="col-form-label"><?php echo $user['Nachname'] ?></label></div>
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
            <div class="col-3" style="padding-left: 0;padding-right: 0;">
                <div class="row">
                    <div class="col" style="margin-bottom: 190px;"><a class="mehrerfahren" href="change_profil.php">Mein Profil ändern&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</a></div>
                </div>
                <div class="row">
                    <div class="col"><a class="mehrerfahren" href="bewerbung.php">Zu meinen Bewerbungen&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</a></div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col my-top" style="margin-right: 10px;padding-left: 30px;">
                <div class="row">
                    <div class="col" style="padding-right: 0;padding-left: 0;">
                        <h5 style="font-size: 19px;"><strong>Meine Top-Studiengänge:</strong></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="padding-right: 0;padding-left: 0;">
                        <ul style="padding-left: 20px;">
                            <li>Wirtschaftsinformatik</li>
                            <li>Studiengang 2</li>
                            <li>Studiengang 3</li>
                            <li>Studiengang 4</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col my-top">
                <div class="row">
                    <div class="col" style="padding-right: 0;padding-left: 0;">
                        <h5 style="font-size: 19px;"><strong>Meine Top-Hochschulen:</strong></h5>
                    </div>
                </div>
                <div class="row">
                    <ul style="padding-left: 20px;">
                        <li>DHBW Ravensburg</li>
                    </ul>
                </div>
            </div>
            <div class="col my-top" style="margin-left: 10px;">
                <div class="row">
                    <div class="col" style="padding-right: 0;padding-left: 0;">
                        <h5 style="font-size: 19px;"><strong>Meine Top-Unternehmen:</strong></h5>
                    </div>
                </div>
                <div class="row">
                    <ul style="padding-left: 20px;">
                        <li>Accenture Technology Solutions GmbH</li>
                        <li>Airbus Defence and Space</li>
                        <li>BayernLB</li>
                        <li>Robert Bosch GmbH</li>
                        <li>SAP</li>
                    </ul>
                </div>
            </div>
        </div>
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
