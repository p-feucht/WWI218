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
                            <a class="nav-link" href="index.php">home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="auf die schnelle.php">auf die schnelle</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="leicht & lecker.php">leicht & lecker</a>
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
                        <!--  <button type="button" class="btn btn-primary" href="login.php">Login</button>-->
                        <a type="button" class="btn btn-primary" href="login.php">Login</a>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container shadow-lg">

            <div class="row">
                <div class="col-8">
                    <div class="card">
                        <img src="pasta_pesto.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pasta mit selbstgemachtem Pesto und Pinienkernen</h5>
                        </div>
                        <p class="card-text">
                            <h6> Zutaten</h6>
                            <ul>
                            <li>350 g Penne</li>
                                <li>1 Bund Basilikum</li>
                                <li>1 Bund glatte Petersilie</li>
                                <li>2 Knoblauchzehen</li>
                                <li>50 g Pinienkerne</li>
                                <li>1 Rote Zwiebel</li>
                                <li>1 Zitrone Bio</li>
                                <li>4 EL Walnussöl</li>
                                <li>100 ml Olivenöl</li>
                                <li>200 g Parmesan</li>
                            </ul>
                            <h6> Zubereitung </h6>
                            Penne nach Packungsanweisung gar kochen. Die Kräuter zusammen mit den Knoblauchzehen und dem Olivenöl in den Mixer geben, nach ein paar Minuten die Hälfte des Parmesan mit in den Mixer geben und alles gründlich vermengen lassen.
Das Walnussöl in die Pfanne geben und die Pinienkerne darin rösten. Wenn sie fertig geröstet sind, können sie mit in den Mixer gegeben werden (oder wenn man es lieber mit etwas Biss mag, einfach in das fertige Pesto geben).
Die Zwiebel in Würfel schneiden und zusammen mit dem Abrieb, sowie etwas Saft der Zitrone mit in das Pesto geben. Das fertige Pesto zusammen mit den Nudeln in einer großen Schüssel vermengen. Mit Salz und Pfeffer abschmecken. Den restlichen Parmesan reiben und nach Belieben über die Pasta geben.


                        </p>

                        <div class="card-body">
                            <a href="auf die schnelle.php" class="card-link">Zurück</a>
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