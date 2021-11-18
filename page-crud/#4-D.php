<?php
 
/* Ele excluirá os registros existentes da tabela de "funcionários" com base no atributo "id" do funcionário. */


// Processo de operação de exclusão após confirmação do usuário

if (isset($_POST["id"]) && !empty($_POST["id"])) {
         
        // Incluir arquivo de configuração
        require_once "4-script-for-table.php";

        // Prepare uma declaração de exclusão
        $sql = "DELETE FROM funcionários WHERE id = ?";

        $stmt = mysqli_prepare($link, $sql);        

        if ($stmt = mysqli_prepare($link, $sql)) {
                
                // Vincule as variáveis ​​à instrução preparada como parâmetros
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                
                // Defina o parâmetro
                $param_id = trim($_POST["id"]);

                // Tentativa de executar o parâmetro declarado
                mysqli_stmt_execute($stmt); 

                if($dlc = mysqli_stmt_execute($stmt)) {
                    // Exclusão do registro bem-sucedida. Redirecionando para a página inicial
                    header("location: index.php");
                    exit();
                 
                
                }    
                
            // Terminar a declaração
            mysqli_stmt_close($stmt);
        } else {
            echo "Algo deu errado com a consulta: " . mysqli_error($link);
        }
}
else{ 
    echo 'Ops! Algo deu errado. Tente novamente mais tarde...';
}
    
// Terminar a conexão
mysqli_close($link);
    
// Verificar a existência do parâmetro "id"
    
if(empty(trim($_GET["id"]))) {
    // O URL não contém o parâmetro id. Redirecionar para a página de erro
    header("location: #5-Pág-erro.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Excluir registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5 mb-3">Deletar registro</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                            <p>Você tem certeza que deseja excluir esse funcionário registrado?</p>
                            <p>
                                <input type="submit" value="Sim" class="btn btn-danger">
                                <a href="index.php" class="btn btn-secondary">Não</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
