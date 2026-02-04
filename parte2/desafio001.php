<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01</title>
</head>
<body>
    <?php
        // verificar se o metodo sera get e se não estara vazio

        // trazer a variavel utilizada no form

        // fazer o processamento do resultado
            // criar uma variavel pro antecessor;
            // criar uma variavel pro sucessor;
    ?>
    <header>
        <h3>Verificador de Antecessor e Sucessor</h3>
    </header>
    <section>
        <form method="$_GET">
            <label>Digite um número:</label>
            <input type="number" name="numero" id="numero">

            <input type="submit">verificar</input>
        </form>
    </section>
    <section>
        <?php
            // mostrar os números:
                // numero inserido
                // numero antecessor
                // numero sucessor
        ?>
    </section>

</body>
</html>