<?php

ob_start(); // 1.1

?>

<form method="POST" action="">
  <div class="form-group">
    <label for="title">Titre</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="min_players">Nombre de joueurs minimum</label>
    <input type="number" class="form-control" id="min_players" name="min_players">
  </div>

  <div class="form-group">
    <label for="max_players">Nombre de joueurs maximum</label>
    <input type="number" class="form-control" id="max_players" name="max_players">
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php

$content = ob_get_clean(); // 1.2. Tout ce qui sera compris entre le ob_start() et ob_get_clean() sera enregistré dans la variable content
$title = "Ajouter un jeu"; // 2. On dynamise le titre
require "layout.php"; // 3. C'est comme si on appelait le fichier layout

?>