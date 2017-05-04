<?php


$json = file_get_contents("http://www.correiodoestado.com.br/climatempo/json/");

/* 
 * $json recebe os dados do json aprtir do link
 * $json = json_decode($json) decodifica o json 
 * 
 */
$json = json_decode($json);

echo "<hr/>";
print_r($json);
echo "<hr/>";
echo "objetos: ".count($json);
echo "<hr/>";

foreach ($json->previsao as $item){
    echo "Cidade: ".$item->cidade."<br/>"." - Baixa:".$item->baixa."<br/>"." - Alta:".$item->alta."<br/>"." - (".$item->frase.")"."<hr/>";
}


/* 
 * cria um objeto 
 * insere o novo objeto no $json
 * 
 */
$obj= new stdClass();
$obj->codigo = 111;
$obj->cidade = "porto alegre";
$obj->uf= "RS";
$obj->baixa = 01;
$obj->alta =02;
$obj->ico=02;
$obj->frase="esta uma bosta";
$obj->data="21/06/1972";
$obj->dia_mes="junho";
$obj->dia_semana ="quarta";
$obj->selecionada=1;

$json->previsao[]=$obj;

print_r($json);
echo "<hr/>";

/* 
 *  
 * codifica a variavel em json 
 * 
 */
$jjson = json_encode($json);

print_r($jjson);

echo "<hr/>";

/*
 *criacao de um json em um array, apos codificamos para json  
 */
$jrson = array(
    "nome"=>"joao romario", 
    "idade"=>45,
    "peso"=>82,
    "time"=>"colorado",
    "email"=>"joaoromario@gmail.com"
);

echo json_encode($jrson);
?>
