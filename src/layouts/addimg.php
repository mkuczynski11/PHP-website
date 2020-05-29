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
      <h1 class="title">Dodawanie zdjęć</h1>
      <form action='/img/adding' method='POST' enctype="multipart/form-data">
        Autor:<input type='text' name='author'> <br>
        Tytuł:<input type='text' name='title'> <br>
        Znak wodny:<input type='text' name='watermark'> <br>
        Plik:<input type='file' name='img'> <br>
        <input type='submit' value='Dodaj'>
      </form>
      <?php
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
