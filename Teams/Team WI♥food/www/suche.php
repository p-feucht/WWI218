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
    <link href="index.css" rel="stylesheet">
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
                        <a class="nav-link" href="index.php">home
              
            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hotlist.php">hot list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="auf die schnelle.php">auf die schnelle</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">meine rezepte</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" onclick="meinefavoriten()">meine favoriten</a>
                            <a class="dropdown-item" onclick="eigeneRezepte()">eigene rezepte</a>
                            <div class="dropdown-divider"></div>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="foodporn.php">foodporn</span></a>
                    </li>
                    <!--  <button type="button" class="btn btn-primary" href="login.html">Login</button>-->
                    <a type="button" class="btn btn-primary" href="login.php">Login</a>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container shadow-lg">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

            <?php 
$servername = "localhost";
$username = "wilovefood";
$password = "vhcm2019web";
$dbname = "wilovefood";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    $suche = $_POST['suche'];
    $error = false;
    $suchbegriff = $_POST['suche'];
    $sql = "SELECT rezeptname, zutat1, menge1, zutat2, menge2, zutat3, menge3, zutat4, menge4, zutat5, menge5, zutat6, menge6,
    zutat7, menge7, zutat8, menge8, zutat9, menge9, zutat10, menge10, beschreibung, zeit, personen FROM Rezept WHERE rezeptname LIKE '%$suchbegriff%'";
    $suchergebnis = mysqli_query($conn, $sql);
    if (!$error) {
        if ($suchergebnis->num_rows > 0) {
            while($row = $suchergebnis->fetch_assoc()) {
                echo "Rezept: " . $row["rezeptname"]. "<br>". "<br>".
                "Zutaten: ". "<br>". "<br>".
                (!empty($row["zutat1"]) ? $row["menge1"]. " ". $row["zutat1"]. " " :"").
                (!empty($row["zutat2"]) ? "<br>".  $row["menge2"]. " ". $row["zutat2"]:"").
                (!empty($row["zutat3"]) ? "<br>". $row["menge3"]. " ". $row["zutat3"]:"").
                (!empty($row["zutat4"]) ? "<br>". $row["menge4"]. " ". $row["zutat4"]:"").
                (!empty($row["zutat5"]) ? "<br>". $row["menge5"]. " ". $row["zutat5"]:"").
                (!empty($row["zutat6"]) ? "<br>". $row["menge6"]. " ". $row["zutat6"]:"").
                (!empty($row["zutat7"]) ? "<br>". $row["menge7"]. " ". $row["zutat7"]:"").
                (!empty($row["zutat8"]) ? "<br>". $row["menge8"]. " ". $row["zutat8"]:"").
                (!empty($row["zutat9"]) ? "<br>". $row["menge9"]. " ". $row["zutat9"]:"").
                (!empty($row["zutat10"]) ?"<br>". $row["menge10"]. " ". $row["zutat10"]:"").
                "<br>". "<br>". "Beschreibung: ".
                (!empty($row["beschreibung"]) ? "<br>". "<br>". $row["beschreibung"]. "<br>". "<br>":"").
                (!empty($row["zeit"]) ? "Kochzeit: ". $row["zeit"]. "  -  " :"").
                (!empty($row["personen"]) ? "Personenanzahl: ". $row["personen"]. " Personen". "<br>":"").
                "<br>".
                "----------------------------------------------------------------------------------------------------------".
                "<br>";
            }

        } else {
            echo "0 results";

        }
    } else {
        echo $errorMessage;
        $errorMessage = "Fehler";
    }
}
?>
            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <form action="suche.php" method="post">
                            <input type="text" class="form-control" name="suche" placeholder="Search for..."> 
                            <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Go!</button>
                            </span>
                            </form>
                        </div>
                    </div>
                </div>



                <!-- Side Widget -->

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


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