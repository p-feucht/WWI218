<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=wilovefood', 'wilovefood', 'vhcm2019web');
if(isset($_GET['login'])) {
    $benutzer = $_POST['benutzer'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM Users WHERE benutzer = :benutzer");
    $result = $statement->execute(array('benutzer' => $benutzer));
    $user = $statement->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
        die('Login erfolgreich. Weiter zu <a href="homel.php">internen Bereich</a>');
    } else {
        echo $errorMessage;
        $errorMessage = "Benutzername oder Passwort ist ungültig<br>";
    }
    
}
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
    <link href="login.css" rel="stylesheet">
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
    <log class="container">

        <div class="row">

        

    <form action="?login=1" method="post">

                <h2>Login</h2>
                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="benutzer" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="passwort" required>

                    <button type="submit">Login</button>
                    <label>
                    <?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
                      </label>
                </div>

                <a class="btn btn-primary" href="registration.php" role="button">Noch nicht registriert? Jetzt loslegen!</a>
            </form>

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