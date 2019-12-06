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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Mein Konto
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="rezeptanlegen.php">Rezept uploaden</a>
                            <a class="dropdown-item" href="index.php">Ausloggen</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->

    <!-- /.container -->
    <!-- /.row -->

    <div class="container shadow-lg">

        <div class="row">

            <div class="col-8">

                <div class="card">
                <img src="pasta_al_arrabbiata.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hähnchen-Pasta all'arrabbiata</h5>
                    </div>
                    <p class="card-text">
                        <h6> Zutaten</h6>
                        <ul>
                        <li>150 g junger Spinat</li>
                                <li>½ Knoblauchzehe</li>
                                <li>½ Zwiebel</li>
                                <li>¾ rote Chilischoten</li>
                                <li>200 g Hähnchenfilet</li>
                                <li>2 EL Öl</li>
                                <li>etwas Salz</li>
                                <li>½ Dose geschälte Tomaten</li>
                                <li>250 g Nudeln</li>
                                <li>½ EL Zucker</li>
                                <li>50 g Goudakäse</li>

                        </ul>
                        <h6> Zubereitung </h6>
                        Spinat verlesen, waschen, trocken schleudern. Knoblauch und Zwiebel schälen und fein würfeln. Chili waschen, putzen, Kerne entfernen und Fruchtfleisch in Ringe schneiden. Fleisch waschen, trocken tupfen und würfeln.
Öl in einer großen Pfanne erhitzen. Fleisch darin ca. 10 Minuten unter Wenden braten. Nach ca. 8 Minuten Zwiebeln und Knoblauch dazugeben und mit anbraten. Spinat dazugeben und in der heißen Pfanne zusammenfallen lassen. Mit Salz und Chili würzen. Tomaten dazugeben, aufkochen und dabei mit dem Pfannenwender zerkleinern.
Inzwischen Nudeln in kochendem Salzwasser nach Packungsanweisung zubereiten. Fertige Nudeln in ein Sieb abgießen, dabei ca. 150 ml Nudelwasser auffangen. Nudeln und Nudelwasser zurück in den Topf geben. Soße dazugeben, mit Salz und Zucker abschmecken. Käse grob raspeln. Nudeln anrichten und mit Käse bestreuen.

                    </p>
                    <div class="card-body">
                        <a href="auf die schnelle.php" class="card-link">Zurück</a>
                        <span onclick="toBeAddedSoon()" class="card-link">Zum Wochenplan hinzufügen</span>
                    </div>
                </div>
            </div>
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">
                <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Search</h5>
                    <div class="card-body">
                        <div class="input-group">
                        <form action="suchel.php" method="post">
                            <input type="text" class="form-control" name="suche" placeholder="Search for..."> 
                            <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Go!</button>
                            </span>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Side Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Mein Wochenplan</h5>
                    <div class="card-body">
                        <div>
                            Montag
                            <p>
                                <a class="card-link" href="haehnchen_avocado_salatl.php">Hähnchen-Avocado-Salat</a>
                            </p>
                        </div>
                        <div>
                            Dienstag
                            <p>
                                <a class="card-link" href="#" onClick="addYourself()">Schinken-Käse-Toast</a>
                            </p>
                        </div>
                        <div>
                            Mittwoch
                            <p>
                                <a class="card-link" href="#" onClick="addYourself()">Reispfanne orientalisch</a>
                            </p>
                        </div>
                        <div>
                            Donnerstag
                            <p>
                                <a class="card-link" href="#" onClick="addYourself()">Pasta al arrabiata</a>
                            </p>
                        </div>
                        <div>
                            Freitag
                            <p>
                                <a class="card-link" href="#" onClick="addYourself()">Omelette</a>
                            </p>
                        </div>
                        <div>
                            Samstag
                            <p>
                                <a class="card-link" href="pizza_hawaii_l.php">Pizza Hawaii</a>
                            </p>
                        </div>
                        <div>
                            Sonntag
                            <p>
                                <a class="card-link" href="#" onClick="addYourself()">Kartoffelauflauf</a>
                            </p>
                            <a class="btn btn-primary" href="todol.php" role="button">zur Einkaufsliste</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
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