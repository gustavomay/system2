<?php

ini_set('default_charset', 'utf-8');

include '../../config/conection.php';
$consulta = $conn->query("SELECT * FROM control ORDER BY idcontrol");
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
<link rel="stylesheet" href="../../css/mobile.css" media="(max-width: 480px)">
<meta name="viewport" content="width=device-width">


<title>Controle de Ativos - Peccin S.A</title>
    
    <?php include "../cabecalho.php"; ?>

    <body>           

        <div id="corpo_index">

        <?php 
            include '../menu.php';
        ?>

            <div id="table_itens_index" id="table">
                <table class="table" class="table table-hover" class="tablesorter">
                    <thead>
                        <tr>
                            <th class="blue" scope="col">ID:</th>
                            <th class="blue" scope="col">Data de Recebimento:</th>
                            <th class="blue" scope="col">Data de Vencimento:</th> 
                            <th class="blue" scope="col">Número da Nota:</th>  
                            <th class="blue" scope="col">Forncedor:</th>  
                            <th class="blue" scope="col">Valor R$:</th>  
                            <th class="blue" scope="col">Número da Requisição:</th> 
                            <th class="blue" scope="col">Número da Ordem de Compra:</th> 
                            <th class="blue" scope="col">Data da Entrega:</th>               
                            <th class="blue" scope="col">Entregue Por:</th> 
                            <th class="blue" scope="col">Entregue:</th>                                             
                        </tr>
                    </thead>
                    <tbody id="body_table">                        
                          <?php                             
                            while ($requisicoes = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                echo '<form action="confirmaExclusao.php" method="POST">';
                                echo '<tr>';
                                echo '<td><input type="hidden" name="idcontrol" id="idcontrol" value='.$requisicoes['idcontrol'].' size="1" readonly="readonly"></td>';
                                echo '<td>'.$requisicoes['data_recebimento'].'</td>';
                                echo '<td>'.$requisicoes['vencimento'].'</td>';
                                echo '<td>'.$requisicoes['numero_nota'].'</td>';
                                echo '<td>'.$requisicoes['fornecedor'].'</td>';
                                echo '<td>'.$requisicoes['valor'].'</td>';
                                echo '<td>'.$requisicoes['numero_requisicao'].'</td>';
                                echo '<td>'.$requisicoes['numero_oc'].'</td>';
                                echo '<td>'.$requisicoes['data_entrega'].'</td>';
                                echo '<td>'.$requisicoes['entregue_por'].'</td>';
                                echo '<td>'.$requisicoes['entregue'].'</td>';
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
