<?php
require_once 'Model.class.php'; // 1.1. Import connexion à la BDD
require_once 'Contest.class.php'; // 1.2. Import du modèle/class "Player"

class ContestManager extends Model { // 2. Extends class "Model"
    private $contests;

    // 3. Récupération de tous les contests
    public function addPlayer($contest) {
        $this->$contests[] = $contest; 
    }

    // 4. Retourne un tableau avec les contests
    public function getContests() { 
        return $this->$contests;
    }

    // 5. Afficher tous les contests
    public function displayContests() {
        $req = $this->getBdd()->prepare('SELECT * FROM contest;');
        $req->execute();

        $contests = $req->fetchAll(PDO::FETCH_ASSOC);
        return $contests;
    }
}