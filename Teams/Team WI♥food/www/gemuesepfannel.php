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
                <img src="Bunte Gemuesepfanne mit Kichererbsen & Feta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Bunte Gemüsepfanne mit Kichererbsen & Feta</h5>
                    </div>
                    <p class="card-text">
                        <h6> Zutaten</h6>
                        <ul>
                        <li>½ Aubergine</li>
                                <li>¼ TL Salz</li>
                                <li>½ große Zwiebel</li>
                                <li>½ Knoblauchzehe</li>
                                <li>1 EL Olivenöl</li>
                                <li>½ TL Kreuzkümmel</li>
                                <li>½ TL Chili Flocken</li>
                                <li>½ Messerspitze gemahlener Koriander</li>
                                <li>½ rote Paprika</li>
                                <li>½ gelbe Paprika</li>
                                <li>100 g Cocktailtomaten</li>
                                <li>200 g frischer Spinat</li>
                                <li>150 g Kichererbsen</li>
                                <li>½ Packung(en) Feta</li>
                                <li>½ Prise(n) Pfeffer</li>

                        </ul>
                        <h6> Zubereitung </h6>
                        Aubergine waschen, die Enden abschneiden und in Scheiben schneiden. Mit etwas Salz bestreuen und zur Seite stellen. Zwiebel schälen und in Ringe schneiden. Knoblauchzehe schälen und zerdrücken. Olivenöl in einer Pfanne erhitzen, Knoblauchzehe und Gewürze dazugeben. Nach ca. 30 Sekunden Zwiebeln und Auberginen hinzufügen und ca. 10 Minuten bei mittlerer Hitze anbraten.
Paprika waschen, entkernen und in Würfel schneiden. Tomaten und Spinat waschen. Kichererbsen abtropfen lassen.
Paprika, Kichererbsen und Tomaten hinzufügen und ca. 5 Minuten mit anbraten. Zuletzt den Spinat dazugeben und unterrühren. Nach 5 Minuten nochmals mit Pfeffer und Salz abschmecken und vom Herd nehmen.
Feta in Würfel schneiden und über das Gemüse bröseln. Fladenbrot in Scheiben schneiden und zur Gemüsepfanne servieren.

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