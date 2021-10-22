<?Php
//Depois de criar a tabela, precisamos criar um script PHP para conectar ao servidor de banco de dados MySQL. 
//Posteriormente, incluiremos esse arquivo de configuração em outras páginas usando a função PHP "require_once()"

//Credenciais do banco de dados. Esteja rodando servidor MySQL com configurações padrão (user 'root', sem senha)
//Definindo o servidor, nome de usuário, senha e nome do banco de dados
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'empregados'); 

//variável para tentar se conectar com banco de dados MySQL, método processual
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Verificar a conexão
if ($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());

}
//Se o valor da variável for false (0), aparecerá aquela string de ERROR;

/* A função "die" é usado para imprimir a mensagem e sair do script php atual;
   A " mysqli_connect_error" retorna a mensagem de erro da última tentativa de conexão */


?>