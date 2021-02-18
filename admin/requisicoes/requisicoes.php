<?php

ini_set('default_charset', 'utf-8');

require_once('../../config/conection.php');

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

    <?php include "../cabecalho.php"; ?>

    <body>           

        <div id="corpo">

        <?php 
            include '../menu.php';
        ?>

            <div id="form">

            <h4>Cadastro de Requisições </h4>

                <form id="form_linhas" action="grava.php" method="POST">
                <form>
                    <div class="form-group row">                        
                            <div class="form-group col-md-1">
                                <label for="idcontrold">ID</label>
                                <input type="text" id="idcontrol" name="idcontrol" class="form-control" readonly="readonly">    
                            </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="data_recebimento">Data de Recebimento</label>
                        <input type="date" class="form-control" id="data_recebimento" placeholder="Data de Recebimento" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="vencimento">Data de Vencimento</label>
                        <input type="date" class="form-control" id="=vencimento" placeholder="Data de Venciemnto" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="numero_nota">Número da Nota</label>
                        <input type="number" class="form-control" id="numero_nota" placeholder="Número da Nota" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="fornecedor">Fornecedor</label>
                                <select id="fornecedor" name="fornecedor" class="form-control" required>   
                                    <option>Selecione...</option>
                                    <?php 
                                        $resultado = $conn->prepare("SELECT * FROM infos order by fornecedor");
                                        $resultado->execute();
                                       if(count($resultado)){
                                        foreach ($resultado as $res) {          
                                            echo "<option value=".$res['idinfos'].">".$res['fornecedor']."</option>";                                           
                                       }
                                     } 
                                    ?>
                                </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="valor">Valor da Nota</label>
                        <input type="value" class="form-control" id="valor" placeholder="R$" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="numero_requisicao">Número da Requisição</label>
                        <input type="number" class="form-control" id="=numero_requisicao" placeholder="Número da Requisição" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="numero_oc">Número da Ordem de Compra</label>
                        <input type="number" class="form-control" id="numero_oc" placeholder="Ordem de Compra" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="entregue">Entregue</label>
                                <select type="text" id="entregue"  name="entregue" class="form-control" required>
                                    <option value='null'>Selecione...</option> 
                                    <option value='0'>Sim</option>
                                    <option value='1'>Não</option>
                                </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="data_entrega">Data de Entrega</label>
                        <input type="date" class="form-control" id="data_entrega" placeholder="Data de Entrega" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="entregue_por">Entregue Por</label>
                                <select id="entregue_por" name="entregue_por" class="form-control" required>   
                                    <option>Selecione...</option>
                                    <?php 
                                        $resultado = $conn->prepare("SELECT * FROM users order by nome");
                                        $resultado->execute();
                                       if(count($resultado)){
                                        foreach ($resultado as $res) {          
                                            echo "<option value=".$res['idusers'].">".$res['nome']."  ".$res['sobrenome']."</option>";                                               
                                       }
                                     } 
                                    ?>
                                </select>
                        </div>
                    </div>

                    <div id="buttons">                       
                        <button type="submit" class="btn btn-success">Save</button>                         
                        <button type="reset" class="btn btn-warning">Clear</button>                          
                    </div>
                </form>
            </div>               
        </div>            
    </body>

</html>