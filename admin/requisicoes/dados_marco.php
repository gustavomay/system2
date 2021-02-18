<?php

ini_set('default_charset', 'utf-8');

include '../../config/conection.php';
$consulta = $conn->query("SELECT * FROM office ORDER BY idoffice");
?>

<html>
<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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

        <div id="pesquisar">
            <input name="search" id="search" class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar"> 
        </div>

        <?php 
            include '../menu.php';
        ?>

            <div id="table_itens_index" id="table">
                <table class="table" class="table table-hover" class="tablesorter">
                    <thead>
                        <tr>
                            <th scope="col">ID:</th>
                            <th scope="col">Versão Office:</th>
                            <th scope="col">Key Office:</th>                                                          
                        </tr>
                    </thead>
                    <tbody id="body_table">                        
                          <?php                             
                            while ($office = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                echo '<form action="confirmaExclusao.php" method="POST">';
                                echo '<tr>';
                                echo '<td><input type="text" name="idoffice" id="idoffice" value='.$office['idoffice'].' size="1" readonly="readonly"></td>';
                                echo '<td>'.$office['versao_office'].'</td>';
                                echo '<td>'.$office['key_office'].'</td>';
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
