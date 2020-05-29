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
	<link href = "https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel = "stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<noscript>
		<style>
			#save, #theme, #motyw, #popUp, #info, #formButton, #favPlayer
			{
				display:none;
			}
		</style>
	</noscript>
	<script>
		$(document).ready(function(){
			$('#formButton').click(function(){
			$('#formButton').hide();
			$('#info').fadeIn(3000);
			$('#ocena').fadeIn(3000);
			});
			$('#save').click(function(){
				$("#popUp").dialog("open");
			});
		});
		$(document).ready(function(){
			$( "#info" ).accordion();
			$("#info").hide();
			$( "#popUp" ).dialog();
			$("#popUp").dialog("close");
		} );
	</script>
</head>

<body onload="setStorage();">
		<header>
			<h1 id ="welcome">Futbol jako pasja!</h1>
			<?php include 'nav.php'; ?>
		</header>
		<main>
			<section id="text"><h2 class="title">Formularz</h2>
				<form action="testowa.php">
					Wybierz płeć:
					<input type="radio" name="gender" value="male">Mężczyzna
					<input type="radio" name="gender" value="female">Kobieta
					<input type="radio" name="gender" value="other">Inne <br>
					Drużyna której kibicuje:
					<input type="text" name="team"><br>
					Ulubiony napastnik:
					<select name="forward" size="1">
						<option value="1">Messi</option>
						<option value="2">Ronaldo</option>
						<option value="3">Neymar</option>
					</select> <br>
					Ulubiony pomocnik:
					<select name="midfielder" size="1">
						<option value="1">Iniesta</option>
						<option value="2">Xavi</option>
						<option value="3">Arthur</option>
					</select> <br>
					Ulubiony obrońca:
					<select name="defender" size="1">
						<option value="1">Laporte</option>
						<option value="2">Puyol</option>
						<option value="3">Pique</option>
					</select> <br>
					Ulubiony bramkarz:
					<select name="goalkeeper" size="1">
						<option value="1">TerStegen</option>
						<option value="2">Oblak</option>
						<option value="3">Neuer</option>
					</select> <br>
					Aby zobaczyć swoją drużynę marzeń klinknij w przycisk <button id="save" onclick="saveTeam()" type="button">Zapisz druzyne</button> <br>
					<input type="checkbox" name="question1">Trenowałem/am kiedykolwiek piłkę nożną<br>
					<input type="checkbox" name="question2">Oglądam mecze piłki nożnej<br>
					Ulubiony numer:
					<select name="favNumber" size="1">
						<option  value="7">7</option>
						<option  value="8">8</option>
						<option  value="10">10</option>
						<option  value="11">11</option>
					</select> <br>
					Opinia o stronie: <br>
					<textarea name="opinion" rows="10" cols="50">
					</textarea> <br>
					<input onclick="saveData()" type="submit" value="Wyślij">
					<input type="reset"> <br><br>
				</form>
				<div id="popUp" title="Zbudowales druzyne!">
				<p>Udało Ci się zbudować drużynę!Jeśli chcesz zobaczyć jak wygląda udaj się na strone "Zbuduj drużynę" i kliknij w przycisk "Zbuduj", aby zobaczyć rezultaty!</p>
				</div>
				<button id="formButton" type="button">Pokaż liste zawodników</button> <br>
				<button id="favPlayer" onclick="favPlayer()" type="button">Ulubiony zawodnik</button>
				<div id="info">
					<h3>Napastnicy</h3>
					<div>
						<ol>
							<li>Leo Messi:argentyński piłkarz występujący na pozycji pomocnika lub napastnika w hiszpańskim klubie FC Barcelona, której jest kapitanem oraz w reprezentacji Argentyny, której także jest kapitanem.</li>
							<li>Cristiano Ronaldo:portugalski piłkarz występujący na pozycji skrzydłowego lub napastnika we włoskim klubie Juventus oraz w reprezentacji Portugalii, której jest kapitanem. Uważany jest za jednego z najlepszych piłkarzy w historii futbolu.</li>
							<li>Neymar:brazylijski piłkarz występujący na pozycji pomocnika lub napastnika we francuskim klubie Paris Saint-Germain oraz w reprezentacji Brazylii.</li>
						</ol>
					</div>
					<h3>Pomocnicy</h3>
					<div>
						<ol>
							<li>Iniesta:hiszpański piłkarz występujący na pozycji pomocnika w japońskim klubie Vissel Kobe(wczesniej FC Barcelona). W latach 2006–2018 reprezentant Hiszpanii. Złoty medalista Mistrzostw Świata 2010 oraz Mistrzostw Europy 2008 i 2012.</li>
							<li>Xavi:hiszpański trener i były piłkarz grający na pozycji pomocnika. Mistrz Świata 2010 i dwukrotny Mistrz Europy 2008, 2012. W latach 1998–2015 zawodnik FC Barcelony.</li>
							<li>Arthur:brazylijski piłkarz występujący na pozycji pomocnika w hiszpańskim klubie FC Barcelona.</li>
						</ol>
					</div>
					<h3>Obrońcy</h3>
					<div>
						<ol>
							<li>Laporte:francuski piłkarz występujący na pozycji obrońcy w angielskim klubie Manchester City. Były młodzieżowy reprezentant Francji.</li>
							<li>Puyol:hiszpański piłkarz, reprezentant Hiszpanii – kapitan klubu FC Barcelony grający na pozycji środkowego lub bocznego obrońcy. 15 maja 2014 oficjalnie zakończył karierę.</li>
							<li>Pique:hiszpański piłkarz występujący na pozycji obrońcy w hiszpańskim klubie FC Barcelona, w latach 2009–2018 reprezentant Hiszpanii. Złoty medalista Mistrzostw Świata 2010 i Mistrzostw Europy 2012.</li>
						</ol>
					</div>
					<h3>Bramkarze</h3>
					<div>
						<ol>
							<li>TerStegen:niemiecki piłkarz holenderskiego pochodzenia grający na pozycji bramkarza w hiszpańskim klubie FC Barcelona oraz w reprezentacji Niemiec. W 2017 roku wraz z drużyną narodową zdobył Puchar Konfederacji, będąc podstawowym bramkarzem na tym turnieju.</li>
							<li>Oblak:słoweński piłkarz występujący na pozycji bramkarza w Atlético Madryt.</li>
							<li>Neuer:niemiecki piłkarz występujący na pozycji bramkarza w niemieckim klubie Bayern Monachium oraz w reprezentacji Niemiec, której jest kapitanem.</li>
						</ol>
					</div>
				</div> <br>
			</section>
		</main>
		<?php include 'aside.php'; ?>
		<?php include 'footer.php' ?>
    <script>
      <?php include '../web/static/storage.js'; ?>
    </script>
</body>
</html>
