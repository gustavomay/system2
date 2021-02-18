<?php
session_start();
include ('../../config/conection.php');

function retorna($nome, $conn){
    $result = $conn->query("SELECT * FROM users WHERE nome LIKE '%$nome%' LIMIT 1");
    
    $rows = $result->fetch(PDO::FETCH_ASSOC);
        
        if($rows){
            $valores['idusers'] = $rows['idusers'];
            $valores['nome'] = $rows['nome'];
            $valores['sobrenome'] = $rows['sobrenome'];

        }
        else{
            $valores['nome'] = 'Não Localizado';
        }  
    
    return json_encode($valores);
}

if(isset($_GET['pesquisar'])){
    echo retorna($_GET['pesquisar'],$conn);
}

?>