<?php
$conn = mysqli_connect("localhost", "root", "", "tecajevi_stranica");
if (isset($_POST['upload'])) {

  $naziv =  $_POST['naziv'];
  $cijena = $_POST['cijena'];
  $opis =  $_POST['opis'];
  $insert = $conn->query("INSERT into tecajevi (naziv, opis, cijena) VALUES ('$naziv', '$opis', '$cijena')");
  header('Location: adminlogin.php');
}
?>