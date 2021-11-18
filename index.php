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
                <h1>Cadastro de Usuários</h1>
                <hr><br><br>

                <form method="post" action="processa.php">
                    <input type="submit" value="Salvar" class="btn">
                    <input type="submit" value="Limpar" class="btn">
                    <br><br>

                    Nome: <br>
                    <input type="text" name="nome" class="campo" maxlength="40" require autofous><br>
                    Email: <br>
                    <input type="text" name="email" class="campo" maxlength="50" require><br>
                    Profissão: <br>
                    <input type="text" name="profissao" class="campo" maxlength="40" require>
                </form>
            </section>
        </div>    
    </body>
</html>