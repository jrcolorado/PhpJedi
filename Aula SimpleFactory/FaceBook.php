<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class FaceBook{
    
    public function creatPost(){
        return new Post();
    }
}

class Post {
    private $autor;
    private $message;
    function getAutor() {
        return $this->autor;
    }

    function getMessage() {
        return $this->message;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setMessage($message) {
        $this->message = $message;
    }


}

