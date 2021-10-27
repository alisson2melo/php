<?php 

/* Tabela SQL com 4 colunas (id, nome, cargo e salário)
Uma tabela organiza as informações em linhas e colunas, onde manterão os dados
"VARCHAR" - é para quando o tamanho dos caracteres é variável, portanto ele ajustará a coluna com o comprimento máximo. Neste caso, comprimento máx:100 e 30
"INT" - é um tipo de dados. Neste caso, é usado para gerar um valor-exclusivo para cada registro na tabela (PRIMARY_KEY) 
"NULL" "NOT NULL": NULL é valor desconhecido, 0; NOT NULL é o oposto, 1 */

/* Vamos fazer uma consulta SQL usando a instrução "CREATE TABLE", 
depois executaremos esta consulta SQL passando-a para a função PHP "mysqli_query()" para criar nossa tabela. */

//Esteja rodando servidor MySQL com user "root" e sem senha
$link = mysqli_connect("localhost", "root", "5b7a20cxmFEM", "empregados");

//Verificar conexão
if($link === false){
    die("ERROR: Could not connect. " .  mysqli_connect_error());
}

/*"CREATE TABLE" - é usada para criar uma tabela no banco de dados, dã!*/

// Tentativa de criar uma execução de consulta na tabela "funcionários"
$sql = "CREATE TABLE funcionários ( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
    nome VARCHAR(100) NOT NULL, 
    cargo VARCHAR(30) NOT NULL, 
    salário int(10) NOT NULL 
)";

if(mysqli_query($link, $sql)){
    echo "Tabela criada com sucesso.";
} else {
    echo "ERROR: Isto não pode ser executado para $sql." . mysqli_error($link);
}

// Terminar conexão aberta
mysqli_close($link);



/* Observe que cada nome de campo na tabela é seguido por uma declaração de tipo de dados; 
esta declaração especifica que tipo de dados a coluna pode conter, seja inteiro, string, data, etc.

Há limitações adicionais (chamados "modifiers") que estão especificados após o nome da coluna na instrução SQL, 
como "NOT NULL", "PRIMARY_KEY", "AUTO_INCREMENT", etc. 
restrições definem regras relativas aos valores permitidos em colunas. */

?>

