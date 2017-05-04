<?php

$dsn ="mysql:dbname=teste;host=localhost";
$dbuser= "root";
$dbpass= "475236";

try{
			$pdo = new PDO($dsn, $dbuser, $dbpass);
			$sql = "SELECT * FROM leis";
			$sql = $pdo->query($sql);		
			
					echo "ok há leis cadastradas!";
							
}catch(PDOEXception $e){
	echo "Falhou: ".$e->getMessage();
}


?>