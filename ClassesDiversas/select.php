<?php

$dsn ="mysql:dbname=teste;host=localhost";
$dbuser= "root";
$dbpass= "475236";

try{
			$pdo = new PDO($dsn, $dbuser, $dbpass);

			#$sql = "SELECT * FROM leis WHERE id='2'";
			$sql = "SELECT * FROM leis";
			$sql = $pdo->query($sql);
			
				if($sql->rowCount() > 0){
					foreach ($sql->fetchAll() as $leis) {
						echo "ID: ".$leis["id"]."--"."Código: ".$leis["codigo"]."--"."Descrição: ".$leis["descricao"]."<br>";
					}

				} else {
					echo "Não há leis cadastradas!";
				}
			


}catch(PDOEXception $e){
	echo "Falhou: ".$e->getMessage();
}


?>