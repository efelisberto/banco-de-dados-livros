<?php

$host = 'localhost';
$dbname = 'livro';
$username = 'root';
$password = '';

// abrir conexão com o BD

$conn=mysql_connect($host,$username,$password);

//seleciona o banco de dados ativo

mysql_select_db($dbname,$conn);

// define a consulta a ser realizada

$query = 'SELECT id,nome,nacionalidade FROM autores';

// envia consulta ao banco de dados

$result = mysql_query($query,$conn);

if ($result){
    //percorre resultados da pesquisa
    while ($row = mysql_fetch_assoc($result)){
        echo $row[id]. '-'.$row['nome']. '-'. $row['nacionalidade']."br\n";
    }
    }

    //fecha a conexão 

    mysql_close($conn);

?>