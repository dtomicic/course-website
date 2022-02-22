<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">

  <script src="https://kit.fontawesome.com/66215dd952.js" crossorigin="anonymous"></script>

  <title>Admin upravljanje</title>
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
        <li class="navbar__link"><a href="#about">O nama</a></li>
        <li class="navbar__link"><a href="#contact">Kontakt</a></li>
        <li class="navbar__link"><a href="#tecajevi">Tečajevi</a></li>
        <li class="navbar__link"><a href="adminlogin.php">Admin</a></li>
      </ul>
    </div>
  </nav>

  <section class="section__third" id="contact" style="height: 100vh">
    <div class="section__third-header">
      <h2 class="section__third-heading">UNOS NOVOG TECAJA</h2>
    </div>
    <div class="section__third-main">
      <form class="section__third-form" action="upload.php" method="post" enctype="multipart/form-data">
        <label for="name" class="section__third-label">Naziv tecaja:</label><br>
        <input type="text" class="section__third-input" name="naziv"><br><br>
        <label for="cijena" class="section__third-label">Cijena:</label><br>
        <input type="text" name="cijena" class="section__third-input"><br><br>
        <label for="opis" class="section__third-label">Opis:</label><br>
        <textarea class="section__third-textinput" cols="25" rows="5" name="opis"></textarea><br><br>
        <input type="submit" name="upload" value="Ucitaj" class="section__third-submitbtn">
      </form>
    </div>
  </section>

<script src="assets/js/main.js"></script>
</body>
</html>