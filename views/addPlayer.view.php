<?php

ob_start(); // 1.1

?>

<form method="POST" action="">

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="nickname">Surnom</label>
    <input type="text" class="form-control" id="nickname" name="nickname">
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>

<?php

$content = ob_get_clean(); // 1.2. Tout ce qui sera compris entre le ob_start() et ob_get_clean() sera enregistré dans la variable content
$title = "Ajouter un joueur"; // 2. On dynamise le titre
require "layout.php"; // 3. C'est comme si on appelait le fichier layout

?>