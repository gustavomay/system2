<?php
session_start();
include ('../../config/conection.php');

function retorna($numero, $conn){
    if(empty($numero)){
        $valores['numero'] = '';
    }else{
    $result = $conn->query("SELECT * FROM office WHERE versao_office LIKE '%$versao_office%' LIMIT 1");
    
    $rows = $result->fetch(PDO::FETCH_ASSOC);
        
        if($rows){
            $valores['idoffice'] = $rows['idoffice'];
            $valores['versao_office'] = $rows['versao_office'];
            $valores['key_office'] = $rows['keyh_office'];
        }
        else{
            $valores['numero'] = 'Office Não Localizado';
        }  
    
    return json_encode($valores);
    }
}

if(isset($_GET['pesquisar'])){
    echo retorna($_GET['pesquisar'],$conn);
}

?>