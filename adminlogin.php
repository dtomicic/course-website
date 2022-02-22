<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/66215dd952.js" crossorigin="anonymous"></script>
  <title>Admin Login</title>
</head>
<body>
  <nav class="navbar">
    <div class="navbar__mobile">
      <div class="navbar__link-logo">
            <a href="index.php"><img src="assets/img/logo.svg" alt="Logo" class="navbar__link-logoimg"></a>
      </div>

      <div class="navbar__link navbar__link-toggle">
        <a href="javascript:void(0)" id="navbar__link-toggle">
          <i class="fas fa-bars"></i>
        </a>
      </div>
    </div>
      
    <div class="navbar__items-right" id="navbar__links">
      <ul class="navbar__links" >
        <li class="navbar__link"><a href="index.php#about">O nama</a></li>
        <li class="navbar__link"><a href="index.php#contact">Kontakt</a></li>
        <li class="navbar__link"><a href="index.php#tecajevi">Tečajevi</a></li>
        <li class="navbar__link"><a href="adminlogin.php">Admin</a></li>
      </ul>
    </div>
  </nav>

  <section class="section__first" id="login">
    <div class="section__first-header">
      <h2 class="section__first-heading">LOGIN</h2>
    </div>
    <div class="section__first-main">
      <form class="section__first-form" action="validate.php" method="POST">
        <label for="name" name="ime" class="section__first-label">Korisnicko ime:</label><br>
        <input  type="text" class="section__first-input" name="adminname"><br><br>
        <label for="password" name="sifra" class="section__first-label">Sifra:</label><br>
        <input type="password" class="section__first-input" name="password" ><br><br>
        <input type="submit" value="PRIJAVA" class="section__third-submitbtn" name="login">
      </form>
    </div>
  </section>

<script src="assets/js/main.js"></script>
</body>
</html>