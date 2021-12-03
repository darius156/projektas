<?php

include "dbConn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fotografija</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
</head>

<body>

  <div class="top">
    <div class="bar red card center-align large ">
      <a href="index.php" class="button rounded-full">Pagrindinis</a>
      <a href="galerija.php" class="button rounded-full">Galerija</a>
      <a href="kainos.php" class="button rounded-full">Kainos</a>
      <a href="apie.php" class="button rounded-full">Apie</a>
      <a href="forma.php" class="button rounded-full">Kontaktai</a>
    </div>
  </div>
  <div class="row">
    <div class="column">
      <img src="IMG/vienas.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
    <div class="column">
      <img src="IMG/du.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
    <div class="column">
      <img src="IMG/trys.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
  </div>
  <div class="row">
    <div class="column">
      <img src="IMG/keturi.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
    <div class="column">
      <img src="IMG/penki.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
    <div class="column">
      <img src="IMG/sesi.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
  </div>
  <div class="row">
    <div class="column">
      <img src="IMG/septyni.jpeg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
    <div class="column">
      <img src="IMG/astuoni.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
    <div class="column">
      <img src="IMG/devyni.jpg" alt="Vestuves" style="width:100%; height: 100%;">
    </div>
  </div>
  </div>
  <?php

$records = mysqli_query($db,"select * from tbltest"); // fetch data from database


while($data = mysqli_fetch_array($records))
{
?>
  <div class="row">
    <div class="column">
      <img src="<?php echo $data['images']; ?>" width="500px" height="500px">
    </div>
  </div>
  <?php
}
?>
  <footer class="center opacity">
    <div class="xlarge">
      <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official hover-opacity"></i></a>
      <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram hover-opacity"></i></a>
      <a href="https://www.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p hover-opacity"></i></a>
      <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter hover-opacity"></i></a>
    </div>
    <p>@FotoGrožis</p><br>
  </footer>

</body>

</html>