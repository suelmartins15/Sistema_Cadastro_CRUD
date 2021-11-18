<?php
    include_once("conexao.php");

    $filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

    $sql = "select * from usuarios where profissao like '%$filtro%' ";
    $consultas = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consultas);
    
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
                <h1>Consultas de Usuários</h1>
                <hr><br><br>
                <form action="" method="get">
                    Filtrar por profissão: <input type="text" name="filtro" class="campo" requerid autofocus>                
                    <input type="submit" value="Pesquisar" class="btn">
                </form>
                    

                <?php
                    print "Resultado da pesquisa com a palavra <strong> $filtro</strong>.<br><br>";
                    print "$registros registros encontados.";

                    print "<br><br>";

                    while($exibirRegistros = mysqli_fetch_array($consultas)){
                        $codigo = $exibirRegistros[0];
                        $nome = $exibirRegistros[1];
                        $email = $exibirRegistros[2];
                        $profissao = $exibirRegistros[3];

                        print "<article>";
                        
                            print "$codigo<br>";
                            print "$nome<br>";
                            print "$email<br>";
                            print "$profissao";

                        print "</article>";
                    }
                    mysqli_close($conexao);
                   
                ?>

            </section>
        </div>    
    </body>
</html>