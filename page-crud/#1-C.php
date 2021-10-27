<?php
/* Ele irá gerar um formulário web que pode ser usado para inserir registros na tabela de "funcionários"
   Método Processual 
*/

// Incluir o arquivo de configuração
require_once "4-script-for-table.php"; // "require_once" - é usada para embutir o código PHP de outro arquivo

// Defina variáveis ​​da tabela e inicialize com valores vazios
$nome = $cargo = $salário = "";
$nome_err = $cargo_err = $salário_err = "";

// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validar o "nome"
    $input_nome = trim($_POST["nome"]);
    if(empty($input_nome)){
        $nome_err = "Por favor, digite um nome.";
    } elseif(!filter_var($input_nome, FILTER_VALIDATE_REGEXP,
    array("Opções"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nome_err = "Por favor, digite um nome válido.";
    } else{
        $nome = $input_nome;
}

// Validar o "cargo"
$input_cargo = trim($_POST["cargo"]);
if(empty($input_cargo)){
    $cargo_err = "Por favor, digite um cargo.";
} else{
    $cargo = $input_cargo;
}

// Validar o "salário"
$input_salário = trim($_POST["salário"]);
if(empty($input_salário)){
    $salário_err = "Por favor, digite um salário mensal.";
} elseif(!ctype_digit($input_salário)){
    $salário_err = "Por favor, digite um valor não-negativo.";
} else{
    $salário = $input_salário;
}

// Verifique os erros de entrada antes de inserir no banco de dados
if(empty($nome_err) && empty($cargo_err) && empty($salário_err)){
    // Prepare uma declaração de inserção
    $sql = "INSERT INTO funcionários (nome, cargo, salário) VALUES (?, ?, ?)";

    if($stmt = mysqli_prepare($link, $sql)){
        // Vincule as variáveis ​​à instrução preparada como parâmetros
        mysqli_stmt_bind_param($stmt, "sss", $param_nome, $param_cargo, $param_salário);

        // Defina os parâmetros
        $param_nome = $nome;
        $param_cargo = $cargo;
        $param_salário = $salário;

        // Tente executar a declaração preparada
        if(mysqli_stmt_execute($stmt)){
            // Registros criados com sucesso. Redirecionar para a página de destino
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Algo deu errado. Tente novamente mais tarde.";
        }
    }

    // Fechar declaração
    mysqli_stmt_close($stmt);
}

// Fechar conexão
mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar registro</title>
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
                    <h2 class="mt-5">Criar registro</h2>
                    <p>Preencha este formulário e envie para adicionar o registro do funcionário ao banco de dados.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($nome_err)) ? 'Inválido' : ''; ?>" value="<?php echo $nome; ?>">
                            <span class="invalid-feedback"><?php echo $nome_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Cargo</label>
                            <textarea name="address" class="form-control <?php echo (!empty($cargo_err)) ? 'Inválido' : ''; ?>"><?php echo $cargo; ?></textarea>
                            <span class="invalid-feedback"><?php echo $cargo_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>salário</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salário_err)) ? 'Inválid' : ''; ?>" value="<?php echo $salário; ?>">
                            <span class="invalid-feedback"><?php echo $salário_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>