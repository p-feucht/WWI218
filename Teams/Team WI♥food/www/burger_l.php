<!DOCTYPE php>
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
                        <a class="nav-link" href="homel.php"><i class="fas fa-home"></i> home
                              
                            </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hotlistl.php">hot list</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="auf die schnellel.php">auf die schnelle</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">meine rezepte</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" onclick="toBeAddedSoon()">meine favoriten</a>
                            <a class="dropdown-item" href="#" onclick="toBeAddedSoon()">eigene rezepte</a>
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
                    <img src="burger.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Burger</h5>
                    </div>
                    <p class="card-text">
                        <h6> Zutaten</h6>
                        <ul>
                            <li>1 Scheibe Toastbrot</li>
                            <li>2–3 mittelgroße Zwiebeln</li>
                            <li>350 g gemischtes Hack</li>
                            <li>1 Ei (Gr. M)</li>
                            <li>2 TL mittelscharfer Senf</li>
                            <li>Salz u. Pfeffer</li>
                            <li>2–3 EL Öl</li>
                            <li>3 EL eingelegte Gurken­scheiben</li>
                            <li>einige Blätter Kopfsalat</li>
                            <li>2 mittelgroße Tomaten</li>
                            <li>4 (à 50g; z.B. mit Sesam) Hamburger-Softbrötchen</li>
                            <li>8 EL Salatmayonnaise</li>
                            <li>8 EL Barbecue-Soße oder Ketchup</li>
                            <br>
                        </ul>
                        <h6> Zubereitung </h6>
                        Hack mit Pfeffer, Salz und etwas Tabasco würzen. Hackmasse zwischen Klasichtfolie 1 1/2 cm dick ausrollen. Mit einem Ausstecher oder einem Glas (8 cm Ø) 4 runde Taler ausstechen. Auf Backpapier 30 Min. kalt stellen. Tomaten in dünne Scheiben schneiden.
                        Salatgurke schälen und in feine Scheiben hobeln. Zwiebel in Ringe schneiden, in kochendem Wasser kurz blachieren, abschrecken und abtropfen lassen. Eisbergsalat grob schneiden, waschen und trockenschleudern. Eine Grillpfanne erhitzen
                        und mit dem Öl einfetten. Die Fleischtaler von beiden Seiten 2-3 Min. bei starker Hitze grillen. Brötchen halbieren, die Hälften mit je 1 Tl Ketchup bestreichen und mit den anderen Zutaten zusammensetzen.
                        <br>

                    </p>


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
                        </div>
                        <a class="btn btn-primary" href="todol.php" role="button">zur Einkaufsliste</a>
                    </div>
                </div>
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