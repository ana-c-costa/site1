<?php 
    include("conecta.php");
    include("crud.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $n = 0;
    $m = 0;
    while($linhas = $comando->fetch())
    {
        $n = 1;
        $m = 1;
    }
    if($n == 0)
    {
        header("Location: telainicial.html");
    }
    if($n == 1)
    {  
        else
        {
            header("Location: login.html");
        }
    }