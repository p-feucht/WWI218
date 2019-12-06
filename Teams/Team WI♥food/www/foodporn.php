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
                    <li class="nav-item active">
                        <a class="nav-link" href="foodporn.php">foodporn <span class="sr-only">(current)</span></a>
                    </li>
                    <!--  <button type="button" class="btn btn-primary" href="login.html">Login</button>-->
                    <a type="button" class="btn btn-primary" href="login.php">Login</a>
                </ul>
            </div>
        </div>
    </nav>

    <main role="main">



        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Als süßen Nachtisch habe ich mir letztens leckere Pfannkuchen mit heißen Beeren gemacht! Und das Beste? Das Ganze geht mit Honig und ist somit zuckerfrei!</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 30 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text"> Das Bild soll die Neuinterpretation von Foodporn darstellen. Na wer würde das gerne seinen Gästen zum Vernaschen präsentieren?</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted"> In nur 20 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Da läuft einem doch das Wasser im Mund zusammen! Der Burger war schneller weg als die Schuhe beim Winterausverkauf!</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 25 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Nachdem ich nun auch meine FiBu-Klausur mehr oder weniger erfolgreich hinter mich gebracht habe, war die Pfanne ein reiner Sonnenschein!</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 20 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp5.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Das Semester ist bald vorbei und mein Kühlschrank ist immernoch voller Essen! Daher hab ich heute mit der Resteverwertung angefangen. Und daraus ist diese Lasagne entstanden!</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 60 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp6.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Von Avocadoaufstrich über Gemüse zum Vollkornbrötchen - Dieser Tipp ist gesund und auch noch super lecker!</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 10 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp7.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Hähnchen, Pute oder Schwein - zu diesem leckeren Salat kann man alles kombinieren! :)</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 15 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp8.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Der Schwabe lebt! Ein Hoch auf Maultaschen in allen möglichen Variationen.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 15 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="fp9.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">20,00 € für einen Zwiebelrostbraten? Machs doch selbst! </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Rezept</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Zum Wochenplan hinzufügen</button>
                                    </div>
                                    <small class="text-muted">In nur 60 Minuten!</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

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