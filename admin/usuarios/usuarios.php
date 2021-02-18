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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

<script src="../../js/pesquisa_usuarios.js"></script>
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>  


<link href="../../css/style.css" rel="stylesheet">
<link rel="stylesheet" href="../../css/mobile.css" media="(max-width: 720px)">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width">

        <?php include "../cabecalho.php"; ?>

     
    <body>           

        <div id="corpo">
             
            <?php
                include '../menu.php';
            ?>

         <head>
             <div id="form">

                <h4>Cadastro de Usuários</h4>

                <form id="form_linhas" action="grava.php" method="POST">
                    <div id=formulario_linhas>

                        <div class="form-group row">                        
                            <div class="form-group col-md-1">
                                <label for="idusers">ID:</label>
                                <input type="text" id="idusers" name="idusers" class="form-control " readonly="readonly">     
                            </div>
                        </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="=sobrenome" placeholder="Sobrenome" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Usuário" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                        <label for="tipo">Tipo de Usuário</label>
                        <select type="text" id="tipo"  name="tipo" class="form-control" required>
                                    <option value='null'>Selecione...</option> 
                                    <option value='0'>Admin</option>
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