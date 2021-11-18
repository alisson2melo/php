<?Php

/* Depois de criar a tabela, precisamos criar um script PHP para conectar ao servidor de banco de dados MySQL. 
Posteriormente, incluiremos esse arquivo de configuração em outras páginas usando a função PHP "require_once()" */

// Esteja rodando servidor MySQL com configurações padrão (user 'root', sem senha)
 
// Definindo o servidor, nome de usuário e senha 
 
$dbhost = 'localhost';
 
$dbuser = 'root';
 
$dbpass = ''; 
 
// Conexão com o servidor MySQL 
 
$connect = mysqli_connect($dbhost, $dbuser, $dbpass);

      if(!$connect) {
         die('Não foi possível: ' . mysqli_connect_error($connect));
      }
      echo 'Conectado com sucesso';
       
      // Selecionar o banco de dados 
       
      $db = mysqli_select_db($connect, 'empregados');
       
      if(!$db) {
         die('Não foi possível selecionar: ' . mysqli_connect_error($connect));
      }
      echo "Banco de dados empregados, selecionado com sucesso";
       
      // Finalizar a conexão 
       
      mysqli_close($connect);
    
       
/* A função "die" é usado para imprimir a mensagem e sair do script php atual;
   A " mysqli_connect_error" retorna a mensagem de erro da última tentativa de conexão */

?>