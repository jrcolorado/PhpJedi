<?php

require 'FaceBook.php';

$fb= new FaceBook();

$post = $fb->creatPost();
$post->setAutor("joao romario");
$post->setMessage("esta é a postagem do autor jr colorado");

echo "Autor: ".$post->getAutor()." - Postagem: ".$post->getMessage();
echo "<hr/>";


$post2 = $fb->creatPost();
$post2->setAutor("Mario da costa ");
$post2->setMessage("Mario da costa concluiu uma nova postagem");

echo "Autor: ".$post2->getAutor()." - Postagem: ".$post2->getMessage();
echo "<hr/>";

