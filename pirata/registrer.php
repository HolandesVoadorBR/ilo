<?php
// SIMPLE CODE // SIMPLE IDEA
    require('connection.php'); //Chama o arquivo de conexão com a DB

    // Declarando variáveis para reduzir code
    $namev = $_POST['name'];
    $mailv = $_POST['email'];
    $passv = $_POST["password"];
    $crypass = md5($_POST["password"]);
    
    // Verifica se o form está empty

    if (empty($namev) && empty($mailv) && empty($passv)){
        echo "Fill in all the fields";
        die();
        return false;
    }


    // Variável declarada que vai inserir no banco de dados
    $query = "INSERT INTO `user` (name, email, password ) VALUES ('" . $namev . "', '" . $mailv . "', '" . $crypass . "')";
     
    // resultado ligação com banco de dados e uso da variável query para inserir os dados
    $result = mysqli_query($con, $query);

    if ($result)
    {
        $sucess = "Registration Successfully.";
        echo "$sucess";

    }else{
        $fail = "Registration Fail.";
        echo "$fail";
    }

    sleep(2);
    header("Location:login.php");
    ?>