<?php

require 'Classes.php';

$usuarioDAO = new UsuarioDAO();
$usuarios = $usuarioDAO->get();

foreach ($usuarios as $usuario){
 echo "ID: ".$usuario->getId()." Nome: ".$usuario->getName()." - Email: ".$usuario->getEmail();   
 echo"<hr/>";
}


