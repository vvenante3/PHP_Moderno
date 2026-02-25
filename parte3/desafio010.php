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
            $ano_atual          = date("Y");                    // realizar validacao de dados

            $data_nascimento    = $_GET['data_nascimento'] ?? '2000'; 
            $data_futuro        = $_GET['data_futuro'] ?? $ano_atual;

            $idade              = $data_futuro - $data_nascimento;
        ?>
    </section>
    <main>
        <form method="GET">                                     <!-- aprimorar futuramente considerando o dia, mês e ano --> 
            <label>Informe o seu ano de nascimento</label>
            <input type="number" name="data_nascimento" id="data_nascimento" min="1930" value="2000">     <!-- value deixa o valor já pre preenchido -->
            <br><br>
            <label>Descubra sua idade no ano de</label>
            <input type="number" name="data_futuro" id="data_futuro" min="1930" value="<?php echo $ano_atual; ?>">
            <br><br>
            <button type="submit">Qual será minha idade?</button>
        </form>
    </main>
    <section>
        <?php
            echo "<br>A sua idade em " . $data_futuro . " será de<strong> " . $idade . " anos</strong>."; 
        ?>
    </section>
    
</body>
</html>