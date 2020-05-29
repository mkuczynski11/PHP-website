<nav>
  <ul class="navigation">
    <li class="main">Nawigacja
      <ul>
        <li class="menu"><a href="<?= '/' ?>">Strona glowna</a></li>
        <li class="menu"><a href="<?= '/kibicowanie' ?>">Kibicowanie</a></li>
        <li class="menu"><a href="<?= '/formularz' ?>">Formularz</a></li>
        <?php if(!isset($_SESSION['user_id'])) : ?>
          <li class="menu"><a href="<?= '/signup' ?>">Rejestracja</a></li>
          <li class="menu"><a href="<?= '/login' ?>">Logowanie</a></li>
        <?php else : ?>
          <li class="menu"><a href="<?= '/signout' ?>">Wyloguj</a></li>
        <?php endif; ?>
      </ul>
    </li>
    <li class="main"><a href="<?= '/images_list' ?>">Galeria</a>
      <ul>
        <li class="menu"><a href="<?= '/img/new' ?>">Dodawanie zdjęć</a></li>
        <li class="menu"><a href="<?= '/imgs/favourite' ?>">Ulubione</a></li>
      </ul>
    </li>
    <li class="main"><a href="<?= '/zbudujdruzyne' ?>">Druzyna</a></li>
  </ul>
</nav>
