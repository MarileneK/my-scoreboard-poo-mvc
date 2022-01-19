<?php

class Player {
    private $_id_player;
    private $_email;
    private $_nickname;

    // GETTERS
    public function getIdPlayer() {
        return $this->_id_player;
    }
    
    public function getEmail() {
        return $this->_email;
    }

    public function getNickName() {
        return $this->_nickname;
    }

    // SETTERS
    public function setIdPlayer($id) {
        return $this->_id_player = $id;
    }

    public function setEmail($email) {
        return $this->_email = $email;
    }

    public function setNickname($nickname) {
        return $this->_nickname = $nickname;
    }

}