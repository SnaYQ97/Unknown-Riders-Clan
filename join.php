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
    <meta name="description" content="Dołącz do Klanu Unknown Riders">
    <meta name="author" content="SnaYQ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dołącz do nas!</title>
    <!-- page icon -->
    <link rel="Shortcut icon" href="img/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/join.css" rel="stylesheet">
    <!-- fontello styles -->
    <link href="fontello/css/fontello.css" rel="stylesheet">

  </head>

  <body class="bg-dark" style="overflow: hidden;">
    <!-- Background Video -->
    <video autoplay muted loop id="myVideo" poster="s8.jpg">
      <source src="video/1.mp4" type="video/mp4">
    </video>

    <!--div class="imgfullscrean"></div-->

    <!-- Navigation -->
    <?php include "include/section-header.php"; ?>
    <!-- Page Content -->

       <section class="bg-dark my-5" style="height: 100vh; display: flex; align-items: center;">
        <div class="container">
          <div class="row">

            <div class="col-lg-12 mx-auto">
              <h2 class="text-center text-light">Wymagamy:</h2>
                <hr>
                  <p class="text-light lead">
                    <li class="text-light lead">Wieku powyżej 16 roku życia.</li>
                    <li class="text-light lead">Przestrzegania regulaminu GTA Online.</li>
                    <li class="text-light lead">Pobrania aplikacji Discord, w celu komunikacji.</li>
                    <li class="text-light lead">Ustawienia klanu URCN jako aktywny, po pomyślnym przejściu procesu rekrutacji.</li>
                  </p>
            </div>
          </div>

          <div class="row mt-1">
            
            <div class="linksbar col-sm-5">
              <a class="nav-link icons" href="https://discordapp.com/download" target="_blank" style="background-image: url('svg/dcdownload.svg')"></a>   
            </div>

            <div class="linksbar col-sm-5 offset-sm-2">
              <a class="nav-link icons" href="https://discord.gg/s2E34s2" target="_blank" style="background-image: url('svg/dcconnect.svg')"></a>    
            </div>
          </div>

        </div>
      </section>

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
