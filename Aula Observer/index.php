<?php

require 'Classes.php';

$olheiro = new UsuarioObserver();
$usuario = new Usuario("joao romario da silva ferreira sobrinho");
$usuario->attach($olheiro);

echo "<hr/>";
echo "Meu nome é: ".$usuario->getName();
echo "<hr/>";

$usuario->setName("Antonio pedroso da Silva Silveira");

echo "Meu nome é: ".$usuario->getName();
echo "<hr/>";
