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
    <meta name="keywords" content="URClan, URCN, Unknown riders, Klan gta online, GTA5 zdjęcia">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galeria</title>
    <!-- page icon -->
    <link rel="Shortcut icon" href="img/favicon.ico">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styl strony -->
    <link href="css/galeria.css" rel="stylesheet">
    <!-- fontello styles -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <link href="fontello-f17700ff/css/fontello.css" rel="stylesheet">

    <!--JS-->
    <script src="js/fullscreanpfoto.js"></script>
    
</head>
<body>
	 <?php include "include/section-header.php"; ?>
	<!-- Page Content -->
    <header style="padding: unset !important;margin-top: 63.5px;">
          <!-- Slide One - Set the background image for this slide in the line below -->
    <?php

    $connect = mysqli_connect("serwer_adres", "database_serwer", "password");
 		mysqli_select_db($connect, "urcn");
 		

 		$pobierzVideoCode = mysqli_query($connect, "SELECT link from films where visible='1';");
 		$row = mysqli_fetch_array($pobierzVideoCode);
 		$link = $row['link'];
 		$videoCode = substr($link, -11);
 		
    function show_full_photo($zdjecie) {
  		$connect = mysqli_connect("serwer_adres", "database_serwer", "password");
   		mysqli_select_db($connect, "urcn");

   		$pobierz = mysqli_query($connect, "SELECT * from zdjecia where id='$zdjecie';");
  		$row = mysqli_fetch_array($pobierz);
      $rok = substr($row['add_date'], 0, 4);
  		$miesiac = substr($row['add_date'], 4, 4);
  		$dzien = substr($row['add_date'], 8, 2);
  		$godzina = substr($row['add_date'], 11, 8);

	$liczby = array("-01-", "-02-", "-03-","-04-", "-05-", "-06-","-07-", "-08-", "-09-","-10-", "-11-", "-12-");
	$skroty   = array(" jan ", " feb ", " mar ", " apr ", " may ", " jun ", " jul ", " aug ", " sep ", " oct ", " nov ", " dec ");

	$nowymiesiac = str_replace($liczby, $skroty, $miesiac);
	

	$nowadata = $dzien.$nowymiesiac.$rok.' '.$godzina;

	$ago = time_since(strtotime(date('d M Y H:i:s'))-strtotime($nowadata)).' temu';

		 
		
		    
    	echo '<div class="card shadow-sm" style="background-color: black;border-radius: unset;">  
          <div id="sliderimg" style="background-image: url('.$row['link'].'); background-repeat: no-repeat;  background-position: center; background-size: contain; width: 100%; height: 80vh;">

          <div class="card-body">
         <center><a href="galeria.php#'.$row['id'].'"><button type="button" class="btn btn-primary" onclick="">Zamknij</button></a></center>
                <!--p class="text-light float-right" style="margin-top: 63vh;">
            '.$row['author'].'
            <br><small class="float-right">'.$ago.'</small>
          </p-->
            </div>
          </div>
          <a class="carousel-control-prev fixed-left" onclick="prev()" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Poprzedni</span>
        </a>
        <a class="carousel-control-next fixed-right" onclick="next()" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Następny</span>
        </a>
    	</div>';
  		}

  		if (isset($_GET['zdjecie'])) {
    	show_full_photo($_GET['zdjecie']);
  		}

		?>

          <!--div class="carousel-item active" style="background-image:url(<?php //echo $rows[0]['link']; ?>);">
          	<div class="carousel-caption"-->

        </div>
    	</div>


      	</div>
    </header>
    <div style="padding-top: 10px;"><div class="container py-5"><iframe width="100%" height="500vh" <?php echo 'src="https://www.youtube.com/embed/'.$videoCode.'"'; ?> frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="margin-top: 2%;"></iframe></div></div>

	<div class="container py-5">

      <div class="row">
        <?php

 		//POBIERANIE Z BAZY WSZYSTKICH DANYCH
 		$connect = mysqli_connect("serwer_adres", "database_serwer", "password");
 		mysqli_select_db($connect, "urcn");
 		$pobierz = mysqli_query($connect, "SELECT * FROM zdjecia;");

 		$rows = array();

		 //loop start
		 while ($row = mysqli_fetch_array($pobierz)) {
		    $rows[] = array(
        'link' => $row['link'],
        'author' => $row['author'],
        'add_date' => $row['add_date'],
        'id' => $row['id']
   		);
	}


 		$ile =  mysqli_query($connect, "SELECT COUNT(link) as 'ile' from zdjecia;");
 		$dane = mysqli_fetch_array($ile);
 		$ilosczdjec = $dane['ile'];
 		

 		function time_since($since) {
    	$chunks = array(
        array(60 * 60 * 24 * 365 , 'rok'),
        array(60 * 60 * 24 * 30 , 'miesiąc'),
        array(60 * 60 * 24 * 7, 'tygodni'),
        array(60 * 60 * 24 , 'dni'),
        array(60 * 60 , 'godzin'),
        array(60 , 'minut'),
        array(1 , 'sekund')
    );

    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0) {
            break;
        }
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}	";
    return $print;
}

	for ($i=  $ilosczdjec; $i > 0 ; $i--) { 


	$rok = substr($rows[$i-1]['add_date'], 0, 4);
	$miesiac = substr($rows[$i-1]['add_date'], 4, 4);
	$dzien = substr($rows[$i-1]['add_date'], 8, 2);
	$godzina = substr($rows[$i-1]['add_date'], 11, 8);


	$liczby = array("-01-", "-02-", "-03-","-04-", "-05-", "-06-","-07-", "-08-", "-09-","-10-", "-11-", "-12-");
	$skroty   = array(" jan ", " feb ", " mar ", " apr ", " may ", " jun ", " jul ", " aug ", " sep ", " oct ", " nov ", " dec ");

	$nowymiesiac = str_replace($liczby, $skroty, $miesiac);
	

	$nowadata = $dzien.$nowymiesiac.$rok.' '.$godzina;

	$ago = time_since(strtotime(date('d M Y H:i:s'))-strtotime($nowadata)).' temu';


	
 		echo '<div class="col-md-4" id="'.$rows[$i-1]['id'].'">
          <div class="card mb-4 shadow-sm">
            <a href="galeria.php?zdjecie='.$rows[$i-1]['id'].'"><img class="zdjecie" src='.$rows[$i-1]['link'].'  width="100%" style="background-color: grey;" alt="Zdjęcie" title="Zdjęcie"></a>
            <div class="card-body">
                  <a href="galeria.php?zdjecie='.$rows[$i-1]['id'].'"><button type="button" onclick="viewphoto()" class="btn btn-sm btn-outline-secondary">View</button></a>
                <small class="text-muted float-right">
						'.$ago.'
						<br><small class="float-right">'.$rows[$i-1]['author'].'</small>
					</small>
            </div>
           </div>
        </div>';
	}
?>
	</div>
    <footer class="fixed-bottom bg-dark">
      <div class="footer">
        <p class="m-0 text-center text-white"><?= date("Y") != 2019 ? "2019-".date("Y") : 2020 ?> Copyright &copy; SnaYQ</p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>