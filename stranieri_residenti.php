<!DOCTYPE HTML>

<html>
	<head>
		<title>Stranieri residenti</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="icon" href="images/icon.png">
	</head>
	<body class="is-preload">

			<div id="wrapper">


					<header id="header">
						<a href="index.html" class="logo"><strong>TEAM 1</strong> <span>con amore ed impegno ❤️</span></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>


					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="popolazione_eta.php">Popolazione per età e sesso</a></li>
							<li><a href="stranieri_residenti.php">Stranieri residenti</a></li>
							<li><a href="decessi.php">Decessi</a></li>
						</ul>
					</nav>


					<div id="main" class="alt">

							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Stranieri residenti</h1>
									</header>

									<span class="image main">
										
<?php

	$url_file_csv = "csv_files/Stranieri_Residenti_Nazionalità_Sesso.csv";

	$file_csv = fopen($url_file_csv, "r");

	$n_colonne = count(fgetcsv($file_csv));

  echo ' 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {"packages":["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ["Nazionalita", "Persone"],
  ';

	while(!feof($file_csv)){

		$riga = fgetcsv($file_csv);

    $somma = $riga[1] + $riga[2];
    $riga[0] = ucwords(strtolower($riga[0]));

    echo '[" ' . $riga[0] . ' ", '. $somma . '], ';

  }

  echo '
]);

        var options = {
          title: "Residenti per nazionalità",
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById("piechart"));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 100%; height: 500px;"></div>
  ';

	fclose($file_csv);

?>

<!--  #282c44 colore background del tema -->

									</span>


									<p><i>Abbiamo affrontato questo dataset con grande curiosità, siamo del parere che l’intreccio culturale rende ogni paese più ricco culturalmente, e Matera con i suoi 60.000+ abitanti ne ospita altri 10.000 stranieri, ma procediamo ad indicare le etnie più diffuse.</i></p>

									<p>Come ben ci si può aspettare più del 40% di tutti gli stranieri residenti a Matera sono di nazionalità Rumena e Cinese, come d’altronde un po’ ovunque sui nostri territori.<br>
									Le motivazioni per cui si ha una forte presenza dell’etnia Rumena è sicuramente dovuta a fattori geopolitici ed economici, il tasso di sviluppo in Romania è troppo basso e le condizioni di vita sono pessime.<br>
									Per la Cina il discorso è diverso, la maggior parte degli emigrati lo fanno per avere un lavoro stabile in quanto la Cina spesso sfrutta i dipendenti facendoli lavorare molte ore per una 	paga misera.<br>
									Matera si mostra molto favorevole ad accogliere rifugiati e gente in cerca di speranza e di una vita felice, le etnie presenti sul territorio sono variegate e questo rende possibile anche un intreccio di cultura e tradizioni, rendendo Matera un passo avanti anche sotto questo punto di vista.
</p>

									<p><i>I dati relativi che trovate qui sopra sono aggiornati al 2018, sono forniti dal comune di Matera e li trovate a questo <a href="http://dati.comune.matera.it/dataset/stranieri-residenti-nazionalita-e-sesso-al-31-12-2018" alt="" target="_blank"> indirizzo </a>, qual’ora voleste accedervi, il tutto è completamente gratuito ed esportabile in svariati formati, tra cui JSON, XLSX o CSV.</i></p>

								</div>
							</section>

					</div>

					<footer id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy;TeamONE</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>