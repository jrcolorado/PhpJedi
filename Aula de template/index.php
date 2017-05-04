<?php
require 'Template.php';

$array = array(
    "titulo"=> "Aula sobre templates",
    "nome"=> "João Romario"
);

$tpl = new Template('Template.html');
$tpl->render($array);
        