<?php
session_start();
ini_set('default_charset', 'utf-8');
include ('../../config/conection.php');

$id         = $_POST['idinfos'];


try{
 
    $stmt = $conn->prepare("DELETE FROM infos WHERE idinfos = $id");
    $stmt->execute();
     
    if($stmt){
        echo "<script language='JavaScript'>
                    alert('Fornecedor Excluído com Sucesso!');  
                    javascript:window.location='dados_fornecedores.php';               
            </script>";
    }

    } catch(PDOException $e) {
        echo "<script language='JavaScript'>
                    alert('Erro ao excluir dados!');  
                    javascript:window.location='dados_fornecedores.php';
            </script>";
    }
