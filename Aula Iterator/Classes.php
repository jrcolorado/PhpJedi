<?php

class Book {
    
    private $autor;
    private $titulo;
    
    public function __construct($t, $a) {
        $this->autor=$a;
        $this->titulo=$t;
    }
    public function getAutor() {
        return $this->autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }


}

class BookList{
    private $books;
    private $currentIndex;
    
    public function __construct() {
        $this->currentIndex=0;
    }


    public function addBook(Book $book){
        $this->books[]=$book;
        
    }
    public function count(){
        return count($this->books);
    }
    public function removeBook(Book $book){
        foreach ($this->books as $key => $value){
            if(($value->getTitulo().$value->getAutor()) == ($book->getTitulo().$book->getAutor())){
                unset($this->books[$key]);
                echo "Livro :".$value->getTitulo().$value->getAutor();
            }
        }
        $this->books = array_values($this->books);
    }
    
    public function current(){ 
        return $this->books[$this->currentIndex];
        
    }
    public function next(){
        $this->currentIndex++;
    }
    public function key(){
    return $this->currentIndex;
        }
        
    public function reset(){
        $this->currentIndex=0;
        
    }
    public function valid(){
        if(isset($this->books[$this->currentIndex])){
            return true;
        }else{
            return false;
        }
    }
    
    
    
    
    
}

