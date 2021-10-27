<?php 
/* Recuperará os registros da tabela de "funcionários" com base no atributo "id" do funcionário. */

// Verifique a existência do parâmetro id antes de processar mais
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Incluir o arquivo da tabela
    require_once "4-script-for-table.php";

    // Prepare uma seleção selecionada
    $sql = "SELECT * FROM funcionários WHERE id = ?";

    if($stmt = mysqli_prepare($link, $sql)){
        // Vincule as variáveis ​​à instrução preparada como parâmetros
        mysqli_stmt_bind_param($stmt, "i", $param_id)

        // Defina os parâmetros
        $param_id = trim($_GET["id"]);

        // Tentativa de executar a declaração preparada
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

            if(mysqli_num_rows($result) == 1){
                /* Busca a linha do resultado como uma matriz associativa. Desde o conjunto de resultados
                contém apenas uma linha, não precisamos usar o loop while */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                // Recuperar valor de campo individual
                $nome = $row["nome"];
                $cargo = $row["cargo"];
                $salário = $row["salário"];
            } else{
                // URL não contém parâmetro de id válido. Redirecionar para a página de erro
                header("location: #5-Pág-erro.php");
                exit();
            }
    } else {
        echo "Oops! Algo deu errado. Tente novamente mais tarde";
    }
}

 // Terminar a declaração
 mysqli_stmt_close($stmt);
    
 // Terminar a conexão
 mysqli_close($link);

} else{
    // URL não contém parâmetro de id válido. Redirecionar para a página de erro
    header("location: #5-Pág-erro.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>visualizar registros</title>
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
                    <h1 class="mt-5 mb-3">visualizar registros</h1>
                    <div class="form-group">
                        <label>Nome</label>
                        <p><b><?php echo $row["nome"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Cargo</label>
                        <p><b><?php echo $row["cargo"]; ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Salário</label>
                        <p><b><?php echo $row["salário"]; ?></b></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Voltar</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

