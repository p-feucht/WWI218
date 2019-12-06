<?php
Session_start();
include ("header.php");
?>
<div class="top-result">
    <h1 class="login-header">Partnerunternehmen zum  Studiengang.</h1>
    <hr>
</div>

<div class="bottom-result">

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=dualstudyfit_DATA-BASE', 'dualstudyfit_root', 'Zlr8rCNsRfGpvg6X');

    $sql = "SELECT DISTINCT U.UName,U.Link,S.StName FROM Unternehmen U, bietet_an B, Studiengang S WHERE U.UID= B.UID AND B.StKuerzel = 'HFM' AND S.StKuerzel = B.StKuerzel";
    echo "<table border='6' cellpadding='8' cellspacing='30'>";

    echo "<tr><th>Unternehmensname</th><th>Studiengang</th><th>Link</th><tr>";
    foreach ($pdo->query($sql) as $row) {
        echo "<tr><td>" . $row['UName'] . "</td>" .  "</td><td>". $row['StName'] ."</td>" ;
        echo '<td><a href=' .$row['Link']. '>Mehr erfahren</a></td></tr>';
    }
    ?>

    </table>

    <br></br>
    <br></br>
    <br></br>
    <form action="signup.php" method='Post'>
        <div data-aos="fade-left" data-aos-duration="500" data-aos-once="true" class="but-fit-me"><button class="btn btn-outline-primary" data-aos="fade-right" data-aos-duration="500" type="submit" name="fit">Neugierig geworden? Registrieren</button></div>
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
