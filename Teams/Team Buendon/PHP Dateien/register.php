<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>buendon | Registrierung</title>
  <link rel="stylesheet" type="text/css" href="CSS Dateien/Impressum.css">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="shortcut icon" type="image/png" href="Logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
  <div class="header">
      <div class="inner_header">
          <div class="logo_container">
              <img src="Logo.png" alt="Buendon Logo">
          </div>

          <div class="header_text">
              <h1>buena donación</h1>
          </div>

          <div class="header_subtext">
              <h2>- Impressum -</h2>
          </div>
      </div>
  </div>


  <div class="sticky">
      <a class="house" href="Startseite.html"><i class="fa fa-home"></i></a>
      <a href="Akutelles.html">Aktuelles</a>
      <a href="Uberuns.html">Über uns</a>
      <a href="SOS Kinderdorf.html">Hilfsorganisationen</a>
      <a class="color" href="Anmeldung.html">Anmeldung</a>
      <div class="search">
          <form>
              <input type="text" class="searchterm" placeholder="Suche">
          </form>
      </div>
  </div>

  <ul class="breadcrumb">
      <li><a href="Startseite.html">Home</a></li>
      <li><a href="Register.php">Registrierung</a></li>
  </ul>
  <div class="row">
   <div class="block">
  <h2>Register</h2>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</div>

  <div class="footer">
      <div class="inner_footer">
          <a href="Kontakt.html">Kontakt</a>
          <img src="Logo.png" alt="Buendon Logo">
          <a href="Impressum.html">Impressum</a>
      </div>
  </div>

</body>
</html>
