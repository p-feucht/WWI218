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

    <!--Manuelles CSS File-->
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
                        <a class="nav-link" href="foodporn.php">foodporn</a>
                    </li>
                    <!--  <button type="button" class="btn btn-primary" href="login.html">Login</button>-->
                    <a type="button" class="btn btn-primary" href="login.php">Login</a>
                </ul>
            </div>
        </div>
    </nav>

	<!-- Page Content -->
	<div class="row justify-content-center">
		<div class="col-md-6">
			<div class="card">
				<header class="card-header">
					<a href="login.php"
						class="float-right btn btn-outline-primary mt-1">Login</a>
					<h4 class="card-title mt-2">Sign up</h4>
				</header>
				<article class="card-body">
				<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    $benutzer = $_POST['benutzer'];
    $passwort = $_POST['passwort'];
     
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde

    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO Users (benutzer, passwort) VALUES (:benutzer, :passwort)");
        $result = $statement->execute(array('benutzer' => $benutzer, 'passwort' => $passwort_hash));
        
        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
            $showFormular = false;
        } else { 
			echo 'Username ist vergeben. Versuche einen anderen!
			<br>';
        }
    } 
}
 
if($showFormular) {
?>
					<form action="?register=1" method="post">				<!-- form-row end.// -->
						<div class="form-group">
							<label>Username</label> <input type="text" class="form-control"
								placeholder="" name="benutzer" required> <small class="form-text text-muted">We'll
								never share your username with anyone else.</small>
						</div>
						<div class="form-group">
							<label>Create password</label> <input class="form-control"
								type="password" name="passwort" required>
						</div>
						<!-- form-group end.// -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">
							Los geht's!</button>
			</div>
			</form>	
			<?php
} //Ende von if($showFormular)
?>			
			<!-- form-group// -->
			<small class="text-muted">By clicking the 'Sign Up' button,
				you confirm that you accept our <br> Terms of use and Privacy
				Policy.
			</small>
			</form>
			</article>
			<!-- card-body end .// -->
			<div class="border-top card-body text-center">
				Bist du bereits dabei? <a href="login.php">Login</a>
			</div>
		</div>
		<!-- card.// -->
	</div>
	<!-- col.//-->

	</div>
	<!-- row.//-->


	</div>
	<!--container end.//-->


	<!-- /.row -->

	</div>
	<!-- /.container -->

	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; WI ♥ Food!
				2019</p>
		</div>
		<!-- /.container -->
	</footer>

	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>