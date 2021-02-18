<?php

ini_set('default_charset', 'utf-8');

include '../config/conection.php';

$consulta1 = $conn->query("SELECT * FROM users");
$so = $consulta1->fetch(PDO::FETCH_ASSOC); 

?>

<html>
<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Última versão JavaScript compilada e minificada -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="../js/tablesorter/js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="../js/tablesorter/js/jquery.tablesorter.widgets.js"></script>

<script src="../js/script.js"></script>
<link href="../css/style.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="css/bootsrap.min.css"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width">



<title>Controle de Requisições Mensais - Peccin S.A</title>
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <div id="cabecalho">           
            <table id="table_cabecalho">
                <tr>
                    <td>
                        <div id="imagem">
                            <img src="../images/peccin.png">
                        </div>
                    </td> 
                    <td>
                        <div id="title">
                            <h3>
                                Controle de Requisições Mensais - Peccin S.A
                            </h3>
                        </div>
                    </td>
                    <td>
                        <div id="logout">
                            <label> Olá! <?session_start(); echo $_SESSION['nome'];?></label> 
                            <a class="btn btn-light" value="logout" href="http://ptransfer.peccin.local/ocs/login.html">Logout</a> 
                        </div>           
                    </td>

                </tr>
            </table>
        </div>
    </head>

    <body>           
        <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="nav-profile-tab" data-toggle="dropdown" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Requisições</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="requisicoes/requisicoes.php">Cadastro de Requisições</a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Janeiro</a>
                        <a class="dropdown-item" href="#">Fevereiro</a>
                        <a class="dropdown-item" href="#">Março</a>
                    </div>
                </li>  

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="nav-profile-tab" data-toggle="dropdown" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Fornecedores</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="requisicoes/requisicoes.php">Cadastro de Fornecedores</a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="fornecedores/dados_fornecedores.php">Fornecedores Cadastrados</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="nav-profile-tab" data-toggle="dropdown" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" >Usuários</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="usuarios/usuarios.php">Cadastro de Usuários</a> 
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="usuarios/dados_usuarios.php">Usuários Cadastrados</a>
                    </div>
                </li>  
        </ul>    
    </body>

</html>
