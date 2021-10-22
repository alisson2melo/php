<?php

/* Vamos criar um consulta SQL para inserir registros na tabela criada */

/* Vamos fazer uma consulta SQL usando o comando "INSERT INTO" com os valores apropriados, 
iremos executar esta consulta de inserção passando para a função PHP "mysqli_query()" inserir os dados na tabela */


/* Esteja rodando um servidor MySQL com user "root" sem senha */

$link = mysqli_connect("localhost", "root", "", "empregados");

// Verificar a conexão
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/* Tentativa de inserir a consulta */

// "INSERT INTO" - é usada para inserir novas linhas em uma tabela de banco de dados.
$sql = "INSERT INTO funcionários (nome, cargo, salário) VALUES 
                                 ('Cleiton', 'Dev. Sênior', '4.000'),
                                 ('Jéssica', 'Dev. Pleno', '3.500'),
                                 ('Ridinei', 'Dev. Jr', '3.200'),
                                 ('Claudinei', 'Analista TI', '2.900')"; 
                                 
                                 if(mysqli_query($link, $sql)){
                                    echo "Regsitros adicionados com sucesso.";
                                } else{
                                    echo "ERROR: Não foi capaz de executar o $sql. " . mysqli_error($link);
                                }
                                 
// Terminar a conexão
mysqli_close($link);


/* Campo "id' foi marcado com a "AUTO_INCREMENT". 
Este modificador diz ao MySQL para atribuir automaticamente um valor a este campo se não for especificado */

/* Agora, vá para phpMyAdmin (http://localhost/phpmyadmin/) 
e verifique os dados da tabela de "funcionários" dentro do banco de dados "empregados" */



?>