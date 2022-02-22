<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">


    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/66215dd952.js" crossorigin="anonymous"></script>


  <title>Kupovina</title>
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

  <section class="section__third" id="contact" style="height: 100vh">
    <div class="section__third-header">
      <h2 class="section__third-heading">KONTAKT</h2>
    </div>
    <div class="section__third-main">
      <form class="section__third-form" action="mail.php">
        <label for="name" name="ime" class="section__third-label">Ime:</label><br>
        <input type="text" class="section__third-input"><br><br>
        <label for="email" name="email" class="section__third-label">Email*:</label><br>
        <input type="email" class="section__third-input" required><br><br>
        <label for="textmsg" name="tekst" class="section__third-label">Koji tecaj zelite kupiti*:</label><br>
        <textarea class="section__third-textinput" cols="25" rows="5" required></textarea><br><br>
        <input type="submit" value="Pošalji" class="section__third-submitbtn">
      </form>
    </div>
  </section>
<script src="assets/js/main.js"></script>
</body>
</html>