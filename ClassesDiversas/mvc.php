<?php
try{
	$dsn = "mysql:dbname=posts;host=localhost";
	$dbuser="root";
	$dbpass="475236";
	$pdo =new PDO($dsn, $dbuser, $dbpass);

}catch(PDOException $e){
	die($e->getMessage());

}
$qt_por_pagina = 10;

$total=0;
$sql= "SELECT COUNT(*) as c FROM vendas";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$total = $sql['c'];
$paginas = $total / $qt_por_pagina;

$pg = 1;
if(isset($_GET['p']) && !empty($_GET['p'])){
	$pg = addslashes($_GET['p']);
}
$p = ($pg - 1) * $qt_por_pagina;


$sql= "SELECT * FROM vendas LIMIT $p, $qt_por_pagina";
$sql= $pdo->query($sql);

	if($sql->rowCount() > 0){
		foreach ($sql->fetchAll() as $item) {
		echo $item['cliente'].'<==>'.$item['produto'].'<br/>';
		
		}

	}

	echo "<hr/>";
	for($q=0; $q< $paginas;$q++){
			#echo '<a href="./post.php?p='.($q+1).'">['.($q+1).']</a>';
		    echo '<a href="./mvc.php?p='.($q+1).'">['.($q+1).']</a>';
	}


?>
