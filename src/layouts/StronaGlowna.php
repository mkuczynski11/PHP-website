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
			<?php include 'nav.php'; ?>
		</header>
		<main>
			<section id="text"><h2 class="title">Strona glowna</h2>
			<h2>Dlaczego futbol?</h2>
			<p>Jestem wielkim fanem piłki nożnej od kiedy pamiętam. Wszystko zaczęło się właściwie przez mojego tatę, z którym zacząłem oglądać mecze, co następnie przerodziło się w mój własny udział w tym sporcie.</p> <br>
			<h2>Moja "kariera"</h2>
			<p>Zacząłem trenować w wieku 8 lat w zespole "Concordia Elbląg". Uprawiałem ten sport przez niespełna 6 lat, po czym doszedłem do wniosku że kariera sportowca nie jest dla mnie i zdecydowałem, że chcę grać w futbol tylko i wyłącznie dla przyjemności</p> <br>
			<h2>Komu kibicuje?</h2>
			<p>Moim ulubionym zespołem od kiedy pamiętam była, jest i będzie FC Barcelona. Uwielbiam oglądać ich spotkania i czerpię wielką radość z bycia częścią społeczności kibiców tej drużyny.</p> <br>
			</section>
			<section id="cite"><h2 class="title" style="border-bottom:none">Cytat</h2><em>Dopóki piłka w grze, wszystko jest możliwe.~Kazimierz Górski</em></section>
		</main>
		<?php include 'aside.php'; ?>
		<?php include 'footer.php' ?>
    <script>
      <?php include '../web/static/storage.js'; ?>
    </script>
</body>
</html>
