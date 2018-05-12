<?php
    // Puxa os dados do banco
    require('connection.php'); 

    // Declara variáveis
    $email = $_POST['email'];
    $logar = $_POST['logar'];
    $password = md5($_POST['password']);
    
    // Faz a verificação e a procura dentro do banco de dados
if (isset($logar)){
    $query = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) <= 0){
            echo "Login ou senha incorretos";
            die();
        }else{
            echo "Logou FDP";
            setcookie("email",$email);
            header("Location:home.php");
        }
    }
?>