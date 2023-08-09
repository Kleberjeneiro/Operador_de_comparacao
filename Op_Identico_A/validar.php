<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Checar se o número e par ou impar</title>

    </head>

    <body>

        <h1></h1>

        <fieldset>

            <legend>Validar</legend>
            <div class="container">

                <?php

                        $id = $_POST["id"];
                        $senha = $_POST["senha"];

                        if ($id === "kleber" && $senha === "A12345@") {

                            echo "Acesso Liberado";

                        }elseif ($id !== "kleber" || $senha !== "A12345@") {
                            
                            echo "Usuário ou senha inválidos";
                        } else {

                            echo "Dados Inválidos";            
                        }
                ?>
                <br><br>
                <a href="index.php"> Voltar </a>

            </div>
             

        </fieldset>
        
    </body>
    
</html>