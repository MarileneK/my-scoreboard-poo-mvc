<?php

ob_start();

?>
    <form method="post" action="<?= URL ?>livres/mv">
        <div class="form-group">
            <label for="titre">Titre :</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?= $livre->getTitre(); ?>">
        </div>
        <div class="form-group">
            <label for="nbPages">Nombre de pages</label>
            <input type="text" class="form-control" id="nbPages" name="nbpages" value="<?= $livre->getNbPages(); ?>">
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" class="form-control" id="auteur" value="<?= $livre->getAuteur(); ?>" name="auteur">
        </div>
        <input type="hidden" name="identifiant" value="<?= $livre->getId() ?>">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php

$content = ob_get_clean();
$titre = 'Modification du livre '.$livre->getId();
require "layout.php";

?>