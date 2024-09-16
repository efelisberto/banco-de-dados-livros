<?php

$host ='localhost';
$dbname ='livro';
$username ='root';
$password = '';

//cria conexao com banco de dados usando PDO - PHP DAta Objects

try {
    $conn = new PDO ("mysql:host = $host;dbname=$dbname", $username, $password);

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexao realizada com sucesso<br>";
}
catch (PDOException $e){
    echo "falha na conexao:".$e->getmessage();
}

//dados a serem inseridos 
$nome = "C.S. Lewis";
$nacionalidade = "Inglaterra";
$dataNascimento = '1892-01-03';

$sql = "INSERT INTO autores(nome,nacionalidade,dataNascimento) VALUES(:nome,:nacionalidade,:dataNascimento)";

//prepara a conexao

$stmt = $conn ->prepare ($sql);

//associa os valores aos parametrros de consulta

$stmt->bindParam(':nome',$nome);
$stmt->bindParam(':nacionalidade',$nacionalidade);
$stmt->bindParam(':dataNascimento',$dataNascimento);

//executa a consulta

if($stmt->execute()){
    echo "dados inseridos com sucesso";
}
else{
    echo "erro ao inserir dados";
}

//fecha a conexao

$conn -> null;
?>