<?php

class Contest {
    private $_id_contest;
    private $_game_id;
    private $_start_date;
    private $_winner_id;

    // GETTERS
    public function getIdContest() {
        return $this->_id_contest;
    }
    
    public function getGameId() {
        return $this->_game_id;
    }

    public function getStartDate() {
        return $this->_start_date;
    }

    public function getWinnerId() {
        return $this->_winner_id;
    }

    // SETTERS
    public function setIdContest($id) {
        return $this->_id_contest = $id;
    }

    public function setGameId($game_id) {
        return $this->_game_id = $game_id;
    }

    public function setStartDate($start_date) {
        return $this->_start_date = $start_date;
    }

    public function setWinnerId($winner_id) {
        return $this->_winner_id = $winner_id;
    }

}