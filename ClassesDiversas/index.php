<?php
#require 'leis.php';
require 'usuario.php';

$usuario = new Usuario(2);
$usuario->setNome("joao romario");
$usuario->setEmail("joaoromario@gmail.com");
echo "Meu nome é: ".$usuario->getNome()." e meu email é: ".$usuario->getEmail()."<h1/>";
$usuario->delete();
echo "Usuario excluido !!"

#$u = new leis();
#$res = $u->selecionar(2);
#$inser = $u->inserir("25","lei municipal para pesca");
#print_r($res);
#$excluir= $u-> excluir(17);

/*
$usuario = new Usuario();
$usuario->setEmail("Ana@terra.com.br");
$usuario->setSenha("999");
$usuario->setNome("Ana tereza");
$usuario->salvar();
echo "Meu nome é: ".$usuario->getNome();
*/


?>
