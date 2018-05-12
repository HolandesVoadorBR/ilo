<?php
$con = mysqli_connect("localhost", "root", "toor", "ilo"); //Faz a ligação

// se con não retornar erro ele vai dar sucesso
if (!$con) { 
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>


