<?php

class Game {
    private $_id_game;
    private $_title;
    private $_min_players;
    private $_max_players;

    // GETTERS
    public function getIdGame() {
        return $this->_id_game;
    }
    
    public function getTitle() {
        return $this->_title;
    }

    public function getMinPlayers() {
        return $this->_min_players;
    }

    public function getMaxPlayers() {
        return $this->_max_players;
    }

    // SETTERS
    public function setIdGame($id) {
        return $this->_id_game = $id;
    }

    public function setTitle($title) {
        return $this->_title = $title;
    }

    public function setMinPlayers($min_players) {
        return $this->_min_players = $min_players;
    }

    public function setMaxPlayers($max_players) {
        return $this->_max_players = $max_players;
    }

}