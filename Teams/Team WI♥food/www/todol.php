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
                        <a class="nav-link" href="indexl.php"><i class="fas fa-home"></i> home</a>
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
                    <!--  <button type="button" class="btn btn-primary" href="login.php">Login</button>-->
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
    <todo class="div1" style="position:relative; left:40%;">

        <div class="row">
            <form  method="post">

                <div id="myDIV" class="header">
                    <h2 >Meine Einkaufsliste</h2>
                    <input type="text" id="myInput" placeholder="Zutat...">
                    <span onclick="newElement()" class="addBtn">Hinzufügen</span>
                </div>

                <ul id="myUL">
                </ul>

                <script>
                    // Create a "close" button and append it to each list item
                    var myNodelist = document.getElementsByClassName("todoList");
                    var i;
                    for (i = 0; i < myNodelist.length; i++) {
                        var span = document.createElement("SPAN");
                        var txt = document.createTextNode("\u00D7");
                        span.className = "close";
                        span.appendChild(txt);
                        myNodelist[i].appendChild(span);
                    }

                    // Click on a close button to hide the current list item
                    var close = document.getElementsByClassName("close");
                    var i;
                    for (i = 0; i < close.length; i++) {
                        close[i].onclick = function() {
                            var div = this.parentElement;
                            div.style.display = "none";
                        }
                    }

                    // Add a "checked" symbol when clicking on a list item
                    var list = document.querySelector('todo');
                    list.addEventListener('click', function(ev) {
                        if (ev.target.tagName === 'LI') {
                            ev.target.classList.toggle('checked');
                        }
                    }, false);

                    // Create a new list item when clicking on the "Add" button
                    function newElement() {
                        var li = document.createElement("li");
                        var inputValue = document.getElementById("myInput").value;
                        var t = document.createTextNode(inputValue);
                        li.appendChild(t);
                        if (inputValue === '') {
                            alert("Schreib eine Zutat auf!");
                        } else {
                            document.getElementById("myUL").appendChild(li);
                        }
                        document.getElementById("myInput").value = "";

                        var span = document.createElement("SPAN");
                        var txt = document.createTextNode("\u00D7");
                        span.className = "close";
                        span.appendChild(txt);
                        li.appendChild(span);

                        for (i = 0; i < close.length; i++) {
                            close[i].onclick = function() {
                                var div = this.parentElement;
                                div.style.display = "none";
                            }
                        }
                    }
                </script>
            </form>

        </div>
    </todo>
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