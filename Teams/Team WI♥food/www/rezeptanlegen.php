<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=wilovefood', 'wilovefood', 'vhcm2019web');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WI ♥ Food!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="rezeptanlegen.css" rel="stylesheet">
    <script src="javascript.js"></script>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">WI ♥ Food!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="indexl.php"><i class="fas fa-home"></i>home</a>
                        <li class="nav-item">
                            <a class="nav-link" href="hotlistl.php">hot list</a>
                        </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="auf die schnellel.php">auf die schnelle</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">meine rezepte</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="toBeAddedSoon()">meine favoriten</a>
                            <a class="dropdown-item" onclick="toBeAddedSoon()">eigene rezepte</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="foodpornl.php">foodporn</a>
                    </li>
                    <!--  <button type="button" class="btn btn-primary" href="login.php">Login</button>-->
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Mein Konto
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            <a class="dropdown-item" href="rezeptanlegen.php">Rezept uploaden<span class="sr-only">(current)</span></a>
                            <a class="dropdown-item" href="index.php">Ausloggen</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <log class="container">

        <div class="row">
<?php
        $showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
        if(isset($_GET['anlegen'])) {
            $error = false;
            $rezeptname = $_POST['rezeptname'];
            $zutat1 = $_POST['zutat1'];
            $zutat2 = $_POST['zutat2'];
            $zutat3 = $_POST['zutat3'];
            $zutat4 = $_POST['zutat4'];
            $zutat5 = $_POST['zutat5'];
            $zutat6 = $_POST['zutat6'];
            $zutat7 = $_POST['zutat7'];
            $zutat8 = $_POST['zutat8'];
            $zutat9 = $_POST['zutat9'];
            $zutat10 = $_POST['zutat10'];
            $menge1 = $_POST['menge1'];
            $menge2 = $_POST['menge2'];
            $menge3 = $_POST['menge3'];
            $menge4 = $_POST['menge4'];
            $menge5 = $_POST['menge5'];
            $menge6 = $_POST['menge6'];
            $menge7 = $_POST['menge7'];
            $menge8 = $_POST['menge8'];
            $menge9 = $_POST['menge9'];
            $menge10 = $_POST['menge10'];
            $beschreibung = $_POST['beschreibung'];
            $zeit = $_POST['zeit'];
            $personen = $_POST['personen'];


            

    
            //Keine Fehler, wir können den Nutzer registrieren
            if(!$error) {        
                $statement = $pdo->prepare("INSERT INTO Rezept (rezeptname, zutat1, menge1, zutat2, menge2, zutat3, menge3, zutat4, menge4, zutat5, menge5, zutat6, menge6,
                zutat7, menge7, zutat8, menge8, zutat9, menge9, zutat10, menge10, beschreibung, zeit, personen) 
                VALUES (:rezeptname, :zutat1, :menge1, :zutat2, :menge2, :zutat3, :menge3, :zutat4, :menge4, :zutat5, :menge5, :zutat6, :menge6,
                :zutat7, :menge7, :zutat8, :menge8, :zutat9, :menge9, :zutat10, :menge10, :beschreibung, :zeit, :personen)");
                $result = $statement->execute(array('rezeptname' => $rezeptname, 'zutat1' => $zutat1, 'menge1' => $menge1, 'zutat2' => $zutat2, 'menge2' => $menge2, 'zutat3' => $zutat3, 'menge3' => $menge3,
                'zutat4' => $zutat4, 'menge4' => $menge4, 'zutat5' => $zutat5, 'menge5' => $menge5, 'zutat6' => $zutat6, 'menge6' => $menge6, 'zutat7' => $zutat7, 'menge7' => $menge7, 
                'zutat8' => $zutat8, 'menge8' => $menge8, 'zutat9' => $zutat9, 'menge9' => $menge9, 'zutat10' => $zutat10, 'menge10' => $menge10, 'beschreibung' => $beschreibung,
                'zeit' => $zeit, 'personen' => $personen));
        
             if($result) {        
                echo 'Dein Rezept wurde erfolgreich erstellt. <a href="homel.php">Zur Homepage</a>';
                $showFormular = false;
            } else { 
			    echo 'Es gab einen Fehler mit deinem Rezept. <br>';
        }
    } 
}

if($showFormular) {
    ?>
        

    <form action="?anlegen=1" method="post">

                <h2>Rezept anlegen</h2>
                <div class="container">
                    <label for="rezept"><b>Rezeptname</b></label>
                    <br>
                    <input id = "Rezeptname" type="text" placeholder="Rezeptname" name="rezeptname" required>
                    <br>
                    <label for="psw"><b>Zutat 1</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat1">
                    <input type="text" placeholder="Menge" name="menge1">
                    <br>
                    <label for="psw"><b>Zutat 2</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat2" >
                    <input type="text" placeholder="Menge" name="menge2">
                    <br>
                    <label for="psw"><b>Zutat 3</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat3" >
                    <input type="text" placeholder="Menge" name="menge3">
                    <br>
                    <label for="psw"><b>Zutat 4</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat4">
                    <input type="text" placeholder="Menge" name="menge4">
                    <br>
                    <label for="psw"><b>Zutat 5</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat5" >
                    <input type="text" placeholder="Menge" name="menge5">
                    <br>
                    <label for="psw"><b>Zutat 6</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat6" >
                    <input type="text" placeholder="Menge" name="menge6">
                    <br>
                    <label for="psw"><b>Zutat 7</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat7" >
                    <input type="text" placeholder="Menge" name="menge7">
                    <br>
                    <label for="psw"><b>Zutat 8</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat8" >
                    <input type="text" placeholder="Menge" name="menge8">
                    <br>
                    <label for="psw"><b>Zutat 9</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat9" >
                    <input type="text" placeholder="Menge" name="menge9">
                    <br>
                    <label for="psw"><b>Zutat 10</b></label>
                    <br>
                    <input type="text" placeholder="Zutat" name="zutat10" >
                    <input type="text" placeholder="Menge" name="menge10">
                    <br>
                    <label for="beschreibung"><b>Beschreibung</b></label>
                    <textarea id="beschreibung" type="text" name="beschreibung"></textarea>
                    <label for="text"><b>Zeit</b></label>
                    <input type="text" placeholder="Zeit" name="zeit" >
                    <label for="text"><b>Personen</b></label>
                    <input type="text" placeholder="Personen" name="personen" >
                    <br>
                    <br>
                    <button type="submit">Rezept erstellen</button>
                    <label>
                        
                    </label>
                </div>

            </form>
            <?php
} //Ende von if($showFormular)
?>
        </div>
    </log>




    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; WI ♥ Food! 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>