<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13 – Caixa Eletrônico</title>
</head>
<body>
    <header>
        <h3>
            Caixa Eletrônico
        </h3>
    </header>
    <section>
        <?php

            $saque = 0;

            if(isset($_GET['saque'])){
                $saque = $_GET['saque'];
                $resto = $saque;

                $total100 = floor($resto / 100);    // floor arredonda o valor para baixo, igual ao (int)
                $resto %= 100;

                $total50 = floor($resto / 50);
                $resto %= 50;

                $total20 = floor($resto / 20);
                $resto %= 20;

                $total10 = floor($resto / 10);
                $resto %= 10;

                $total5 = floor($resto / 5);
                $resto %= 5;
            }
        ?>
    </section>
    <main>
        <form method="GET">
            <label><h4>Qual valor deseja sacar (R$)?</h5></label>
            <input type="number" name="saque" id="saque" step="5" required>
            <label><h5>*Notas disponíveis: R$100, R$50, R$20, R$10 e R$5</h6></label>
            <p></p>
            <button type="submit">Sacar</button>
        </form>
    </main>
    <section>
        <ul>
            <h4>Seu saque de <?=$saque?> vai resultar em: </h4> <!-- inserir imagens para ilustração -->
            <li><?=$total100?>x notas de R$100</li>
            <li><?=$total50?>x notas de R$50</li>
            <li><?=$total20?>x notas de R$20</li>
            <li><?=$total10?>x notas de R$10</li>
            <li><?=$total5?>x notas de R$5</li>
        </ul>
    </section>
</body>
</html>