<!DOCTYPE html>
<html lang="pl">

  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141306711-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-141306711-1');
    </script>

    <meta charset="utf-8">
    <meta name="keywords" content="URClan, URCN, Unknown riders, Klan gta online">
    <meta name="description" content="Strona Klanu Unknown Riders">
    <meta name="author" content="SnaYQ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Unknown Riders</title>
    <!-- page icon -->
    <link rel="Shortcut icon" href="img/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- fontello styles -->
    <link href="fontello/css/fontello.css" rel="stylesheet">



  </head>

  <body>
    <?php include "include/section-header.php"; ?>
    <!-- Page Content -->
    <header>
      <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#slider" data-slide-to="0" class="active"></li>
          <li data-target="#slider" data-slide-to="1"></li>
          <li data-target="#slider" data-slide-to="2"></li>
          <li data-target="#slider" data-slide-to="3"></li>
          <li data-target="#slider" data-slide-to="4"></li>
          <li data-target="#slider" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/s4.jpg')">
            <div class="carousel-caption">
              <h3>URClan</h3>
              <p>Inne dobre ekipy nie istnieją.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/s15.jpg')">
            <div class="carousel-caption">
              <h3>Klan z historią</h3>
              <p>Czasy dinozaurów klanu poznasz w zakładce Historia Klanu.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/s13.jpg')">
            <div class="carousel-caption">
              <h3>Sprzedaże i napady</h3>
              <p>Znajdziesz u nas nie jedną pomocną parę rąk.</p>
            </div>
          </div>
           <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/s6.jpg')">
            <div class="carousel-caption">
              <h3>Integracja</h3>
              <p>Wieczorne granie trybów 4Fun.</p>
            </div>
          </div>
           <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/s7.jpg')">
            <div class="carousel-caption">
              <h3>Zloty IRL</h3>
              <p>Więcej szczegółów na kanale Discord.</p>
            </div>
          </div>
           <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/s8.jpg')">
            <div class="carousel-caption">
              <h3>Zainteresowany?</h3>
              <p>Kliknij w zakładkę Dołącz do nas!</p>
            </div>
          </div>

        </div>
        <a class="carousel-control-prev fixed-left" href="#slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next fixed-right" href="#slider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Footer -->
    <footer class="fixed-bottom bg-dark">
      <div class="footer">
        <p class="m-0 text-center text-white"><?= date("Y") != 2019 ? "2019-".date("Y") : 2020 ?> Copyright &copy; SnaYQ</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  </body>

</html>
