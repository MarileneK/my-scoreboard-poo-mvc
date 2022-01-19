<?php

require "models/GameManager.class.php";

class GamesController {
    private $_gameManager;

    // 1. Méthode quand on crée un nouveau player
    public function __construct() {
        $this->_gameManager = new GameManager();
    }

    // 2. Je récupère les donnée fournies par le controller
    public function displayGamesList() {
        $games = $this->_gameManager->displayGames();
        require 'views/showGames.view.php';
    }

    // 3. Modifier un joueur et va redifiger vers le template pour modifier le client ajoutClient.view.php
    public function addOneGame() {
        require 'views/addGame.view.php';
    }

    // 4. Modifier un joueur
    public function modifyOneGame() {
        require 'views/modifyGame.view.php';
    }

}