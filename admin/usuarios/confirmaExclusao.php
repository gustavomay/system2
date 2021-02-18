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
</html>

<?php

ini_set('default_charset', 'utf-8');

include '../../config/conection.php';

$id = $_POST['idusers'];

$consulta = $conn->query("SELECT * FROM users WHERE idusers = $id");


while ($usuario = $consulta->fetch(PDO::FETCH_ASSOC)) {  
    $user = $usuario['nome'];
    $id = $usuario['idusers'];
}

    echo '<div id="confirmaExclusao" name="confirmaExclusao">';
    echo '<div id=imageAlert name=imageAlert></div>';
    echo '<form method=POST action=excluir.php>';
    echo '</br>';
    echo '<h4>Deseja realmente excluir o usuário <b>'.$user.'</b></h4>';
    echo '<label>ID:</label><input type="text" name="iduers" id="iduserss" value='.$id.' size="1" readonly="readonly">';
    echo '</br>';
    echo '<button type="submit" class="btn btn-success">Sim</button>';
    echo '<a class="btn btn btn-danger" href="dados_usuarios.php">Não</a>';
    echo '</form>';
    echo '</div>';
}
?>