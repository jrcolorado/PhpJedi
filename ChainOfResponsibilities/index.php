<?php

require 'Classes.php';
$carga = new Carga(50);

$moto = new Moto();
$carro = new Carro();
$caminhonete = new Caminhonete();

$moto->setSucessor($carro);
$carro->setSucessor($caminhonete);

$moto->transport($carga);
        

