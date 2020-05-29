<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Futbol jako pasja!</title>
	<meta name="description" content="Strona poświęcona piłce nożnej, w której pokazuje swoje hobby." />
	<meta name="keywords" content="piłka, futbol, pasja, sportowcy" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="author" content="Martin Kuczyński" />
  <style>
    <?php include '../web/static/css/style.css'; ?>
  </style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<noscript>
		<style>
			#theme, #motyw
			{
				display:none;
			}
		</style>
	</noscript>
</head>

<body onload="setStorage()">
		<header>
			<h1 id ="welcome">Futbol jako pasja!</h1>
			<?php include 'nav.php'; ?><?php include 'nav.php'; ?>
		</header>
		<main>
			<section id="text"><h2 class="title">Kibicowanie</h2>
				<table>
					<tr>
						<th>Drużyna</th>
						<th>Ulubiony zawodnik</th>
					</tr>
					<tr>
						<td>FC Barcelona</td>
						<td>Leo Messi</td>
					</tr>
					<tr>
						<td>Real Madrid</td>
						<td>Eden Hazard</td>
					</tr>
					<tr>
						<td>PSG</td>
						<td>Netmar Jr.</td>
					</tr>
					<tr>
						<td>Juventus</td>
						<td>Cristiano Ronaldo</td>
					</tr>
				</table>
				<p>Nie zgadzasz się z moją opinią dotyczącą najlepszego zawodnika z danej drużyny?</p> <br>
				<p>Skontaktuj się ze mną na mój mail: <a href="mailto:mojmail@example.com">Martin Kuczyński</a></p>
			</section>
		</main>
		<?php include 'aside.php'; ?>
		<?php include 'footer.php' ?>
    <script>
      <?php include '../web/static/storage.js'; ?>
    </script>
</body>
</html>
