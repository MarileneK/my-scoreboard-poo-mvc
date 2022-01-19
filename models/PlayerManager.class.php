<?php
require_once 'Model.class.php'; // 1.1. Import connexion à la BDD
require_once 'Player.class.php'; // 1.2. Import du modèle/class "Player"

class PlayerManager extends Model { // 2. Extends class "Model"
    private $players;

    // 3. Récupération de tous les players
    public function addPlayer($user) {
        $this->$players[] = $user; 
    }

    // 4. Retourne un tableau avec les players
    public function getPlayers() { 
        return $this->$players;
    }

    // 5. Afficher tous les players
    public function displayPlayers() {
        $req = $this->getBdd()->prepare('SELECT * FROM player');
        $req->execute();

        $players = $req->fetchAll(PDO::FETCH_ASSOC);
        return $players;
    }
}