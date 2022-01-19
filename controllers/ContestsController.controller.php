<?php

require "models/ContestManager.class.php";

class ContestsController {
    private $_contestManager;

    // 1. Méthode quand on crée un nouveau player
    public function __construct() {
        $this->_contestManager = new ContestManager();
    }

    // 2. Je récupère les donnée fournies par le controller
    public function displayContestsList() {
        $contests = $this->_contestManager->displayContests();
        require 'views/showContests.view.php';
    }

    // 3. Modifier un joueur et va redifiger vers le template pour modifier le client ajoutClient.view.php
    public function addOneGame() {
        require 'views/addContest.view.php';
    }

    // 4. Modifier un joueur
    public function modifyOneGame() {
        require 'views/modifyContest.view.php';
    }

}