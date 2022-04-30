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
    <br>
        <h1>Formulário para Contato</h1>

            <img class="img-lorem img-thumbnail m-4 rounded float-end" src="https://www.acidadevotuporanga.com.br/Images/Noticia/Grande/00000000191637668878913859183.jpg" alt="Instituto" height = "492" width = "768">
            <p>
           <form action="destino.php" method ="POST">
           
            <label for="nome"> Nome: </label><br>
            <input type="text" name="nome" id="nome" required><br>

            <label for="email"> Email: </label><br>
            <input type="text" name="email" id="email" required><br>

            <label for="mensagem"> Mensagem: </label><br>
            <textarea id="mensagem" name="mensagem" rows="5" cols="50">
            </textarea><br><br>


            <button type="submit"> Enviar </button> 
            <button type="reset"> Limpar </button>

           </form>
            </p>

            <br><br><br>

            <?php
                require 'footer.php'
            ?>
    


</body>

</html>