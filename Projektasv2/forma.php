<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fotografija</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="normalize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <div style="margin-top:150px">
    <h1 class="text-red"><b>Susisiekite</b></h1>
    <p>Dirbame visoje Lietuvoje!</p>
    <br>
    <section class="my-5">

      <div class="w-50 m-auto">
        <form action="userdata.php" method="post">
          <div class="form-group">
            <label for="pwd">Vardas</label>
            <input type="text" class="form-control" name="user">
          </div>
          <div class="form-group">
            <label for="email">El.Paštas</label>
            <input type="email" class="form-control" name="email" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="pwd">Numeris</label>
            <input type="text" class="form-control" name="mobile">
          </div>
          <div class="form-group">
            <label for="comment">Žinutė</label>
            <textarea class="form-control" rows="5" name="comment"></textarea>

          </div>


          <button type="submit" class="btn btn-primary">Siųsti</button>
        </form>

      </div>
    </section>
  </div>

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