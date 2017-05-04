<?php

$dsn ="mysql:dbname=teste;host=localhost";
$dbuser= "root";
$dbpass= "475236";

try{
			$pdo = new PDO($dsn, $dbuser, $dbpass);

			$codigo ='20';
			$descricao = "lei dos gatos preto ";

			$sql = "INSERT INTO leis SET codigo =' $codigo', descricao = '$descricao'";
			$sql = $pdo->query($sql);

			echo "Lei cadastrada com sucesso !!!".$pdo->lastInsertId();		


}catch(PDOEXception $e){
	echo "Falhou: ".$e->getMessage();
}


?>