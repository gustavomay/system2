<?php

include ('config/conection.php');
session_start();

    $login = $_POST['usuario'];
    $senha = $_POST['senha'];

    if(empty($login) or empty($senha)){
        echo "<script language='JavaScript'>
                    alert('Favor insira usuário e senha');     
                    javascript:window.location='login.html';         
                </script>";
    }else{
        //$hashPassword = md5($senha);
        $stmt = $conn->prepare("SELECT idusers,usuario,senha,tipo FROM users WHERE usuario = '$login' and senha = '$senha'");
        $stmt->execute();

        if(count($stmt)){
            foreach ($stmt as $res) {          
                $login = $res['usuario'];
                $password = $res['senha'];  
                $tipo = $res['tipo']; 
                $nome = $res['nome'];  
            }
            
            if ($login == $login and $senha == $password and $tipo == 0){
                header('Location: admin/index.php');
                $_SESSION['nome'] = $nome;                
            }else{
                echo "<script language='JavaScript'>
                        alert('Usuário ou senha Incorreto!');  
                        javascript:window.location='login.html';         
                    </script>";
            }

            if($login == $login and $senha == $password and $tipo == 1){                
                header('Location: user/index.php');                    
                $_SESSION['nome'] = $nome;
                
            }else{
                echo "<script language='JavaScript'>
                        alert('Usuário ou senha Incorreto!');
                        javascript:window.location='login.html';                 
                    </script>";
            }

            if($login == $login and $senha == $password and $tipo == 2){
                echo "<script language='JavaScript'>
                        alert('Você não possui acesso ao sistema!');                 
                    </script>";
            } 
        }      
            
        
    }


?>