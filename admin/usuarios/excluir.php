<?php
session_start();

ini_set('default_charset', 'utf-8');

include ('../../config/conection.php');

$id         = $_POST['idusers'];


try{
 
    $stmt = $conn->prepare("DELETE FROM users WHERE idusers = $id");
    $stmt->execute();
     
    if($stmt){
        echo "<script language='JavaScript'>
                    alert('Usuário excluido com sucesso!');  
                    javascript:window.location='dados_usuarios.php';               
            </script>";
    }

    } catch(PDOException $e) {
        echo "<script language='JavaScript'>
                    alert('Erro ao excluir dados!');  
                    javascript:window.location='dados_usuarios.php';               
            </script>";
    }
