<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $profissao = $_POST['profissao'];

    $sql = "INSERT INTO usuarios (nome, email, profissao) values ('$nome','$email','$profissao')";
    $salvar = mysqli_query($conexao, $sql);

    $linhas = mysqli_affected_rows($conexao);

    mysqli_close($conexao);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cadastro</li></a>
                    <a href="consultas.php"><li>Consultas</li></a>
                </ul>
            </nav>                

            <section>
                <h1>Confirmação de Cadastro</h1>
                <hr><br><br>
                <?php
                    if($linhas == 1){
                        print "Cadastro efetuado com successo!";
                    }else{
                        print "Cadastro não efetuado.<br> Já existe um usuário com este e-mail"; 
                    }

                ?>

                
            </section>
        </div>
    
    </body>
</html>