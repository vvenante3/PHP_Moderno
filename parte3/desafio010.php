<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 – Cálculo de Idade:</title>
</head>
<body>
    <header>
        <h3></h3>
    </header>
    <section>
        <?php
            if(isset($_GET['data_nascimento']) && ($_GET['data_futuro'])){
                $data_nascimento    = $_GET['data_nascimento'];
                $data_futuro        = $_GET['data_futuro'];
            }
        ?>
    </section>
    <main>
        <form method="GET">
            <label>Informe o seu ano de nascimento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" required>
            <br><br>
            <label>Descubra sua idade no ano</label>
            <input type="date" name="data_futuro" id="data_futuro" required>
            <br><br>
            <button type="submit">Descobrir</button>
        </form>
    </main>
    <section>
        <?php
            // exibicao de resultado
        ?>
    </section>
    
</body>
</html>