<?php
session_start();
include ('../../config/conection.php');

$id           =$_POST['idusers'];
$nome         =$_POST['nome'];
$sobrenome    =$_POST['sobrenome'];
$senha        =$_POST['senha'];
$tipo         =$_POST['tipo'];
$user      =$_POST['usuario']

$consulta = $conn->prepare("SELECT nome,idusers,usuario FROM users");
$consulta->execute();   


    if (empty($id)){
        try{

           
            foreach ($consulta as $res) {
                if($user == $res['usuario']){
                    echo "<script language='JavaScript'>
                            alert('Usuário já cadastrado!!'); 
                            javascript:window.location='usuarios.php'; 
                        </script>";
                    exit();
                }
        
                if($id == $res['idusers']){
                    echo "<script language='JavaScript'>
                            alert('Usuário já cadastrado!!'); 
                            javascript:window.location='usuarios.php';
                        </script>";
                    exit();
                }
            }

                $stmt = $conn->prepare("INSERT INTO users (nome, sobrenome, senha, usuario, tipo)
                                                        VALUES (:nome, :sobrenome, :senha, :usuario, :tipo)");



                $stmt -> bindParam(':nome', $nome);
                $stmt -> bindParam(':sobrenome', $sobrenome);
                $stmt -> bindParam(':senha' ,$senha);
                $stmt -> bindParam(':tipo' ,$tipo);
                $stmt -> bindParam(':usuario', $user);

                $stmt->execute();

                if($stmt){
                    echo "<script language='JavaScript'>
                                alert('Usuário Cadastrado com Sucesso!'); 
                                javascript:window.location='usuarios.php';               
                        </script>";
                }
            
        }catch(PDOException $e) {
            echo "<script language='JavaScript'>
                        alert('Erro ao gravar dados!');  
                        javascript:window.location='usuarios.php';
                </script>";
                echo $e->getMessage();
        }
    }else{

    try{
        $stmt = $conn->prepare ("UPDATE users SET nome = :nome, sobrenome = :sobrenome, 
                                                    senha = :senha, tipo = :tipo, usuario = :usuario
                                                    WHERE idusers = $id"); 



        $stmt -> bindParam(':nome', $nome);
        $stmt -> bindParam(':sobrenome', $sobrenome);
        $stmt -> bindParam(':senha' ,$senha);
        $stmt -> bindParam(':tipo' ,$tipo);
        $stmt -> bindParam(':usuario', $user);

        $stmt->execute();

        if($stmt){
            echo    "<script language='JavaScript'>
                        alert('Update feito com sucesso!');  
                        javascript:window.location='usuarios.php';               
                    </script>";
        }

        }catch(PDOException $e) {
            echo    "<script language='JavaScript'>
                        alert('Erro ao atualizar dados!');  
                        javascript:window.location='usuarios.php';             
                    </script>";
                echo $e->getMessage();
        }
    }


?>