<?php
include('headerFooter/php-awal.php')
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link href="css/bootstrap-icons.css" rel="stylesheet" />

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet" />

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <!-- My Style -->
    <link rel="stylesheet" href="css/style-reptil.css" />

    <!-- Logo Title Bar -->
    <link rel="icon" href="assets/img/Logo.png" type="image/x-icon" />

    <title>Lurizoo</title>
  </head>

  <body>
    <!-- Navbar -->
    <?php display_header(); ?>

    <!-- Satwa section -->
    <section id="satwa">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mt-5 pt-5">
            <h2>Mamalia</h2>
            <span class="sub-title"
              >Berikut ini merupakan beberapa jenis satwa mamalia yang ada di
              Lurizoo.</span
            >
          </div>
        </div>

        <div class="row mt-4 justify-content-start">
          <div class="col-sm-4 text-center">
            <div class="card-satwa">
              <div class="position-relative">
                <a href="singa.php"
                  ><img src="assets/img/Singaaa.jpg" alt="" class="mx-auto"
                /></a>
              </div>
              <p class="mt-3">Singa</p>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <div class="card-satwa">
              <div class="position-relative">
                <a href="rusa.php"
                  ><img src="assets/img/Rusa.jpg" alt="" class="mx-auto"
                /></a>
              </div>
              <p class="mt-3">Rusa</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="card-satwa">
              <div class="position-relative">
                <a href="jerapah.php"
                  ><img src="assets/img/Jerapah.jpg" alt="" class="mx-auto"
                /></a>
              </div>
              <p class="mt-3">Jerapah</p>
            </div>
          </div>
        </div>

        <div class="row mt-5 justify-content-start">
          <div class="col-md-4 text-center">
            <div class="card-satwa">
              <div class="position-relative">
                <a href="harimau.php"
                  ><img src="assets/img/Harimaoo.jpg" alt="" class="mx-auto"
                /></a>
              </div>
              <p class="mt-3">Harimau</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card-satwa">
              <div class="position-relative">
                <a href="gajah.php"
                  ><img src="assets/img/gajah.jpg" alt="" class="mx-auto"
                /></a>
              </div>
              <p class="mt-3">Gajah</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php display_footer(); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      -->
  </body>
</html>
