<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 – Calculadora de Tempo</title>
</head>
<body>
    <header>
        <h3>
            Calculadora de Tempo
        </h3>
    </header>
    <section>
        <?php
            if(isset($_POST['total'])){
                $total          = $_POST['total'];
                $sobra          = $total;

                $semanas        = (int)($sobra / 604_800);
                $sobra          = $sobra % 604_800;

                $dias           = (int)($sobra / 86_400);
                $sobra          = $sobra % 86_400;

                $horas          = (int)($sobra / 3_600);
                $sobra          = $sobra % 3_600;

                $minutos        = (int)($sobra / 60);
                $sobra          = $sobra % 60;

                $segundos       = $sobra;
            }
        ?>
    </section>
    <main>
        <form method="POST">
            <label>Digite a quantidade de horas</label>
            <input type="number" name="total" id="total" required>

            <button type="submit">Calcular</button>
        </form>
    </main>
    <section>
        <ul>
            <h4><?= $total?> Equivale:</h4>
            <li><?= $semanas  ?> Semenas</li>
            <li><?= $dias     ?> Dias</li>
            <li><?= $horas    ?> Horas</li>
            <li><?= $minutos  ?> Minutos</li>
            <li><?= $segundos ?> Segundos</li>
        </ul>
    </section>
</body>
</html>