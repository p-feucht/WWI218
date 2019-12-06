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
            <h1 class="login-header">Bewirb dich jetzt.</h1>
            <hr>
        </div>
    </section>
    <div class="shadow-none contact-clean" style="background-color: rgba(241,247,252,0);padding-top: 0px;">
        <form class="border rounded border-primary shadow-none" data-bss-recipient="91765a22e6077b70759c2617b16afb76" data-bss-subject="Kontakt">
            <h2 class="text-center" style="color: rgb(0,0,0);">Bewerbung</h2>
            <div class="form-group"><input class="border rounded form-control is-invalid" type="email" value="<? echo $user['Email'] ?>" name="email" placeholder="E-Mail" required="" minlength="10"></div>
            <div class="form-group"><input class="form-control" type="text" name="studiengang" placeholder="Studiengang" required="" minlength="3"></div>
            <div class="form-group"><input class="form-control" type="text" name="unternehmen" placeholder="Partnerunternehmen" required="" minlength="3"></div>
            <div class="form-group"><textarea class="border rounded form-control" name="message" placeholder="Nachricht" rows="14" required="" minlength="30"></textarea></div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Lebenslauf</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group d-lg-flex justify-content-lg-center align-items-lg-center"><button class="btn btn-outline-primary btn-block login" type="submit" style="width: 200px;height: 50px;font-size: 20px;">Senden</button></div>
        </form>
    </div>
<?php include ("footer.php"); ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</body>

</html>