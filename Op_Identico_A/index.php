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

            <legend>Login</legend>
            <div class="container">

                <form action="validar.php" method="POST">

                    <label for="id">Usuário</label><br>
                    <input type="text" id="id" name="id" placeholder="Digite seu ID" required><br><br>

                    <label for="senha">Senha</label><br>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>

                    <input type="submit" value="Logar">


                </form>
            </div>
             

        </fieldset>
        
    </body>
    



</html>