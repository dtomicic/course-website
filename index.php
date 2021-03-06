<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/66215dd952.js" crossorigin="anonymous"></script>


  <title>Tečajevi</title>
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


  <section class="section__main">
    <div class="section__main-image">
      <h2 class="section__main-heading">Saznajte više o nama<br>ili kupite zanimljivi tečaj</h2>
    </div>
  </section>

  <section class="section__second" id="about">
    <div class="section__second-header">
      <h2 class="section__second-heading">O NAMA</h2>
    </div>
    <div class="section__second-main">
      <p class="section__second-main--paragraph">Courses je osnovni webpage za tecajeve za bolji zivot. Tek smo poceli kao projekt na Veleucilistu u Rijeci, ali nadamo se vecem razvoju. Pogledajte nase tecajeve, mozda vam se neki budu svidali...</p>
      <img src="assets/img/teamimg.jpeg" alt="Slika naseg tima" class="section__second-main--picture">
    </div>
  </section>

  <section class="section__third" id="contact">
    <div class="section__third-header">
      <h2 class="section__third-heading">KONTAKT</h2>
    </div>
    <div class="section__third-main">
      <form class="section__third-form" action="mail.php">
        <label for="name" name="ime" class="section__third-label">Ime:</label><br>
        <input type="text" class="section__third-input"><br><br>
        <label for="email" name="email" class="section__third-label">Email*:</label><br>
        <input type="email" class="section__third-input" required><br><br>
        <label for="textmsg" name="tekst" class="section__third-label">Vaša poruka*:</label><br>
        <textarea class="section__third-textinput" cols="25" rows="5" required></textarea><br><br>
        <input type="submit" value="Pošalji" class="section__third-submitbtn">
      </form>
    </div>
  </section>

  <section class="section__fourth" id="tecajevi">
    <div class="section__fourth-header">
      <h2 class="section__fourth-heading">TEČAJEVI</h2>
    </div>
    <div class="section__fourth-main">
      <?php
      $name = 'localhost';
      $username = 'root';
      $password = '';
      $dbName = 'tecajevi_stranica';
      $dbCon = mysqli_connect($name, $username, $password, "$dbName");

      $sql = "SELECT * FROM tecajevi";
      $result = mysqli_query($dbCon, $sql);
      while($row = mysqli_fetch_array($result)){
        echo '<div class="section__fourth-box">';
        echo '<img src="data:image;base64,'.base64_encode($row['slika']).'" class="section__fourth-box--image">';
        echo '<h3 class="section__fourth-box--heading">' . $row['naziv'] . '</h3>';
        echo '<p class="section__fourth-box--paragraph">' . $row['opis'] . '</p>';
        echo '<h2 class="section__fourth-box--price">' . $row['cijena'] . 'kn</h2>';
        echo '<div class="section__fourth-box--btn">
        <h4 class="section__fourth-box--btntext"><a href="kupovina.php">KUPI</a></h4>
        </div>';
      echo '</div>';
      }
      ?>
      <!-- <div class="section__fourth-box">
        <img src="assets/img/cooking.jpeg" alt="Cooking" class="section__fourth-box--image">
        <h3 class="section__fourth-box--heading">/h3>
        <p class="section__fourth-box--paragraph"></p>
        <h2 class="section__fourth-box--price">Cijena:kn</h2>
        <div class="section__fourth-box--btn">
          <h4 class="section__fourth-box--btntext"><a href="kuhanje.html">UZMI</a></h4>
        </div>
      </div>

      <div class="section__fourth-box">
        <img src="assets/img/fitness.jpeg" alt="Fitness" class="section__fourth-box--image">
        <h3 class="section__fourth-box--heading"></h3>
        <p class="section__fourth-box--paragraph"></p>
        <h2 class="section__fourth-box--price">Cijena: kn</h2>
        <div class="section__fourth-box--btn">
          <h4 class="section__fourth-box--btntext"><a href="fitnes.html">UZMI</a></h4>
        </div>
      </div>

      <div class="section__fourth-box">
        <img src="assets/img/math.jpeg" alt="Math" class="section__fourth-box--image">
        <h3 class="section__fourth-box--heading">Tečaj matematike</h3>
        <p class="section__fourth-box--paragraph">Tecaj za nase znalce koji zele znati vise. Tecaj vas uci o razinama matematike na maturi. Super sluzi za one koje se spremaju ze drzavnu maturu.</p>
        <h2 class="section__fourth-box--price">Cijena: 120kn</h2>
        <div class="section__fourth-box--btn">
          <h4 class="section__fourth-box--btntext"><a href="matematika.html">UZMI</a></h4>
        </div>
      </div>

      <div class="section__fourth-box">
        <img src="assets/img/programming.jpeg" alt="Cooking" class="section__fourth-box--image">
        <h3 class="section__fourth-box--heading">Tečaj programiranja</h3>
        <p class="section__fourth-box--paragraph">U ovome tecaju naucit cete osnove te malo vise o programiranju u C++ programskome jeziku. Odlican za programere koji tek pocinju ili zele znati malo vise.</p>
        <h2 class="section__fourth-box--price">Cijena: 120kn</h2>
        <div class="section__fourth-box--btn">
          <h4 class="section__fourth-box--btntext"><a href="programiranje.html">UZMI</a></h4>
        </div>
      </div> -->
    </div> 
  </section>

<!-- Javascript -->
<script src="assets/js/main.js"></script>
</body>
</html>