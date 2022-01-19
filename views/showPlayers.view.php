<?php

ob_start(); // 1.1

?>

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
      <td><a href="/delete?id=<?= $player["id_player"] ?>">Supprimer</a></td>
    </tr>

    <?php
    }
    ?>
  </tbody>

</table>

<div>
  <button><a href="addPlayer.view.php">Ajouter un joueur</a></button>
</div>

<?php

$content = ob_get_clean(); // 1.2. Tout ce qui sera compris entre le ob_start() et ob_get_clean() sera enregistré dans la variable content
$title = "Liste de tous les joueurs"; // 2. On dynamise le titre
require "layout.php"; // 3. C'est comme si on appelait le fichier layout

?>