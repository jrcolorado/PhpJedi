<?php
mssql_connect("localhost", "root", "475236") or 
        die("Não foi possível a conexão com o servidor");
mssql_select_db("teste") or 
die("Não foi possível selecionar o banco de dados");
mssql_close();
echo "Conexão OK";
?>