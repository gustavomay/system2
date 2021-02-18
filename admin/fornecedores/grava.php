<?php
session_start();
include ('../../config/conection.php');

$id             =$_POST['idinfos'];
$fornecedor     =$_POST['fornecedor'];
$natureza       =$_POST['natureza_transacao'];
$centro         =$_POST['centro_custo'];
$conta          =$_POST['conta'];
$item           =$_POST['codigo_item'];


$consulta = $conn->prepare("SELECT idinfos,fornecedor FROM infos");
$consulta->execute();


////////////////////////////////////Verificação se ID está vazia faz o insert e verifica se patrimonio e id do ativo já cadastrados ///////////////////////////////

    if (empty($id)){
        try{

            foreach ($consulta as $res) {
                if($fornecedor == $res['fornecedor']){
                    echo "<script language='JavaScript'>
                            alert('Este Fornecedor já está Cadastrado!!'); 
                            javascript:window.location='fornecedores.php'; 
                        </script>";
                    exit();
                }
        
                if($id == $res['idinfos']){
                    echo "<script language='JavaScript'>
                            alert('Este Fornecedor já está Cadastrado!!'); 
                            javascript:window.location='fornecedores.php';
                        </script>";
                    exit();
                }
            }

//////////////////////////// Insert ////////////////////////////////////////////////////////////////////////

            $stmt = $conn->prepare("INSERT INTO infos (fornecedor, natureza_transacao, centro_custo, conta, codigo_item)
                                                    VALUES (:fornecedor, :natureza_transacao, :centro_custo, :conta, :codigo_item)");



            $stmt -> bindParam(':fornecedor', $fornecedor);
            $stmt -> bindParam(':natureza_transacao', $natureza);
            $stmt -> bindParam(':centro_custo', $centro);
            $stmt -> bindParam(':conta', $conta);
            $stmt -> bindParam(':codigo_item',$item);

            
            $stmt->execute();

            if($stmt){                
                echo "<script language='JavaScript'>
                            alert('Dados Gravados com sucesso!');  
                            javascript:window.location='fornecedores.php';               
                    </script>";               
            }

            }catch(PDOException $e) {
                echo "<script language='JavaScript'>
                            alert('Erro ao gravar dados!'); 
                            javascript:window.location='fornecedores.php';                    
                    </script>";
            }
            echo $e;
    }else{
///////////////////////////////// Update ////////////////////////////////////////////////////////////
    try{
        
        $stmt = $conn->prepare("UPDATE infos SET fornecedor = :fornecedor, natureza_transacao = :natureza_transacao,
                                                    centro_custo = :centro_custo, conta = :conta, codigo_item = :codigo_item WHERE idinfos = $id");



        $stmt -> bindParam(':fornecedor', $fornecedor);
        $stmt -> bindParam(':natureza_transacao', $natureza);
        $stmt -> bindParam(':centro_custo', $centro);
        $stmt -> bindParam(':conta', $conta);
        $stmt -> bindParam(':codigo_item',$item);

        $stmt->execute();

        if($stmt){
            echo "<script language='JavaScript'>
                        alert('Update feito com sucesso!');  
                        javascript:window.location='fornecedores.php';               
                </script>";
        }

        }catch(PDOException $e) {
            echo "<script language='JavaScript'>
                        alert('Erro ao atualizar dados!');  
                        javascript:window.location='fornecedores.php';            
                </script>";
        }
    }
   

?>