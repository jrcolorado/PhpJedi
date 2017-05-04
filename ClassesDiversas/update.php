<?php

$dsn ="mysql:dbname=teste;host=localhost";
$dbuser= "root";
$dbpass= "475236";

try{
			$pdo = new PDO($dsn, $dbuser, $dbpass);

			
			$novadescricao = "lei do joao romario";

			$sql = "UPDATE leis SET descricao = '$novadescricao' WHERE codigo = 19";
			$pdo->query($sql);

			echo "Lei Alterada com sucesso !!!";		


}catch(PDOEXception $e){
	echo "Falhou: ".$e->getMessage();
}


?>