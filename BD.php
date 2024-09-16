<?php

//configuração do banco de dados

$host = 'localhost';
$dbname = 'livro';
$username = 'root';
$password = '';

//Criar a conexão do banco de dados

$conn = new mysqli($host,$username,$password,$dbname);

//Verifica se houve erro na conexão 

if($conn->connect_error){
    die("Falha na conexão".$conn->connect_error);
}
echo "Conexão com banco de dados concluída";

//Dados a serem inseridos 

$sql = "INSERT INTO autores (nome,nacionalidade,dataNascimento) VALUES ('Machado de Assis','Brasil','1893/06/21')";

//Executo a instrução

if ($conn->query($sql) === TRUE){
    echo "Dados inseridos com sucesso";
}
else{
    echo "Erro ao inserir os dados".$conn->error;
}
$conn->close();
?>