<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Simple MVC</title>
        <link href="layout.css" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="">
            <input type="hidden" name="action" value="cadastrar">
            <fieldset>
                <legend>Cadastro:</legend>
                <p><label class="field" for="nome">nome:</label><input type="text" name="nome" value="" class="text-250"></p>
                <p><label class="field" for="email">e-mail:</label><input type="text" name="email" value="" class="text-250"></p>
                <p>
                    <label class="field" for="sexo">Sexo</label>
                    <label class="sexo"><input type="radio" name="sexo" value="M" checked="checked">masculino</label>
                    <label class="sexo"><input type="radio" name="sexo" value="F">feminino</label>
                </p>
                <p><input type="submit" value="Salvar"></p>
            </fieldset>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            require_once 'Controller/ClienteController.php';
        }
        ?>
    </body>
</html>