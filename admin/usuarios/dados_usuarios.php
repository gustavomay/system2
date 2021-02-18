<?php

ini_set('default_charset', 'utf-8');

include '../../config/conection.php';

$consulta = $conn->query("SELECT * FROM users ORDER BY idusers");

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
<script type="text/javascript" src="../../js/tablesorter/js/jquery.tablesorter.js"></script>
<script type="text/javascript" src="../../js/tablesorter/js/jquery.tablesorter.widgets.js"></script>

<script src="../../js/script.js"></script>

<link href="../../css/style.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/mobile.css" media="(max-width: 720px)">
<meta name="viewport" content="width=device-width">

<title>Controle de Ativos - Peccin S.A</title>
    
    <?php include "../cabecalho.php"; ?>
 
    <body>           

        <div id="corpo_index">

        
            <?php
                include '../menu.php';
            ?>
            
            <div id="table_itens_index" id="table">
                <table table class="table table-sm table-hover table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">SOBRENOME</th>
                            <th scope="col">USUÁRIO</th>
                        </tr>
                    </thead>
                    <tbody id="body_table">                        
                          <?php                             
                            while ($usuario = $consulta->fetch(PDO::FETCH_ASSOC)) {                                
                                echo '<form action="confirmaExclusao.php" method="POST">';                               
                                echo '<tr>';
                                echo '<td><input type="text" name="idusers" id="idusers" value='.$usuario['idusers'].' size="1" readonly="readonly"></td>';
                                echo '<td id="nome" name="nome">'.$usuario['nome'].'</td>';
                                echo '<td id="sobrenome" name="sobrenome">'.$usuario['sobrenome'].'</td>';
                                echo '<td>'.$usuario['usuario'].'</td>';
                                echo '<td><button type="submit" class="btn btn-danger">Excluir</button></td>';                    
                                echo '</tr>';
                                echo '</form>';                                                             
                            }
                          ?>                        
                    </tbody>
                </table>
            </div>               
        </div>            
    </body>
 
</html>
