<!DOCTYPE html>
<html lang="pl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SnaYQ">
    <meta name="author" content="SnaYQ">

    <title>Admin tools</title>
    <!-- Page icon -->
    <link rel="Shortcut icon" href="img/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/admintools.css" rel="stylesheet">


  </head>

  <body>

    <!-- Navigation -->
    <?php include "include/section-header.php"; ?>

    <!-- Page Content -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <!--<h1 class="mx-auto my-0 text-uppercase">Grayscale</h1>-->
          <?php $nick = "";?>
          <h2 class="text-light mx-auto mt-2 mb-3">Sprawdzanie nowych członków klanu.</h2>
          <form class="mx-auto" action="admin-tools.php" method="post">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="text" class="form-control form-control-lg" placeholder="Wpisz nick..." name="nick" minlength="6" maxlength="16" autofocus="" required="">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-lg btn-primary">Sprawdź!</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </header>

    <!-- Footer -->
    <footer class="fixed-bottom">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; SnaYQ 2018</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <?php
    @$nick = $_POST['nick'];
    $literki = strlen($nick);

    if ($literki >=6 && $literki <=16)
      {
        //$link = "http://pl.socialclub.rockstargames.com/member/$nick/games/gtav/pc/career/overview/gtaonline"; 
        //echo '<body onload="window.open(\''.$link.'\'); " target="_blank">';
        header('Location: https://pl.socialclub.rockstargames.com/member/'.$nick.'/');
        //header('Location: index.php');
      }
  ?>

  </body>
</html>
