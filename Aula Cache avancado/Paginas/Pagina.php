<html>
    <head>
        <title> Página de teste</title>
    </head>
    <body>
        <?php
        try{
            $pdo = new PDO($dsn = "mysql:dbname=posts;host=localhost", "root", "475236");
            $sql="SELECT * FROM vendas ORDER BY RAND()";
            $sql = $pdo->query($sql);
            foreach ($sql->fetchAll() as $vendas){
                $cor = rand(0, 999999);
                $len = rand(0, 100);
                ?>
        <div style="width:250px;float: left;margin: 20px ;background-color:#<?php echo $cor; ?>">
            <strong> <?php echo $vendas['medico'];?></strong><br/>
            <?php echo substr($vendas['produto'],0, $len);?>
        </div>
       <?php         
            }
        }catch(PDOException $e){
            print_r($e->getMessage());
            
        }?>
       
      
    </body>
</html>

