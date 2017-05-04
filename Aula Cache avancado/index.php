<?php
function is_valido($cache){
    $ultima_modificacao = filectime($cache);
    $c = time()- $ultima_modificacao;
        if($c >10){
            return false;
        }else {return true;}
    
}
$p = 'Pagina';
if(isset($_GET['p']) && !empty($_GET['p']) && ('Paginas/'.$_GET['p'].'.php')){
    $p = $_GET['p'];
}

if(file_exists('Caches/'.$p.'.cache') && is_valido('Caches/'.$p.'.cache')){
    require 'Caches/'.$p.'.cache';
}else {
    
ob_start();
require 'Paginas/'.$p.'.php';
$html= ob_get_contents();
ob_end_clean();
file_put_contents('Caches/'.$p.'.cache', $html);
echo $html;
   
}