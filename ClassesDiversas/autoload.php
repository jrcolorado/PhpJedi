<?php

spl_autoload_register(function ($class){
	if(file_exists($class.'.class.php')){
		require_once($class.'.class.php');
	}	
});


$obj = new Bola();
$obj->setCor('azul');

echo "A cor da bola é: ".$obj->getCor()."<br/><br/>";


$campo = new Campo();
$campo->setDados(20, 30, 40);

echo "Me Dê a largura: ".$campo->getLargura();



?>