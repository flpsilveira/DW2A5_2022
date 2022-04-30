<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>

</head>

<body>

<?php
     require 'header.php'
?>
    
    <h1> Destino </h1>

    <hr>
    <?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    echo "<p> Nome:  $nome </p>";
    echo "<p> email:  $email </p>";
    echo "<p> mensagem:  $mensagem </p>";

    ?>
    <form>
    <button type="return"> Voltar </button> 
    </form>


<?php
    require 'footer.php'
?>
    


</body>

</html>