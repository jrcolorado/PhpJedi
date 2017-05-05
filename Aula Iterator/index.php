<?php

require 'Classes.php';

$book1 = new Book("java web", "Claudio Mario");
$book2 = new Book("Oracle banco", "juliano Ferreira");
$book3 = new Book("PHP para Iniciante", "Julia Gomes");
$book4 = new Book("Ajax para Web","Tereza Iolanda");


$bookList = new BookList();
$bookList->addBook($book1);
$bookList->addBook($book2);
$bookList->addBook($book3);
$bookList->addBook($book4);

/*
echo "total de livros: ".$bookList->count();
echo "<hr/>";
$bookList->removeBook($book2);
echo "<hr/>";
echo "total de livros: ".$bookList->count();
echo "<hr/>";
 * */
/*
$livro1 = $bookList->current();
echo "Livro 1: ".$livro1->getTitulo()."--".$livro1->getAutor()."<br/>";
$bookList->next();
$livro2 = $bookList->current();
echo "Livro 2: ".$livro2->getTitulo()."--".$livro2->getAutor()."<br/>";
*/
while($bookList->valid()){
    $livro = $bookList->current();
    echo "Livro :".$livro->getTitulo()."-- Autor: ".$livro->getAutor()."<br/>";
    
    $bookList->next();
}