<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=dualstudyfit_DATA-BASE', 'dualstudyfit_root', 'Zlr8rCNsRfGpvg6X');

if(isset($_GET['login'])) {
    $email = $_POST['email'];
    $passwort = $_POST['password'];

    $statement = $pdo->prepare("SELECT * FROM Benutzer WHERE Email = :email");
    $result = $statement->execute(array('email' => $email));
    $user = $statement->fetch();

//Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['Passwort'])) {
        session_start();
        $_SESSION['userid'] = $user['UserId'];
        header('location: profil.php');

    } else {
        $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    }

}
?>


<?php

include ("header.php");

if(isset($errorMessage)) {
    echo $errorMessage;
}
?>


    <section>
        <div class="top-login">
            <h1 data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="login-header">Please login.</h1>

            <form action="?login=1" method="post">
                <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"><input class="border rounded form-control form-control-lg" type="email" name="email" placeholder="Email" required="" style="width: 300px;height: 50px;"></div>
                <div class="form-group" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200"
                    data-aos-once="true"><input class="border rounded form-control form-control-lg" type="password" name="password" placeholder="Password" required="" style="font-size: 15;width: 300px;height: 50px;"></div>
                <div class="form-group but-login" data-aos="fade-left"
                    data-aos-duration="500" data-aos-delay="300" data-aos-once="true"><button class="btn btn-outline-primary btn-block login" type="submit" style="width: 300px;height: 50px;font-size: 20px;">Login</button></div><a data-aos="fade-left" data-aos-duration="500" data-aos-delay="400" data-aos-once="true" class="forgot"
                    href="#">Forgot your email or password?</a></form>


        </div>
    </section>
    <footer class="page-footer">
        <div class="container">
            <hr style="background-color: #ffffff;">
            <div class="footer-legal">
                <div class="d-inline-block copyright">
                    <p class="d-inline-block">Copyright © 2019 dual study fit. All rights reserved.<br></p>
                </div>
                <div class="d-inline-block legal-links">
                    <div class="d-inline-block item">
                        <a href="uberuns.php">
                            <h5 style="color: rgb(33,37,48);">Über uns</h5>
                        </a>
                    </div>
                    <div class="d-inline-block item">
                        <a href="impressum.php" style="color: rgb(33,37,48);font-size: 11px;">
                            <h5>Impressum</h5>
                        </a>
                    </div>
                    <div class="d-inline-block item">
                        <a href="datenschutzerklärung.html">
                            <h5 style="color: rgb(33,37,48);">Datenschutzerklärung</h5>
                        </a>
                    </div>
                    <div class="d-inline-block item">
                        <a href="nutzungsbedingungen.php">
                            <h5 style="color: rgb(33,37,48);">Nutzungsbedingungen</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
</body>

</html>