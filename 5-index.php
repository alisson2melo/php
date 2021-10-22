<!DOCTYPE html>
<!--  
Primeiro, criaremos uma página de entrada para nosso aplicativo CRUD, 
que contém uma grade de dados mostrando os registros da tabela do banco de dados de "funcionários". 
Também possui ícones de ação para cada registro exibido na grade, pode escolher ver os detalhes, 
atualizá-lo ou excluí-lo.

Também adicionaremos um botão criar na parte superior da grade de dados,
que pode ser usado para criar novos registros na tabela de funcionários. 
-->

<!-- 1º Parte -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Painel de controle</title>
    <!-- Framework Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    
    <script>
        //Plugin Bootstrap JQuery
        $(document).ready(function(){ 
            $('[data-toggle="tooltip"]').tooltip();   
        });
    
    </script>

</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left"> Detalhes dos funcionários</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Adicionar novo funcionário</a>
                    </div>
                   <!-- 2º Parte -->
                   <?php
                    //Incluir o arquivo do script php
                    require_once "Script-for-table.php";
                    
                    // Tentar selecionar a execução da consulta
                    $sql = "SELECT * FROM funcionários";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Nome</th>";
                                        echo "<th>Cargo</th>";
                                        echo "<th>Salário</th>";
                                        echo "<th>Ação</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['nome'] . "</td>";
                                        echo "<td>" . $row['cargo'] . "</td>";
                                        echo "<td>" . $row['salário'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // "Conjunto de resultados livres"
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Algo deu errado. Por favor, tente novamente mais tarde.";
                    }
 
                    // Terminar conexão
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>                    