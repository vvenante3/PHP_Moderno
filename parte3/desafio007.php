<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07 - Salário Mínimo</title>
</head>
<body>
    <header>
        <h3>Divisor de Salário Mínimo</h3>
    </header>
    <p></p>
    <section>
        <?php
            if(isset($_GET['valor'])){
                $valor = $_GET['valor'];
                $salario_minimo = 1621;

                $qtd_salario_minimo = $valor / $salario_minimo;
                $int_qtd_salario_minimo = (int)$qtd_salario_minimo;
                $sobra = $valor - ($int_qtd_salario_minimo * $salario_minimo);
            }
        ?>
    </section>
    <main>
        <form method="GET">
            <label></label>
            <input type="number" name="valor" id="valor" step="0.01" required></input>

            <button type="submit">Verificar</button>
        </form>
        <p></p>
    </main>
    <section>
        <?php                                           // criar validação de saída de informação
            echo "O valor R$" . $valor . " informado cabe " . $int_qtd_salario_minimo . "X dentro do salário mínimo de " . $salario_minimo . "<br>";
            "<p></p>";
            echo "E ainda sobram " . $sobra . "<br>";

        ?>
    </section>
</body>
</html>