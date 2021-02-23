<!DOCTYPE HTML>

<html>
	<head>
		<title>Popolazione per età e sesso</title>
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
										<h1>Popolazione per età e sesso</h1>
									</header>
									<span class="image main">

<?php

	$url_file_csv = "csv_files/Popolazione_Età_Anno.csv";

	$file_csv = fopen($url_file_csv, "r");

	$n_colonne = count(fgetcsv($file_csv));


			echo '
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    		<script type="text/javascript">
      		google.charts.load("current", {"packages":["bar"]});
      		google.charts.setOnLoadCallback(drawChart);

      		function drawChart() {
        		var data = google.visualization.arrayToDataTable([
          		["Età", "Uomini", "Donne"],';

	while(!feof($file_csv)){

		$riga = fgetcsv($file_csv);

		echo '
          		["'. $riga[0] .'", '. $riga[1] .', '. $riga[2] .'],

        		';

	}

	 echo '
	 			]);
        		var options = {
          		chart: {
            		title: "Popolazione per età, anno e sesso",
            		subtitle: "Popolazione per età, anno e sesso, aggiornato al 2018",
          		}
        		};

        		var chart = new google.charts.Bar(document.getElementById("columnchart_material"));

        		chart.draw(data, google.charts.Bar.convertOptions(options));
      		}
    		</script>
    		<div id="columnchart_material" style="width: 100%; height: 500px;"></div>

			';

	fclose($file_csv);

?>

									</span>
									<p>Quando ci siamo chiesti perché analizzare la popolazione la nostra prima domanda è stata: <i>“Quale sarà l’età media della popolazione Materana?”</i>
									Devo dire con grande orgoglio che non ci saremmo aspettati questi risultati, prima di aprire questo file e generare il grafico abbiamo supposto ci fossero più persone anziane che giovani ma con grande piacere ci dobbiamo ricredere, diamo un’occhiata ai dati insieme!
									</p>
									<p>Possiamo subito notare che la maggior parte della popolazione si trova in una fascia d’età che va dai 39 anni fino ai 60, rendendo questa fascia di popolazione la più presente nel territorio.
									<br>Ma come possiamo notare i giovani non sono pochi, anzi, è forte la presenza di giovani sul territorio, prevalentemente di gente che va dai 18 ai 39 anni e con un pizzico di attenzione possiamo notare che la maggior parte di questi ragazzi sono uomini, analizzando i 20enni possiamo vedere come gli uomini siano circa 344 invece le donne solamente 285 che comunque rimane un buon numero.<br>
									Questo per la maggior parte dovuto al fatto che le ragazze Materane sono  più propense ad intraprendere un percorso universitario al Nord e che spesso finiscono per lavorare e rimanere a vivere lì, questo fenomeno in chiave maschile è presente lo stesso ma in maniera leggermente più lieve, difatti gli uomini spesso vengono coinvolti in aziende di famiglia tramandate da tempo, come consueta abitudine del sud Italia.
</p>
									<p><i>I dati relativi che trovate qui sopra sono aggiornati al 2018, sono forniti dal comune di Matera e li trovate a <a href="http://dati.comune.matera.it/dataset/popolazione-eta-anno-2018" alt="" target="_blank">questo indirizzo</a>, qual’ora voleste accedervi, il tutto è completamente gratuito ed esportabile in svariati formati, tra cui JSON, XLSX o CSV.</i></p>
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