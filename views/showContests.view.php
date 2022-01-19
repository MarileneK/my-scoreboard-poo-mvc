<?php

ob_start(); // 1.1

?>

<table class="table">

  <!-- 1. Actualiser les noms des colonnes -->
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jeu</th>
      <th scope="col">Date de début</th>
      <th scope="col">Gagnant</th>
      <th scope="col">Modifier</th>
      <th scope="col">Supprimer</th>
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
      <td><a href="">Modifier</a></td>
      <td><a href="">Supprimer</a></td>
    </tr>

    <?php
    }
    ?>
  </tbody>

</table>

<div>
  <button><a href="addContest.view.php">Ajouter un match</a></button>
</div>

<?php

$content = ob_get_clean(); // 1.2. Tout ce qui sera compris entre le ob_start() et ob_get_clean() sera enregistré dans la variable content
$title = "Liste de tous les matchs"; // 2. On dynamise le titre
require "layout.php"; // 3. C'est comme si on appelait le fichier layout

?>