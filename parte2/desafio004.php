<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 004 - Analisador de número</title>
</head>
<body>
    <div>
        <?php
        if($_GET['numero']){
            $numero = $_GET['numero'];
        }
        ?>
    </div>
    <header>
        <h3>Analisador de Número Real</h3>
    </header>
    <section>
        <form method="GET">
            <input type="number" name="numero" id="numero" placeholder="Digite o número" required>
            <button type="submit">Analisar</button>
        </form>
    </section>
    <br>
    <section>
        <?php
            echo $numero;
        ?>
    </section>

</body>
</html>