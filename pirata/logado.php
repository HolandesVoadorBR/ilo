
    <?php
    // sessão iniciada
    session_start();

    if(!isset($_SESSION['email'])){
        header("location: home.php");
        exit;
    }

    ?> 
