<?php

require "models/PlayerManager.class.php";

class PlayersController {
    private $_playerManager;

    // 1. Méthode quand on crée un nouveau player
    public function __construct() {
        $this->_playerManager = new PlayerManager();
    }

    // 2. Je récupère les donnée fournies par le controller
    public function displayPlayersList() {
        $players = $this->_playerManager->displayPlayers();
        require 'views/showPlayers.view.php';
    }

    // 3. Modifier un joueur et va redifiger vers le template pour modifier le client ajoutClient.view.php
    public function addOnePlayer() {
        require 'views/addPlayer.view.php';
    }

    // 4. Modifier un joueur
    public function modifyOnePlayer() {
        require 'views/modifyPlayer.view.php';
    }

}