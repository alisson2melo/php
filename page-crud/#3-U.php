<?php
/*  Ele atualizará os registros existentes na tabela de "funcionários" com base no atributo "id" do funcionário. */

require_once "4-script-for-table.php";

// Defina as variáveis e inicia com valores vazios
$nome = $cargo = $salário = "";
$nome_err = $cargo_err = $salário_err = "";

// Processando dados do formulário quando o formulário é enviado
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Obter valor de entrada oculto
    $id = $_POST["id"];

    // Validar o nome
    $input_nome = trim($_POST["nome"]);
    if(empty($input_nome)){
        $nome_err = "Por favor, digite um nome.";
    } elseif(!filter_var($input_nome, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nome_err = "Por favor, digite um nome válido.";
    } else{
        $nome = $input_nome;
}
 
    // Validar o cargo
    $input_cargo = trim($_POST["cargo"]);
    if(empty($input_cargo)){
        $cargo_err = "Por favor, digite um cargo.";     
    } else{
        $cargo = $input_cargo;
    }

    // Validar o salário
    $input_salário = trim($_POST["salário"]);
    if(empty($input_salário)){
        $salário_err = "Por favor, digite um salário mensal.";     
    } elseif(!ctype_digit($input_salário)){
        $salário_err = "Por favor, digite um valor não-negativo.";
    } else{
        $salário = $input_salário;
    }
    
    // Checar erros na entrada antes de inserir no banco de dados
    if(empty($nome_err) && empty($cargo_err) && empty($salário_err)){
        // Preparando uma atualização para a declaração
        $sql = "UPDATE funcionários SET nome=?, cargo=?, salário=? WHERE id=?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Vincule as variáveis ​​à instrução preparada como parâmetros
            mysqli_stmt_bind_param($stmt, "sssi", $param_nome, $param_cargo, $param_salário, $param_id);
            
            // Defina os parâmetros
            $param_nome = $nome;
            $param_cargo = $cargo;
            $param_salário = $salário;
            $param_id = $id;
        }

         // Tentativa de executar a declaração preparada
         if(mysqli_stmt_execute($stmt)){
            // Atualização do registro bem-sucedida. Redirecionando para a página de destino
            header("location: index.php");
            exit();
        } else{
            echo "Oops! Algo deu errado. Tente novamente mais tarde.";
        }
    }
     
    // Terminar a declaração
    mysqli_stmt_close($stmt);
}

// Terminar a conexão
mysqli_close($link);

    // Verifique a existência do parâmetro "id" antes de processar mais
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Obter parâmetro de URL
        $id =  trim($_GET["id"]);
        
        // Prepare uma declaração selecionada
        $sql = "SELECT * FROM funcionários WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Vincule as variáveis ​​à instrução preparada como parâmetros
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Defina os parâmetros
            $param_id = $id;
            
            // Tentativa de executar o parâmetro declarado
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
                    // URL não contém parâmetro "id". Redirecionar para a página de erro
                    header("location: #5-Pág-erro.php");
                    exit();
                }
                
            } else{
                echo "Oops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }
        }
        
        // Terminar a declaração
        mysqli_stmt_close($stmt);
        
        // Terminar a conexão
        mysqli_close($link);
    }  else{
        // URL não contém parâmetro "id". Redirecionar para a página de erro
        header("location: #5-Pág-erro.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar o registro.</title>
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
                    <h2 class="mt-5">Registros atualizados</h2>
                    <p>Por favor, edite a entrada de valores e envie para atualziar o registro dos funcionários.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
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
                            <label>Salário</label>
                            <input type="text" name="salary" class="form-control <?php echo (!empty($salário_err)) ? 'Inválido' : ''; ?>" value="<?php echo $salário; ?>">
                            <span class="invalid-feedback"><?php echo $salário_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>