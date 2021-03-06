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
</head>
<body onload="setStorage()">
  <header>
    <h1 id ="welcome">Futbol jako pasja!</h1>
    <?php include 'nav.php'; ?>
  </header>
  <main>
    <section id="text">
      <h1 class="title">Galeria zdjęć</h1>
      <?php
				echo "<form action='/img/new_favourite' method='POST'>";
        foreach($images as $image)
        {
					$imgPath = "/images/{$image->id()}.{$image->format}";
					$watermarkPath = "/watermark/{$image->id()}_watermark.png";
					$miniPath = "/mini/{$image->id()}_mini.png";
          echo "<p>Autor:{$image->author} Tytuł:{$image->title}</p> <br>";
					echo "<a href=\"{$watermarkPath}\">";
					echo "<img src=\"{$miniPath}\">";
					echo "</a> <br>";
					$checked = "";
					if(isset($_SESSION['favourite'])){
						if(in_array($image->id(), $_SESSION['favourite']))
						{
							$checked = 'checked';
						}
					}
					echo "Ulubione:<input type='checkbox' name='favourite[]' value='{$image->id()}' {$checked}>";
        }
				echo "<br><input type='submit' value ='Dodaj do ulubionych'>";
				echo "</form>";
				echo "<form action='/images_list' method='GET'>";
				echo "<input type='hidden' name='page' value='$page'>";
				if($page != 1){
				echo "<input type='submit' name='move' value='before'>";
				}
				echo "<input type='submit' name='move' value='next'>";
				echo "</form>";
				if(isset($_SESSION['error'])) {
	        $string_error = implode(' ',$_SESSION['error']);
	        session_unset($_SESSION['error']);
	        echo $string_error;
	      }
      ?>
    </section>
  </main>
  <?php include 'aside.php'; ?>
  <?php include 'footer.php' ?>
  <script>
    <?php include '../web/static/storage.js'; ?>
  </script>
</body>
</html>
