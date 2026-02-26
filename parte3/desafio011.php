<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11 – Reajustando Preços</title>
</head>
<body>
    <header>
        <h3>
            Reajustando Preços
        </h3>
    </header>
    <section>
        <?php
            $valor_final = 0;

            if(isset($_POST['valor'])){
                $valor      = $_POST['valor'];
                $desconto   = $_POST['desconto'] ?? 0;

                $valor_desconto = ($valor * $desconto / 100);
                $valor_final = $valor - $valor_desconto;
            }
        ?>
    </section>
    <main>
        <form method="POST">
            <label>Informe o valor</label>
            <input type="number" name="valor" id="valor" step="0.02" placeholder="R$" required>
            <br><br>
            <!-- desenvolver uma funcionalidade que o usuario opte em 'descontar' ou 'acrescentar' -->

            <label>Informe o reajuste</label>
            <input type="number" name="desconto" id="desconto" placeholder="%" required>
            <br><br>

            <button type="submit">Calcular</button> 
        </form>
    </main>
    <section>
        <?php
            echo "<br>O novo valor <strong>com desconto</strong> é de R$ " . number_format($valor_final, 2, ",", ".");
        ?>
    </section>
</body>
</html>