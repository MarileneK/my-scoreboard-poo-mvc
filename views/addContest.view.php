<?php

ob_start(); // 1.1

?>

<form method="POST" action="">

  <div class="form-group">
    <label for="game_id">Jeu</label>
    <input type="number" class="form-control" id="game_id" name="game_id">
  </div>

  <div class="form-group">
    <label for="start_date">Date de début</label>
    <input type="date" class="form-control" id="start_date" name="start_date">
  </div>

  <div class="form-group">
    <label for="winner_id">Gagnant</label>
    <input type="number" class="form-control" id="winner_id" name="winner_id">
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php

$content = ob_get_clean(); // 1.2. Tout ce qui sera compris entre le ob_start() et ob_get_clean() sera enregistré dans la variable content
$title = "Ajouter un match"; // 2. On dynamise le titre
require "layout.php"; // 3. C'est comme si on appelait le fichier layout

?>