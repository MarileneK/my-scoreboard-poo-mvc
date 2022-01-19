<?php
require_once 'Model.class.php'; // 1.1. Import connexion à la BDD
require_once 'Game.class.php'; // 1.2. Import du modèle/class "Player"

class GameManager extends Model { // 2. Extends class "Model"
    private $games;

    // 3. Récupération de tous les games
    public function addPlayer($game) {
        $this->$games[] = $game; 
    }

    // 4. Retourne un tableau avec les games
    public function getGames() { 
        return $this->$games;
    }

    // 5. Afficher tous les games
    public function displayGames() {
        $req = $this->getBdd()->prepare('SELECT * FROM game');
        $req->execute();

        $games = $req->fetchAll(PDO::FETCH_ASSOC);
        return $games;
    }
}