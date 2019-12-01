<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>buendon | Anmeldung</title>
  <link rel="stylesheet" type="text/css" href="CSS Dateien/Anmeldung.css">
  <meta charset="UTF-8">
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
        <li> <a href="Überuns.html">Über uns</a></li>

        <li><a  href="#hilfsorga">Hilfsorganisationen <i class="fa fa-caret-down"></i></a>
            <div>
                <a href="SOS Kinderdorf.html">SOS-Kinderdorf</a>
                <a href="WWF.html">WWF</a>
                <a href="Plan International.html">Plan International</a>
                <a href="Amnesty International.html">Amnesty International</a>
                <a href="Greenpeace.html">Greenpeace</a>
                <a href="Ärzte ohne Grenzen.html">Ärzte ohne Grenzen</a>
            </div>
        </li>
        <li>
            <a class="active" class="color" href="register.php">Anmeldung</a>
        </li>
        <div class="search">
            <form>
                <input type="text" class="searchterm" placeholder="Suche">
            </form>
        </div>
    </ul>

  <ul class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li><a href="login.php">Login</a></li>
  </ul>
  <div class="row">
   <div class="block">
     <h2> Login </h2>
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</div>

  <div class="footer">
      <div class="inner_footer">
          <a href="Kontakt.html">Kontakt</a>
          <img src="Bilder/Logo.png" alt="Buendon Logo">
          <a href="Impressum.html">Impressum</a>
      </div>
  </div>

</body>
</html>