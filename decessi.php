<!DOCTYPE HTML>

<html>
	<head>
		<title>Decessi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" href="images/icon.png">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><strong>TEAM 1</strong> <span>con amore ed impegno ❤️</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="popolazione_eta.php">Popolazione per età e sesso</a></li>
							<li><a href="stranieri_residenti.php">Stranieri residenti</a></li>
							<li><a href="decessi.php">Decessi</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Decessi</h1>
									</header>

									<span class="image main">
										<?php


	$url_file_csv = "csv_files\decessi_matera_2020.csv";

	$file_csv = fopen($url_file_csv, "r");

	$n_colonne = count(fgetcsv($file_csv));

  $d15 = 0; 
  $d16 = 0;
  $d17 = 0;
  $d18 = 0;
  $d19 = 0;
  $d20 = 0;

  $anno = 2015;

  echo '
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {"packages":["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Year", "Morti"],
  ';

	while(!feof($file_csv)){

		$riga = fgetcsv($file_csv);

    $d15 += $riga[9]; 
    $d16 += $riga[10];
    $d17 += $riga[11];
    $d18 += $riga[12];
    $d19 += $riga[13];
    $d20 += $riga[14];

  }

  $anni_morti = array($d15, $d16, $d17, $d18, $d19, $d20);
  for ($i=0; $i < 6 ; $i++) { 
        echo '[" '. $anno.' ", '. $anni_morti[$i].'],';
        $anno++;
  }

      echo ']);

            var options = {

            title: "Andamento decessi",
            curveType: "function",
            legend: { position: "bottom" },
         };

          var chart = new google.visualization.LineChart(document.getElementById("curve_chart"));

          chart.draw(data, options);
        }
      </script>
      <div id="curve_chart" style="width: 100%; height: 500px"></div>
    ';



	fclose($file_csv);


										?>


									</span>


									<p>Questo DataSet è stato scelto in un’ottica abbastanza triste date le circostanze, questo <i>Covid-19</i> ha reso il 2020 l’anno di picco per le morti, ma analizziamo nei dettagli.</p>

									<p>Abbiamo scelto di integrare questo grafico in modo da tale da avere una visione quanto più realistica e a primo impatto, come ci suggerisce la curva difatti possiamo notare che nel 2015 le morti erano solamente di 181 abitanti che a fronte dei 60.000 che ospita Matera sono una sciocchezza.<br>
									Tuttavia la curva inizia a salire, questo anche dovuto al fatto che la popolazione Materana presentava in quegli anni per lo più cittadini anziani, di conseguenza i tre anni successivi suggeriscono un aumento del tasso di mortalità che ci porta nel 2018 a far fronte a quasi 200 morti, ma nel 2019 invece i fatti si fanno interessanti perché il tasso di mortalità ritorna basso fino ai 185, questo fenomeno ci è stato difficile comprenderlo e ci sforziamo di capire il perché di questa diminuzione ma chissà, le persone avranno aspettato a morire per vedere Matera capitale della cultura.<br>
									Infine troviamo la triste verità che mostra un aumento della curva, ahimè aggiornato solamente ad Aprile 2020, ma che abbiamo motivo di credere che possa solo essere aumentato, il covid ha strappato tante vite anche al meridione e ai nostri territori.<br></p>


									<p><i>I dati relativi che trovate qui sopra sono aggiornati al 2020, sono forniti dal comune di Matera e li trovate a <a href="http://dati.comune.matera.it/dataset/progressivo-decessi-giornalieri-anno-2020" alt="" target="_blank">questo indirizzo</a>, qual’ora voleste accedervi, il tutto è completamente gratuito ed esportabile in svariati formati, tra cui JSON, XLSX o CSV.</i></p>
								</div>

							</section>

					</div>
					
				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy;TeamONE</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>