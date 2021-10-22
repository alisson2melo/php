<?php
/*Para armazenar ou acessar os dados dentro de um banco de dados MySQL, 
primeiro você precisa se conectar ao servidor de banco de dados MySQL. 
O PHP oferece duas maneiras diferentes de se conectar ao servidor MySQL: extensões MySQLi (MySQL aprimorado) 
e PDO (Objetos de dados PHP).
Enquanto a extensão PDO é mais portátil e oferece suporte a mais de doze bancos de dados diferentes, 
a extensão MySQLi, como o nome sugere, oferece suporte apenas a banco de dados MySQL. A extensão MySQLi, 
Porém, fornece uma maneira mais fácil de se conectar e executar consultas em um servidor de banco de dados MySQL.*/ 


/* Tentativa de conexão do servidor MySQL. 
Assumindo que esteja rodando um servidor MySQL com configurações padrão (user 'root' sem senha) */

$link = mysqli_connect("localhost", "root", ""); //"mysql_connect()" - Abre uma conexão com um servidor MySQL
 
// Verificar conexão 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

/* Vamos fazer uma consulta SQL usando a instrução "CREATE DATABASE", 
depois executaremos essa consulta SQL passando-a para a função PHP "mysqli_query()" para criar nosso banco de dados */

/* Tentativa de criar execução de consulta de banco de dados */

$sql = "CREATE DATABASE empregados"; //"CREATE DATABASE" é usada para criar um novo banco de dados no MySQL
if(mysqli_query($link, $sql)){ //"mysqli_query()" - Executa uma consulta no banco de dados
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); //"mysql_error()" - Retorna o texto da mensagem de erro da operação anterior do MySQL
}
 
//A função "close()" ou "mysqli_close()" fecha uma conexão de banco de dados aberta anteriormente.
mysqli_close($link);
?>