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
        if($_GET['numero'] ?? 0 ){
            $numero = $_GET['numero'];

            $int = (int) $numero;
            $fra = $numero - $int;
        }
        ?>
    </div>
    <header>
        <h3>Analisador de Número Real</h3>
    </header>
    <section>
        <form method="GET">
            <input type="number" name="numero" id="numero" step="0.001" placeholder="Digite o número" required>
            <button type="submit">Analisar</button>
        </form>
    </section>
    <br>
    <section>
        <?php
            echo "O número digitado pelo usuárip foi: <strong>" . number_format($numero, 3, ",", ".") . "</strong><br>";
            echo "A parte inteira do número é: " . number_format($int, 0, ",", ".") . "<br>";
            echo "A parte frácionária do número é: <strong>" . number_format($fra, 3, ",", ".") . "</strong>";
        ?>
    </section>

</body>
</html>