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
                    <li class="nav-item active">
                        <a class="nav-link" href="auf die schnelle.php">auf die schnelle <span class="sr-only">(current)</a>
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
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">FastFood in gesund!
                </h1>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="pasta_al_arrabbiata.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Hähnchen-Pasta all'arrabbiata</h2>
                        <p class="card-text">
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
                        </p>
                        <a href="haehnchen_pasta.php" class="btn btn-primary">zum Rezept... &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on January 15, 2019 by
                        <a href="#">WI ♥ Food!</a>
                    </div>
                </div>

                

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="Bunte Gemuesepfanne mit Kichererbsen & Feta.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Bunte Gemüsepfanne mit Kichererbsen & Feta</h2>
                        <p class="card-text">
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
                        </p>
                        <a href="gemuesepfanne.php" class="btn btn-primary">Zum Rezept &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on March 19, 2018 by
                        <a href="#">WI ♥ Food!</a>
                    </div>
                </div>

                <!-- Blog Post -->
                <div class="card mb-4">
                    <img class="card-img-top" src="pasta_pesto.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h2 class="card-title">Pasta mit selbstgemachtem Pesto und Pinienkernen</h2>
                        <p class="card-text">
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
                        </p>
                        <a href="pasta mit pesto.php" class="btn btn-primary">zum Rezept... &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted on July 3, 2018 by
                        <a href="#">WI ♥ Food!</a>
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