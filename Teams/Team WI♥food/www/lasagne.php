<!DOCTYPE php>
<php lang="en">

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

    <!-- /.container -->
    <!-- /.row -->

    <div class="container shadow-lg">

        <div class="row">

            <div class="col-8">

                <div class="card">
                    <img src="lasagne.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lasagne</h5>
                    </div>

                    <p class="card-text">
                        <h6> Zutaten</h6>
                        <ul>
                            <li>Olivenöl</li>
                            <li>500g Hackfleisch, gemischt</li>
                            <li>1 Zwiebel</li>
                            <li>2 Knoblauchzehen</li>
                            <li>1 Bund Petersilie oder 1 EL Tomatenmark</li>
                            <li>1 Dose geschälte Tomaten, ca. 800g</li>
                            <li>etwas Rotwein</li>
                            <li>½ Liter Milch</li>
                            <li>30 g Butter</li>
                            <li>40 g Mehl</li>
                            <li>Salz und Pfeffer</li>
                            <li>Zitronensaft</li>
                            <li>Muskat</li>
                            <li>300 g Lasagneplatte(n)</li>
                            <li>Käse nach Bedarf</li>
                            <li>Butterflöckchen</li>
                            <br>
                        </ul>
                        <h6> Zubereitung </h6>
                        Ragú Bolognese: In einem Topf das Olivenöl erhitzen, das Hackfleisch darin rundherum anbraten und die gehackten Zwiebeln und die gehackte Petersilie dazugeben. Knoblauch in feinen Scheiben und Tomatenmark dazu rühren und mitbraten. Mit den Dosentomaten
                        aufgießen, salzen und pfeffern. Rotwein nach Belieben beifügen. Das Ragú mindestens eine halbe Stunde lang bei geöffnetem Topf einkochen lassen. Béchamelsauce: Butter in einem kleinen Topf schmelzen und das Mehl mit dem Schneebesen
                        unterrühren und hellgelb anschwitzen. Die Milch dazugießen und die Sauce glatt rühren. Wer zu langsam gerührt hat und Klümpchen in der Sauce findet, kann die Sauce durch ein feines Haarsieb passieren und dann weiterkochen lassen.
                        Die Sauce sollte fast eine halbe Stunde lang auf kleiner Flamme köcheln, damit sie den Mehlgeschmack verliert. Mit Salz, Pfeffer und Zitronensaft sowie etwas Muskatnuss abschmecken. Zubereitung der Lasagne: In einer gebutterten,
                        feuerfesten Form etwas Ragú Bolognese verteilen, eine Schicht Lasagneplatten darauf legen, die Nudelschicht wieder mit Ragú und dann mit einer Schicht Béchamel bedecken. Anschließend wieder eine Schicht Nudeln, Ragú und Béchamel.
                        So Schicht für Schicht die Form füllen. Die letzte Schicht sollte die Béchamelsauce bilden. Dick mit geriebenem Käse bestreuen und Butterflöckchen darauf setzen. Die Lasagne bei 180 °C Umluft ca. 30 - 40 Minuten backen, bis die
                        Kruste goldbraun ist. Die Lasagne kann man auch gut einen Tag vorher vorbereiten und im Kühlschrank ziehen lassen. Als Vorspeise empfehle ich Honigmelone mit Parmaschinken und als Nachspeise einen Beerenmix an Quark-Joghurt-Sahne-Creme
                        mit brauner Zuckerkruste.
                        <br>

                    </p>
                    <div class="card-body">
                        <a href="hotlist.php" class="card-link">Zurück</a>
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
                <div class="card my-4">
                    <h5 class="card-header">Mein Wochenplan</h5>
                    <div class="card-body">
                        Melde dich an um deinen Wochenplan zu generieren!
                        <br>
                        <br>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->


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

</php>