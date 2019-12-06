<?php
Session_start();
include ("header.php");
$pdo = new PDO('mysql:host=localhost;dbname=dualstudyfit_DATA-BASE', 'dualstudyfit_root', 'Zlr8rCNsRfGpvg6X');
?>

<div class="top-result">
    <h1 class="login-header">Dein Studiengang.</h1>
    <hr>
</div>

<div class="bottom-result">
<?php
$count = 1;
$bwl = 0;
$tec = 0;
$soz = 0;
$pensum = 0;

    $questions = [
        1 => $_POST['frageeins'],
        3 => $_POST['fragedrei'],
        4 => $_POST['fragevier'],
        5 => $_POST['fragefunf'],
        6 => $_POST['fragesechs'],
        7 => $_POST['fragesieben'],
        8 => $_POST['frageacht'],
        9 => $_POST['frageneun']
    ]; //Auswertung der Fragen für Studienrichtung

    $questionWorkload = $_POST['fragezwei']; //Auswertung Frage 2

    if ($questionWorkload == '0') // Checke Workload
    {
        $pensum = 0;
    }

    if ($questionWorkload == '1') {
        $pensum = 1;
    }

    if ($questionWorkload == '2') {
        $pensum = 2;
    }





    foreach ($questions as $value) {

        if ($count == 1 || $count == 5 ) { //Gewichtung einzelner Fragen
            if ($value == 'BWL') {
                $bwl = $bwl + 10;
            }

            if ($value == 'TEC') {
                $tec = $tec + 10;
            }

            if ($value == 'SOZ') {
                $soz = $soz + 10;
            }



        }



        if ($value == 'BWL') {
            $bwl = $bwl + 10;
        }

        if ($value == 'TEC') {
            $tec = $tec + 10;
        }

        if ($value == 'SOZ') {
            $soz = $soz + 10;
        }


        $count = $count + 1;
        if ($count == 2) {
            $count = $count + 1;
        }
    }

    if ($bwl > 100) {

        $bwl = 100;
    }

if ($tec > 100) {

    $tec = 100;
}

if ($soz > 100) {

    $soz = 100;
}

     echo  "BWL: ". $bwl. " - ". " TEC: " . $tec . " - ". "  SOZ: " . $soz ." - ". "  Pensum: " . $pensum. "<br /><br />";


$sql = "SELECT * FROM Studiengang WHERE BWL = '$bwl' AND TEC = '$tec' AND  SOZ = '$soz' AND Pensum = '$pensum'"; //Note 1

echo "<table border='6' cellpadding='8' cellspacing='30'>";
echo "<tr>" . "<th>Kürzel </th>". "<th>Studiengangsname </th>" . "<th>Studiengangsleiter </th>" . "<th>Note </th>". "<th>Unternehmen</th>"."</tr>";

foreach ($pdo->query($sql) as $row) {
    echo "<tr>";
    echo "<td>". $row['StKuerzel'] . "</td><td>" . $row['StName'] ." " . "</td>";
    echo "<td>".  $row['StLeiter'] . " </td><td> " . "1". "</td>";
    echo '<td><a href=' .$row['StLink']. '>Unternehmen</a></td>';
    echo "</tr>";
}
$spread = 5;
$anz = 0;
for($i=2; $i < 5; $i++) { //Note 2-4


    $bwl_u = $bwl - $spread;
    $bwl_o = $bwl + $spread ;
    $tec_u = $tec - $spread;
    $tec_o = $tec + $spread;
    $soz_u = $soz - $spread;
    $soz_o = $soz + $spread;




$bwl_uc = $bwl - $spread + 5;
$bwl_oc = $bwl + $spread - 5;
$tec_uc = $tec - $spread + 5;
$tec_oc = $tec + $spread - 5;
$soz_uc = $soz - $spread + 5;
$soz_oc = $soz + $spread - 5;

if ($bwl_uc < 0) {




    $bwl_uc = 0;
}


    if ($soz_uc < 0) {

        $soz_uc = 0;
    }




    if ($tec_uc < 0) {

        $tec_uc = 0;
    }


    $sql = "SELECT * FROM Studiengang WHERE BWL BETWEEN '$bwl_u' AND '$bwl_o' AND TEC BETWEEN '$tec_u' AND '$tec_o' AND SOZ BETWEEN '$soz_u' AND '$soz_o'
 AND NOT EXISTS (SELECT * FROM Studiengang S WHERE BWL BETWEEN '$bwl_uc' AND '$bwl_oc' AND TEC BETWEEN '$tec_uc' AND '$tec_oc' AND SOZ BETWEEN '$soz_uc' AND '$soz_oc' AND S.StKuerzel = Studiengang.StKuerzel)";

    foreach ($pdo->query($sql) as $row) {
        echo "<tr>";
        echo "<td>". $row['StKuerzel'] . "</td><td>" . $row['StName'] ." " . "</td>";
        echo "<td>".  $row['StLeiter'] . " </td><td> " . $i. "</td>";
        echo '<td><a href=' .$row['StLink']. '>Unternehmen</a></td>';
        echo "</tr>";

    }


    $spread = $spread + 5; //Erhöhe Spread



}

echo "</table>" ."<br>";
$sql2 = "SELECT COUNT(*) FROM Studiengang WHERE BWL BETWEEN '$bwl_u' AND '$bwl_o' AND TEC BETWEEN '$tec_u' AND '$tec_o' AND SOZ BETWEEN '$soz_u' AND '$soz_o'";

$anz= $pdo->query($sql2)->fetch();

?> - Note 1: Fit im ersten Versuch -
Note 2: Fit im zweiten Versuch -
Note 3: Fit im dritten Versuch -
Note 4: Fit im vierten Versuch -
<br>
<br>
<?php


If ($anz['COUNT(*)'] == 0) {

    echo "<b>" . "Leider bieten wir derzeit keinen passenden Studiengang an." ."</b>";
}
?>
<br></br>

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