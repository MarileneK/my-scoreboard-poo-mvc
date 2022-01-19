<?php

ob_start(); // 1.1

?>

<!-- PLAYERS -->
<table class="table">

<!-- 1. Actualiser les noms des colonnes -->
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Email</th>
    <th scope="col">Surnom</th>
    <th scope="col">Modifier</th>
    <th scope="col">Supprimer</th>
  </tr>
</thead>

<!-- 2. Dynamiser les informations dans le tableau -->
<tbody>

  <?php
  foreach($players as $player) {
  ?>
  <tr>
    <th scope="row"><?= $player["id_player"] ?></th>
    <td><?= $player["email"] ?></td>
    <td><?= $player["nickname"] ?></td>
    <td><a href="">Modifier</a></td>
    <td><a href="">Supprimer</a></td>
  </tr>

  <?php
  }
  ?>
</tbody>

</table>

<!-- -------------------------------------------- -->

<!-- GAMES -->

<table class="table">

  <!-- 1. Actualiser les noms des colonnes -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Nombre de joueurs minimum</th>
      <th scope="col">Nombre de joueurs maximum</th>
    </tr>
  </thead>

  <!-- 2. Dynamiser les informations dans le tableau -->
  <tbody>

    <?php
    foreach($games as $game) {
    ?>
    <tr>
      <th scope="row"><?= $game["id_game"] ?></th>
      <td><?= $game["title"] ?></td>
      <td><?= $game["min_players"] ?></td>
      <td><?= $game["max_players"] ?></td>
    </tr>

    <?php
    }
    ?>
  </tbody>

</table>

<!-- -------------------------------------------- -->

<!-- CONTESTS -->

<table class="table">

  <!-- 1. Actualiser les noms des colonnes -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jeu</th>
      <th scope="col">Date de début</th>
      <th scope="col">Gagnant</th>
    </tr>
  </thead>

  <!-- 2. Dynamiser les informations dans le tableau -->
  <tbody>

    <?php
    foreach($contests as $contest) {
    ?>
    <tr>
      <th scope="row"><?= $contest["id_contest"] ?></th>
      <td><?= $contest["game_id"] ?></td>
      <td><?= $contest["start_date"] ?></td>
      <td><?= $contest["winner_id"] ?></td>
    </tr>

    <?php
    }
    ?>
  </tbody>

</table>

<?php

$content = ob_get_clean(); // 1.2. Tout ce qui sera compris entre le ob_start() et ob_get_clean() sera enregistré dans la variable content
$title = "Toutes les informations"; // 2. On dynamise le titre
require "layout.php"; // 3. C'est comme si on appelait le fichier layout

?>