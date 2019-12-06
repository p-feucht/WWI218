<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
<title>buendon | Anmeldung</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="CSS Dateien/Anmeldung.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/png" href="Bilder/Logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>

    <div class="header">
        <div class="inner_header">
            <div class="logo_container">
                <img src="Bilder/Logo.png" alt="Buendon Logo">
            </div>

            <div class="header_text">
                <h1>buena donación</h1>
            </div>

            <div class="header_subtext">
                <h2>- Anmeldung -</h2>
            </div>
        </div>
    </div>


    <ul class="navList">
        <li> <a href="index.html"><i class="fa fa-home"></i></a></li>
        <li> <a href="Aktuelles.html">Aktuelles</a></li>
        <li> <a href="Ueberuns.html">Über uns</a></li>

        <li><a href="#hilfsorga">Hilfsorganisationen <i class="fa fa-caret-down"></i></a>
            <div>
                <a href="SOS_Kinderdorf.html">SOS-Kinderdorf</a>
                <a href="WWF.html">WWF</a>
                <a href="Plan_International.html">Plan International</a>
                <a href="Amnesty_International.html">Amnesty International</a>
                <a href="Greenpeace.html">Greenpeace</a>
                <a href="Aerzte_ohne_Grenzen.html">Ärzte ohne Grenzen</a>
            </div>
        </li>
        <li>
            <a class="color" href="login.php">Anmeldung</a>
        </li>
        <div class="search">
            <form>
                <input type="text" class="searchterm" placeholder="Suche">
            </form>
        </div>
    </ul>

    <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="login.php">Anmeldung</a></li>
    </ul>
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>




    <div class="row">
        <div class="main">
            <h2> Login </h2>
              <div class="container">


                <label for="Username"><p>Username</p></label>
                <input type="text"  name="username" required>
                <label for="Password"><p>Password</p></label>
                <input type="password"  name="password" required>

                <button type="submit" class="btn" name="login_user">Login</button>
                <p>
                    Not yet a member? <a href="register.php">Sign up</a>
                </p>

        </div>
    </div>
  </div>





    <div class="footer ">
        <div class="inner_footer ">
            <a href="Kontakt.html">Kontakt</a>
            <img src="Bilder/Logo.png" alt="Buendon Logo">
            <a href="Impressum.html ">Impressum</a>
        </div>
    </div>

</body>

</html>
