<?php

ob_start(); // 1.1

?>

<table class="table">

  <!-- 1. Actualiser les noms des colonnes -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Nombre de joueurs minimum</th>
      <th scope="col">Nombre de joueurs maximum</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
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
      <td><a href="">Modifier</a></td>
      <td><a href="">Supprimer</a></td>
    </tr>

    <?php
    }
    ?>
  </tbody>

</table>

<div>
  <button><a href="<?= URL ?>/jeux/add">Ajouter un jeu</a></button>
</div>

<?php

$content = ob_get_clean(); // 1.2. Tout ce qui sera compris entre le ob_start() et ob_get_clean() sera enregistré dans la variable content
$title = "Liste de tous les jeux"; // 2. On dynamise le titre
require "layout.php"; // 3. C'est comme si on appelait le fichier layout

?>